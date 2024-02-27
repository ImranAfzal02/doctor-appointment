<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Http\Services\DoctorService;
use App\Models\Doctor;
use App\Models\User;

class Doctorcontroller extends Controller {

    private $service;

    public function __construct(DoctorService $service) {
        $this->service = $service;
    }

    public function index(){
        $doctors = $this->service->setModel(new Doctor())->getDoctors();
        return view('admin.doctor.index', compact('doctors'));
    }
}
