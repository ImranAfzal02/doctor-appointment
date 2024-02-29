@extends('layouts.admin')

@push('custom-style')
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Edit Doctor
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('admin.doctor.update', $doctor->id) }}">
                        @csrf
                        <div class="row">
                            <div class="col-3">
                                <x-partials.input
                                    type="text"
                                    id="name"
                                    label="Doctor Name"
                                    model="name"
                                    value="{{ $doctor->name }}"
                                    required
                                />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="summernote">Description</label>
                                <textarea class="form-control" name="description" id="summernote" rows="4">{{ $doctor->description }}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary float-right">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom-scripts')
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script type="text/javascript">
        $('#summernote').summernote({
            height: 500
        })
    </script>
@endpush
