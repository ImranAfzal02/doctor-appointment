<div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Make a new Appointment</h3>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="submit">
                <x-partials.select
                    id="clinic"
                    label="Clinic"
                    model="clinic"
                    :options="$this->clinics"
                    class="form-control"
                    required
                />

                <x-partials.input
                    type="date"
                    id="a_date"
                    label="Appointment Date"
                    model="appointment_date"
                    required
                />
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Make an Appointment</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
