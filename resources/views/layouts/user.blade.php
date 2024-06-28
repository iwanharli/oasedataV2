@php
    $app = App\Models\App::where('id', '1')->first();
@endphp

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="opacity-0" lang="en">

<!-- BEGIN: Head -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    @include('_partials._user._head')
</head>
<!-- END: Head -->

<body>
    <div>
        @include('_partials._user._theme-setting')
    </div>
    <div
        class="rubick px-5 sm:px-8 py-5 before:content-[''] before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 dark:before:from-darkmode-800 dark:before:to-darkmode-800 before:fixed before:inset-0 before:z-[-1]">
        <!-- BEGIN: Mobile Menu -->
        @include('_partials._user._menu-mobile')
        <!-- END: Mobile Menu -->

        <div class="mt-[4.7rem] flex md:mt-0">
            <!-- BEGIN: Dekstop Menu -->
            @include('_partials._user._menu-dekstop')
            <!-- END: Dekstop Menu -->

            <!-- BEGIN: Content -->
            <div
                class="md:max-w-auto min-h-screen min-w-0 max-w-full flex-1 rounded-[30px] bg-slate-100 px-4 pb-10 before:block before:h-px before:w-full before:content-[''] dark:bg-darkmode-700 md:px-[22px]">

                <!-- BEGIN: Top Bar -->
                <div class="relative z-[51] flex h-[67px] items-center border-b border-slate-200">

                    <!-- BEGIN: Breadcrumb -->
                    @include('_partials._user._breadcrumb')
                    <!-- END: Breadcrumb -->

                    <!-- BEGIN: Search -->
                    @include('_partials._user._search')
                    <!-- END: Search  -->

                    <!-- BEGIN: Notifications -->
                    @include('_partials._user._notification')
                    <!-- END: Notifications  -->

                    <!-- BEGIN: Profile Menu -->
                    @include('_partials._user._profile')
                    <!-- END: Profile Menu -->
                </div>
                <!-- END: Top Bar -->

                <!-- BEGIN: MAIN CONTENT --------------------------------------------------------->
                @yield('user_content')
                <!-- END: MAIN CONTENT ----------------------------------------------------------->
            </div>
            <!-- END: Content -->
        </div>
    </div>

    @include('_partials._user._script')
</body>


</html>
