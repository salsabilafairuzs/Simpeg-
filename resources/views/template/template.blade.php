<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inven-SB</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('backend/assets/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/styles.min.css') }}"/>
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"> --}}
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        @include('template.sidebar')
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
           @include('template.atas')
            <!--  Header End -->
           @include('template.konten')
        </div>
    </div>
    <script src="{{ asset('backend/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('backend/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('backend/assets/js/dashboard.js') }}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('.table').DataTable(); // Inisialisasi DataTables
    });
</script> --}}
</body>

</html>
