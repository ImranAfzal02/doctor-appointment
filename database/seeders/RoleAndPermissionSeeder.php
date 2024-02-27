<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \DB::table('role_has_permissions')->truncate();
        \DB::table('permissions')->truncate();
        \DB::table('roles')->truncate();

        $rolePermissions = config('role_and_permission');

        foreach ($rolePermissions as $role => $permissions) {
            $newRole = Role::create([
                'name' => $role
            ]);
            foreach ($permissions as $module => $permission) {
                foreach ($permission as $per) {
                    $newPermission = Permission::create([
                        'name' => $module.'.'.$per
                    ]);
                    $newRole->givePermissionTo($newPermission);
                }
            }
        }
        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
