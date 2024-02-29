<?php

namespace App\Http\Services;

use App\Http\Services\Core\BaseService;

class AppointmentService extends BaseService {

    public function getPatientAppointments() {
        return $this->model
            ->load('clinic')
            ->where('user_id', auth()->user()->id)
            ->get();
    }
}
