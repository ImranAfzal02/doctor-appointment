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
        <div class="col-12">
            @livewire('patient.appointments-table')
        </div>
    </div>

@endsection
@include('partials.actions')
