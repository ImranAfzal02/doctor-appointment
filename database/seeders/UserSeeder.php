<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {

        \DB::table('users')->truncate();

        $this->createAdmin();
        $this->createStaff();
    }

    private function createAdmin() {
        $role = Role::where('name', 'admin')->first();

        $user = User::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@demo.pk',
            'mobile_number' => '+923355022792',
            'password' => Hash::make('Pakistan@123'),
            'email_verified_at' => Carbon::now()
        ]);

        $user->assignRole($role);

    }

    private function createStaff() {
        $role = Role::where('name', 'staff')->first();

        $user = User::create([
            'first_name' => 'Staff',
            'last_name' => 'Member',
            'email' => 'staff@demo.pk',
            'mobile_number' => '+923331234567',
            'password' => Hash::make('Pakistan@123'),
            'email_verified_at' => Carbon::now()
        ]);

        $user->assignRole($role);

    }
}
