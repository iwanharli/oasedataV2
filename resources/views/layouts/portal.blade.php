<!DOCTYPE html>
<html lang="en">
<!-- iteck-html.themescamp.com/home-app-landing.html -->

<head>
    @include('_partials._head')
</head>

<body>

    <!-- ====== start loading page ====== -->
    @include('_partials._preloader')
    <!-- ====== end loading page ====== -->

    <!-- ====== start navbar ====== -->
    @include('_partials._navbar')
    <!-- ====== end navbar ====== -->

    <!-- ====== start header ====== -->
    @if (Route::currentRouteName() === 'home')
        @include('_partials._header')
    @endif
    <!-- ====== end header ====== -->

    <!--Contents-->
    @yield('portal_content')
    <!--End-Contents-->

    <!-- ====== start footer ====== -->
    @include('_partials._footer')
    <!-- ====== end footer ====== -->

    <!-- ====== start to top button ====== -->
    <a href="#"
        class="to_top bg-gray rounded-circle icon-40 d-inline-flex align-items-center justify-content-center">
        <i class="fa fa-arrow-circle-up text-dark"></i>
    </a>
    <!-- ====== end to top button ====== -->

    <!-- ====== request ====== -->
    @include('_partials._script')


</body>

</html>
