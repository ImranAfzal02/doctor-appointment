<?php

namespace Database\Seeders;

use App\Models\Clinic;
use Illuminate\Database\Seeder;

class ClinicSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        \DB::table('clinics')->truncate();
        $clinics = config('clinics');

        foreach ($clinics as $clinic) {
            Clinic::create([
                'name' => $clinic
            ]);
        }
    }
}
