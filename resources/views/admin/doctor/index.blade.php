@extends('layouts.admin')

@push('custom-style')
    <style>
        p {
            margin: 0px !important;
        }
    </style>
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">List of Doctors</h3>
                    <a href="{{ route('admin.doctor.create') }}" class="btn btn-primary btn-sm float-right">Add Doctor</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Doctor Name</th>
                                <th>Description</th>
                                <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach($doctors as $doctor)
                                <tr>
                                    <td>{{ $doctor->id }}</td>
                                    <td>{{ $doctor->name }}</td>
                                    <td>{!! $doctor->description !!}</td>
                                    <td>
                                        <a href="{{ route('admin.doctor.edit', $doctor->id) }}" title="Edit"><i class="fa fa-pencil-alt"></i></a>
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
@endsection
@include('partials.table')
