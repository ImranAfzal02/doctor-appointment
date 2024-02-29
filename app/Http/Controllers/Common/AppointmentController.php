<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;

class AppointmentController extends Controller {
    public function index() {
        if(auth()->user()->hasRole('patient'))
            return view('patient.appointment.index');

        return view('admin.appointment.index');
    }
}
