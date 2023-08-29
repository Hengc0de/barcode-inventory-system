

@include ('partials/head');

<body>

    <!-- ======= Header ======= -->
    @include ('partials/header');

    @include ('partials/aside');
    @yield('admin');

    @include ('partials/footer');