
@include ('partials/head');

<body>

    <!-- ======= Header ======= -->
    @include ('partials/header');

    @include ('customer/aside');
    @yield('admin');

    @include ('partials/footer');