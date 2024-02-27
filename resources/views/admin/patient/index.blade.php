@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">List of Patients</h3>
                    @can('patients.create')
                        <button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#modal">Add New Patient</button>
                    @endcan
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Patient Id</th>
                                <th>Patient Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Enable/Disable</th>
                                <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach($patients as $patient)
                                <tr>
                                    <td>{{ $patient->id }}</td>
                                    <td>{{ $patient->name }}</td>
                                    <td>{{ $patient->email }}</td>
                                    <td>{{ $patient->mobile_number }}</td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input change-status" type="checkbox" data-id="{{ $patient->id }}" value="yes" @if($patient->disabled == 0) checked @endif>
                                            <label class="form-check-label" for="mySwitch"> @if($patient->disabled == 0) Enabled @else Disabled @endif</label>
                                        </div>
                                    </td>
                                    <td>
                                        @can('patients.edit')
                                            <a href="javascript:;" onclick="editPatient({{ $patient }})" title="Edit Patient"><i class="fa fa-pencil-alt"></i></a>
                                        @endcan
                                        &nbsp;
                                        @can('patients.delete')
                                            <a href="javascript:;" class="delete" data-id="{{ $patient->id }}" data-model="user" title="Delete Patient"><i class="fa fa-trash"></i></a>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <div id="editModal"></div>
    @can('patients.create')
        <x-partials.modal title="New Patient" component="modal.new-patient" data="" />
    @endcan
@endsection
@include('partials.table')
@include('partials.actions')
@push('custom-scripts')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).on('hide.bs.modal','.modal', function () {
            $('#editModal').html('');
        });
        function editPatient(patient) {
            $.ajax({
                type: 'post',
                url: '{{ route('admin.get-patient-details') }}',
                data: {
                    _token: '{{ @csrf_token() }}',
                    patient: patient
                },
                success: function (response) {
                    $('#editModal').html('').html(response);
                    $('.modal:first-child').modal();
                }
            });
        }
    </script>
@endpush

