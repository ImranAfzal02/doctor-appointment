<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller {
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request) {
        $appointments = Appointment::whereDate('created_at', Carbon::today())->get();
        return view('admin.dashboard.dashboard', compact('appointments'));
    }
}
