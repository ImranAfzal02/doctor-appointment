<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $this->createDoctors();
    }

    private function createDoctors() {
        $doctors = config('doctors');
        foreach ($doctors as $doctor) {
            Doctor::create([
                'name' => $doctor['name'], 'description' => $doctor['description'],
            ]);
        }
    }
}
