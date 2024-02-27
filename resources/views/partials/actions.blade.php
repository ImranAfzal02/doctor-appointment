@push('custom-style')
    <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}">
@endpush

@push('custom-scripts')
    <!-- Toastr -->
    <script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>
    <script type="text/javascript">
        $(function () {

            $('.change-status').on('change', function() {
                const checked = $(this).is(':checked');
                const id = $(this).data('id');
                $.ajax({
                    type: 'post',
                    data: {
                        _token: '{{ @csrf_token() }}',
                        disable: (!checked ? 1 : 0),
                        id: id
                    },
                    url: '{{ route('change-user-status') }}',
                    success: function (response) {
                        toastr.success('User status changed successfully.');
                    },
                    error: function () {

                        toastr.error('Something went wrong. Please contact Support.')
                    }
                });
            });

            $("body").on('click', '.delete', function() {
                const model = $(this).data('model');
                const id = $(this).data('id');
                let confirm = window.confirm('Are you sure you want to delete this ' + model + '?');
                if (confirm) {
                    $.ajax({
                        type: 'DELETE',
                        data: {
                            "_token": "{{ @csrf_token() }}",
                            id: id,
                            model: model
                        },
                        url: "{{ route('destroy-model') }}",
                        success: function (response) {
                            toastr.success(response.message);
                            window.location.reload();
                        },
                        error: function (error) {
                            toastr.error(error.message)
                        }
                    })
                }
            });
        });
    </script>
@endpush
