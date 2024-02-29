<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class DashboardController extends Controller {
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request) {
        $appointments = Appointment::userAppointments()->get();
        return view('patient.dashboard.dashboard', compact('appointments'));
    }
}
