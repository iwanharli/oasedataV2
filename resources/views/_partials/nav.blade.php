<!-- ====== start loading page ====== -->
<!-- <div id="preloader">
    </div> -->
<!-- ---------- loader ---------- -->
<div id="preloader">
    <div id="loading-wrapper" class="show">
        <div id="loading-text"> <img src="assets/img/logo_oasedata_loading.png" alt=""> </div>
        <div id="loading-content"></div>
    </div>
</div>
<!-- ====== end loading page ====== -->

<!-- ====== start top navbar ====== -->
<div class="top-navbar style-4">
    <div class="container">
        <div class="content text-white">
            <span class="btn sm-butn bg-white py-0 px-2 me-2 fs-10px">
                <small class="fs-10px">Special</small>
            </span>
            <img src="assets/img/icons/nav_icon/imoj_heart.png" alt="" class="icon-15">
            <span class="fs-10px op-6">Dapatkan </span>
            <small class="op-10 fs-10px">20% Diskon - </small>
            <a href="#" class="fs-10px text-decoration-underline ms-2"
                style="text-decoration: none !important; color: white !important;">Daftar Sekarang</a>
        </div>
    </div>
</div>
<!-- ====== end top navbar ====== -->

<!-- ====== start navbar ====== -->
<nav class="navbar navbar-expand-lg navbar-light style-4" id="main-nav" style="padding: 7px 15px !important;">
    <div class="container">
        <a class="navbar-brand"  href="{{ route('home') }}">
            {{-- <img src="assets/img/logo_oasedata_dark2.png" alt=""> --}}
            <img src="assets/img/oasedata.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 3%;">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0 text-uppercase">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('extra.404') }}">
                        Profil
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        Beranda
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('news') ? 'active' : '' }}" href="{{ route('news') }}">
                        Berita
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('statistic') ? 'active' : '' }}"
                        href="{{ route('statistic') }}">
                        Statistik
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                    <a class="nav-link" href="#0" data-scroll-nav="3">
                        Layanan
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}" data-scroll-nav="4">
                        FAQ
                    </a>
                </li>
                {{-- <li class="nav-item komparasi"
                    style="border-radius: 15px 0px 0px 15px; background: linear-gradient(90deg, rgb(155 151 255) 0%, rgba(45,183,255,0) 100%);">
                    <a class="nav-link" href="komparasi.html">
                        Komparasi
                    </a>
                </li> --}}
            </ul>
            <div class="nav-side">
                <a href="#" class="btn rounded-pill brd-gray hover-blue4 sm-butn fw-bold">
                    <small> Login <i class="fal fa-sign-in ms-1"></i></small>
                </a> &nbsp;
                <a href="#" class="btn rounded-pill text-white bg-blue4 sm-butn fw-bold">
                    <small> Trial <i class="fal fa-long-arrow-right ms-1"></i></small>
                </a>
            </div>
        </div>
    </div>
</nav>
<!-- ====== end navbar ====== -->

<div class="sticky-icon" style="z-index: 1000;">
    <a href="https://www.instagram.com/oasedata/" class="Instagram" target="_blank"><i class="fab fa-instagram"></i> Instagram </a>
    <a href="https://www.tiktok.com/@oasedata" class="Tiktok" target="_blank"><i class="fab fa-tiktok"></i> Tiktok </a>
    <a href="https://whatsapp.com/channel/0029VaLHTTL77qVXN6sIne0a" class="Whatsapp" target="_blank"><i class="fab fa-whatsapp"> </i> Whatsapp </a>
    {{-- <a href="#" class="Twitter" target="_blank"><i class="fab fa-twitter"> </i> Twitter </a>
    <a href="#" class="Youtube" target="_blank"><i class="fab fa-youtube"></i> Youtube </a> --}}
</div>
