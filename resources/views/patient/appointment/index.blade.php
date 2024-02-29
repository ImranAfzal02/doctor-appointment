@extends('layouts.admin')

@push('custom-style')
    <style>
        ul.pagination {
            float: right;
        }
    </style>
@endpush

@section('content')
    <div class="row">
        <div class="col-9">
            @livewire('patient.appointments-table')
        </div>
        <div class="col-3">
            @livewire('patient.create-appointment')
        </div>
    </div>

@endsection

{{--@include('partials.table')--}}
@include('partials.actions')
