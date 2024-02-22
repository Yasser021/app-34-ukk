<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VirtuaLib</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('build/assets/image/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('build/assets/css/styles.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('build/assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" />
</head>

<body style="background-color:white; color:black;">
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        @include('sweetalert::alert')

        @include('comp.sidebar')
        @yield('konten')
    </div>
    <script src="{{ asset('build/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('build/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('build/assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('build/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('build/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('build/assets/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('build/assets/js/dashboard.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
</body>

</html>
