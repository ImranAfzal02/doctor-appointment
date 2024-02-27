<?php

namespace App\Http\Services;

use App\Http\Services\Core\UserService;
use App\Models\User;

class PatientService extends UserService {

    public function savePatient() {
        $patient = $this->model->create($this->getAttributes());
        $this->setModel($patient)->assignPatientRole();
        return $this;
    }

    public function updatePatient() {
        $this->model->update($this->getAttributes());
        return $this;
    }

    public function assignPatientRole() {
        $this->model->assignRole('patient');
        return $this;
    }

    public function getPatients() {
        return $this->model->role('patient')->get();
    }

}
