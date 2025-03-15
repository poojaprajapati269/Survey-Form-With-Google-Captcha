<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Survey Customer')</title>

    <!-- CSS Files -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/toastr.min.css') }}">


<!-- JavaScript Files -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" defer></script>
<script src="{{ asset('assets/js/datatables.bootstrap.min.js') }}" defer></script>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/toastr.min.js') }}"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .card-header.text-grey.text-center {
            background-color: #0f9961;
            color: aliceblue;
        }
        .text-green{
            color: #0f9961;
        }
        .star {
            font-size: 24px;
            color: gray;
            cursor: pointer;
            transition: color 0.3s;
        }

        input[type="radio"]:checked + label .fa-star {
            color: gold;
        }

        .pagination .page-item.active .page-link {
            background-color: #0b774b !important;
            border-color: #0b774b !important;
            color: white !important;
        }

        .pagination .page-link {
            color: #0b774b !important;
        }

        .pagination .page-link:hover {
            background-color: #0f9961 !important;
            border-color: #0f9961 !important;
            color: white !important;
        }

    </style>
</head>
<body>

        @yield('content')
        @stack('scripts')

{{-- Include DataTables Scripts --}}

    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#surveyTable').DataTable({
                "paging": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true
            });
        });
    </script>
 <script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
</script>
<!-- Toastr Success & Error Messages -->
<script>
    @if(session('success'))
        toastr.success("{{ session('success') }}");
    @endif

    @if(session('error'))
        toastr.error("{{ session('error') }}");
    @endif
</script>

</body>
</html>
