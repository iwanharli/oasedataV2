<!--
    Template Name: Midone - Admin Dashboard Template
    Author: Left4code
    Website: http://www.left4code.com/
    Contact: muhammadrizki@left4code.com
    Purchase: https://themeforest.net/user/left4code/portfolio
    Renew Support: https://themeforest.net/user/left4code/portfolio
    -->

<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="{{ $app->description }}">
<meta name="keywords" content="oasedata, news, analytics, berita, analisa, politik, analitik, berita terbaru">
<meta name="author" content="ARBOC">

<title>@yield('title') - {{ $app->name }}</title>
<link rel="icon" type="image/x-icon" href="{{ Storage::url($app->favicon) }}" />

@stack('prepend-style')

<!-- BEGIN: CSS Assets-->
<link rel="stylesheet" href="{{ asset('user/css/vendors/tippy.css') }}">
<link rel="stylesheet" href="{{ asset('user/css/vendors/litepicker.css') }}">
<link rel="stylesheet" href="{{ asset('user/css/vendors/tiny-slider.css') }}">
<link rel="stylesheet" href="{{ asset('user/css/themes/rubick/side-nav.css') }}">
<link rel="stylesheet" href="{{ asset('user/css/vendors/leaflet.css') }}">
<link rel="stylesheet" href="{{ asset('user/css/vendors/simplebar.css') }}">
<link rel="stylesheet" href="{{ asset('user/css/components/mobile-menu.css') }}">
<link rel="stylesheet" href="{{ asset('user/css/app.css') }}">
<!-- END: CSS Assets-->

@stack('addon-style')

<!-- TINYMCE -->
<script src="https://cdn.tiny.cloud/1/2mnuvdumk629n5613zlidutt34hfejr3ebqvxqiw7jgtq55z/tinymce/7/tinymce.min.js"
    referrerpolicy="origin"></script>
