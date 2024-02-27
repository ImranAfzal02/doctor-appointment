<?php

namespace App\Livewire\Modal;

use App\Http\Services\PatientService;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class NewPatient extends Component {

    public $service;

    public $first_name = '';
    public $last_name = '';
    public $email = '';
    public $phone = '';
    public $isEdit = false;
    public $data = [];

    protected $rules = [
        'first_name' => 'required|string',
        'last_name' => 'required|string',
        'email' => 'required|email|unique:users',
        'phone' => 'required|unique:users,mobile_number',
    ];

    public function submit(PatientService $service) {
        $this->service = $service;
        if(!$this->isEdit) {
            $this->createEmployee();
        } else {
            $this->updatePatient();
        }
    }

    private function createEmployee() {
        $this->validate();
        $this->service
            ->setModel(new User())
            ->setAttributes([
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'email' => $this->email,
                'mobile_number' => $this->phone,
                'password' => Hash::make(env('DEFAULT_PASSWORD'))
            ])
            ->savePatient();

        toastr()->success('Patient has been created successfully');
        $this->reset();

        return redirect()->route('admin.patient.index');
    }

    private function updatePatient() {
        $this->service
            ->setModel(User::find($this->data['id']))
            ->setAttributes([
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'mobile_number' => $this->phone
            ])
            ->updatePatient();
        toastr()->success('Patient has been updated successfully');
        $this->reset();

        return redirect()->route('admin.patient.index');
    }

    public function render() {
        if ($this->isEdit) {
            $this->first_name = $this->data['first_name'];
            $this->last_name = $this->data['last_name'];
            $this->email = $this->data['email'];
            $this->phone = $this->data['mobile_number'];
        } else {
            $this->reset();
        }
        return view('livewire.modal.new-patient');
    }
}
