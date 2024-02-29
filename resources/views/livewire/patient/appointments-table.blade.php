<div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title float-left">List of Appointments</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-3">
                    <x-partials.select
                        id="statusFilter"
                        label="Appointment Status"
                        model="typeSearch"
                        :options="$this->statuses"
                        class="form-control"
                    />
                </div>
                <div class="col-3 offset-6 float-right">
                    <x-partials.input
                        type="text"
                        id="search"
                        label="Search"
                        model="search"
                        class="float-right"
                        placeholder="Search"
                        wire:model.live.debounce.300ms="search"
                    />
                </div>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        @if(auth()->user()->hasRole('admin'))
                            <th>Patient Name</th>
                            <th>Patient Mobile</th>
                        @endif
                        <th>Clinic</th>
                        <th>Appointment Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($this->appointments as $appointment)
                        <tr>
                            <td>{{ $appointment->id }}</td>
                            @if(auth()->user()->hasRole('admin'))
                                <td>{{ $appointment->patient->name }}</td>
                                <td>{{ $appointment->patient->mobile_number }}</td>
                            @endif
                            <td>{{ $appointment->clinic->name }}</td>
                            <td>{{ $appointment->appointment_date }}</td>
                            <td>{{ $appointment->status }}</td>
                            <td>
                                @if(auth()->user()->hasAnyRole(['admin', 'staff']))
                                    @if(strtolower($appointment->status) == 'pending')
                                        <a href="javascript:;"
                                           class="text-success"
                                           wire:click="setStatus({{ $appointment }}, 'Accepted')"
                                           title="Accept"><i class="fas fa-check-circle"></i></a>
                                        &nbsp;

                                        <a href="javascript:;"
                                           class="text-danger"
                                           wire:click="setStatus({{ $appointment }}, 'Rejected')"
                                           wire:confirm="Are you sure you want to reject this appointment?"
                                           title="Reject"><i class="fas fa-times-circle"></i></a>
                                        &nbsp;
                                    @endif
                                @endif
                                @if(auth()->user()->hasRole('patient'))
                                    @if(strtolower($appointment->status) == 'pending')
                                    <a href="javascript:;"
                                       wire:click="setStatus({{ $appointment }}, 'Cancelled')"
                                       wire:confirm="Are you sure you want to cancel this appointment?"
                                       title="Cancel"><i class="fas fa-times-circle"></i></a>
                                        &nbsp;
                                    @endif
                                    <a href="javascript:;"
                                       class="text-danger"
                                       wire:click="deleteAppointment({{ $appointment }})"
                                       wire:confirm="Are you sure you want to delete this appointment?"
                                       title="Delete"><i class="fas fa-trash"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row mt-3">
                <div class="col-12 text-right">
                    {{ $this->appointments->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
