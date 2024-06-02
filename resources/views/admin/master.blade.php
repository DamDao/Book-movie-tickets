<!-- Sweet Alert css-->

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets_admin') }}/images/favicon.ico">

    <!-- jsvectormap css -->
    <link href="{{ asset('assets_admin') }}/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="{{ asset('assets_admin') }}/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets_admin') }}/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <!-- Layout config Js -->
    <script src="{{ asset('assets_admin') }}/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets_admin') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets_admin') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets_admin') }}/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets_admin') }}/css/custom.min.css" rel="stylesheet" type="text/css" />


</head>

<body>

    @include('admin.layouts.header')

    @include('admin.layouts.menu')
    {{-- @yield('title') --}}
    @yield('main-content')


    <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
        <div class="offcanvas-footer border-top p-3 text-center">

        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets_admin') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets_admin') }}/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('assets_admin') }}/libs/node-waves/waves.min.js"></script>
    <script src="{{ asset('assets_admin') }}/libs/feather-icons/feather.min.js"></script>
    <script src="{{ asset('assets_admin') }}/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="{{ asset('assets_admin') }}/js/plugins.js"></script>

    <!-- apexcharts -->
    <script src="{{ asset('assets_admin') }}/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="{{ asset('assets_admin') }}/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="{{ asset('assets_admin') }}/libs/jsvectormap/maps/world-merc.js"></script>

    <!--Swiper slider js-->
    <script src="{{ asset('assets_admin') }}/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Dashboard init -->
    <script src="{{ asset('assets_admin') }}/js/pages/dashboard-ecommerce.init.js"></script>
    <!-- prismjs plugin -->
    <script src="{{ asset('assets_admin') }}/libs/prismjs/prism.js"></script>
    <script src="{{ asset('assets_admin') }}/libs/list.js/list.min.js"></script>
    <script src="{{ asset('assets_admin') }}/libs/list.pagination.js/list.pagination.min.js"></script>

    <!-- listjs init -->
    <script src="{{ asset('assets_admin') }}/js/pages/listjs.init.js"></script>

    <!-- Sweet Alerts js -->
    <script src="{{ asset('assets_admin') }}/libs/sweetalert2/sweetalert2.min.js"></script>

    <!-- App js -->
    <script src="{{ asset('assets_admin') }}/js/app.js"></script>
</body>

</html>
