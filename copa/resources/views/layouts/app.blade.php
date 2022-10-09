<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')
    <body class="hold-transition sidebar-mini sidebar-collapse">
        <div class="wrapper">
            <div class="overlay">
                <img src="{{ asset('assets/dist/img/loader.gif') }}" alt="" />
            </div>
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
                    <div class="msg">
                        @include('layouts.flash-message')  
                    </div>
                    @yield('content')
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            @include('layouts.footer')
            @include('layouts.aside')
        </div>
        <script>localStorage.setItem('user', {{ \Auth::user()->id }});</script>
        <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
        <script src="{{ asset('assets/dist/js/demo.js') }}"></script>
        <script src="{{ asset('assets/dist/js/score.js') }}"></script>
    </body>
</html>
