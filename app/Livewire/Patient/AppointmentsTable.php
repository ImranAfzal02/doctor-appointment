<?php

namespace App\Livewire\Patient;

use App\Models\Appointment;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class AppointmentsTable extends Component {

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    private $appointments = [];
    public $search = '';
    public $typeSearch = 'All';
    public $statuses = [
        'All' => 'All',
        'Pending' => 'Pending',
        'Accepted' => 'Accepted',
        'Rejected' => 'Rejected'
    ];

    protected $listeners = ['newAppointmentCreated'];

    #[On('newAppointmentCreated')]
    public function newAppointmentCreated(): void {
        $this->getAppointments();
    }

    private function getAppointments(): void {
        $this->appointments = Appointment::when(auth()->user()->hasRole('patient'), function(Builder $query) {
            $query->userAppointments();
        })
            ->search($this->search, $this->typeSearch)
            ->latest()
            ->paginate(10);
    }

    public function setStatus($appointment, $status) {
        Appointment::where('id', $appointment['id'])->update([
            'status' => $status
        ]);
        toastr()->success("Appointment status changed to {$status}");
        $this->getAppointments();
    }

    public function deleteAppointment($appointment) {
        Appointment::where('id', $appointment['id'])->delete();
        toastr()->success('Appointment Deleted Successfully');
        $this->getAppointments();
    }

    public function render() {
        $this->getAppointments();
        return view('livewire.patient.appointments-table');
    }
}
