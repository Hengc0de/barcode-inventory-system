
@include ('partials/head');

<body>

    <!-- ======= Header ======= -->
    @include ('customer/header');

    @include ('customer/aside');
    @yield('admin');

    @include ('partials/footer');