<html>
    <head>
    @include('includes.admin-head')
    </head>
    <body class="hold-transition sidebar-mini" onload="onloadFunc()">
        <div class="wrapper">
            @include('includes.admin-nav')
            @include('includes.admin-sidebar')
            <div class="content-wrapper">
                <div class="content-header"></div>
                    @yield('content')
                @include('includes.admin-footer')
            </div>
        </div>

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/adminlte.js') }}"></script>
        <script src="{{ asset('js/demo.js') }}"></script>
        <script src="{{ asset('lib/sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('lib/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('lib/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        <script src="{{ asset('lib/slimScroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('lib/chartjs-old/Chart.min.js') }}"></script>
        <script src="{{ asset('lib/js/pages/dashboard2.js') }}"></script>
    </body>
</html>
