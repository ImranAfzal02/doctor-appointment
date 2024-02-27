<?php

namespace App\Http\Controllers;

use App\Http\Services\PatientService;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PatientController extends Controller {
    private PatientService $patientService;
    public function __construct(PatientService $patientService) {
        $this->patientService = $patientService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index() {

        $patients = $this->patientService
            ->setModel(new User())
            ->getPatients();

        return view('admin.patient.index', compact('patients'));
    }

    public function getPatientDetails(Request $request) {
        echo \Illuminate\Support\Facades\View::make('components.partials.modal')
            ->with('title', 'Edit Patient')
            ->with('component', 'modal.new-patient')
            ->with('data', $request->patient)
            ->render();
    }
}
