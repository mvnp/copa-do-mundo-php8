<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')
    <body class="hold-transition sidebar-mini sidebar-collapse">
        <div class="wrapper">
            <!-- Navbar -->
            @include('layouts.nav')
            <!-- Sidebar -->
            @include('layouts.sidebar')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                @include('layouts.breadcrumb')
                <!-- Main content -->
                <section class="content">
                    @yield('content')
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            @include('layouts.footer')
            @include('layouts.aside')
        </div>
        <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
        <script src="{{ asset('assets/dist/js/demo.js') }}"></script>
    </body>
</html>
