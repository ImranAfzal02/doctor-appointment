<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Http\Services\DoctorService;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

class Doctorcontroller extends Controller {

    private $service;

    public function __construct(DoctorService $service) {
        $this->service = $service;
    }

    public function index(){
        $doctors = $this->service->setModel(new Doctor())->getDoctors();
        return view('admin.doctor.index', compact('doctors'));
    }

    public function create() {
        return view('admin.doctor.create');
    }

    public function store(Request $request) {
        $doctor = new Doctor();
        $doctor->name = $request->name;
        $doctor->description = $request->description;
        $doctor->save();
        toastr()->success('Doctor information saved successfully.');
        return redirect()->route('admin.doctor.index');
    }

    public function edit(Doctor $doctor) {
        return view('admin.doctor.edit', compact('doctor'));
    }

    public function update(Request $request, Doctor $doctor) {
        $doctor->name = $request->name;
        $doctor->description = $request->description;
        $doctor->save();
        toastr()->success('Doctor information saved successfully.');
        return redirect()->route('admin.doctor.index');
    }
}
