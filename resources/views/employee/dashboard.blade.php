
@include ('partials/head');

<body>

    <!-- ======= Header ======= -->
    @include ('employee/header');

    @include ('employee/aside');
    @yield('admin');

    @include ('partials/footer');