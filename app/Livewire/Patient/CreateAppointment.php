<?php

namespace App\Livewire\Patient;

use App\Models\Appointment;
use App\Models\Clinic;
use Carbon\Carbon;
use Livewire\Component;

class CreateAppointment extends Component {
    private $clinics = [];

    public $clinic = '';
    public $appointment_date = '';

    public function submit() {
        \DB::transaction(function() {
           Appointment::create([
               'clinic_id' => $this->clinic,
               'user_id' => auth()->user()->id,
               'appointment_date' => Carbon::parse($this->appointment_date)->format('Y-m-d')
           ]);
           $this->reset();
           $this->dispatch( 'newAppointmentCreated');
           toastr()->success('Appointment has been created.');
        });
    }

    function getClinics() {
        $this->clinics = Clinic::pluck('name', 'id')->toArray();
    }

    public function render() {
        $this->getClinics();
        return view('livewire.patient.create-appointment');
    }
}
