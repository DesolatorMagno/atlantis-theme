@if (session('message'))
    @push('script')
    <script>
        function showMensage() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 4000
            });

            Toast.fire({
                type: "{{ session('message_type') }}",
                text: "{{ session('message') }}"
            })
        };
    showMensage();
    </script>
    @endpush
@endif
