<!-- ====== start top navbar ====== -->
<div class="top-navbar style-4">
    <div class="container">
        {{-- <div class="content text-white">
            <span class="btn sm-butn bg-white py-0 px-2 me-2 fs-10px">
                <small class="fs-10px">Special</small>
            </span>
            <img src="{{ asset('portal/img/icons/nav_icon/imoj_heart.png') }}" alt="" class="icon-15">
            <span class="fs-10px op-6">Get </span>
            <small class="op-10 fs-10px">20% Discount</small>
            <span class="fs-10px op-6">Get for New Account</span>
            <a href="page-contact-5.html" class="fs-10px text-decoration-underline ms-2">Register Now</a>
        </div> --}}
    </div>
</div>
<!-- ====== end top navbar ====== -->

<nav class="navbar navbar-expand-lg navbar-light style-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            {{-- <img src="{{ asset('portal/img/logo_lgr.png') }}" alt=""> --}}
            <img src="{{ asset('portal/img/oasedata.png') }}" alt="" style="width: 70% important;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0 text-uppercase">
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Homes
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <li><a class="dropdown-item" href="index.html"> Landing Preview </a></li>
                        <li><a class="dropdown-item" href="home-it-solutions2.html"> Creative It Solutions </a></li>
                        <li><a class="dropdown-item" href="home-data-analysis.html"> Data Analysis </a></li>
                        <li><a class="dropdown-item" href="home-app-landing.html"> App Landing </a></li>
                        <li><a class="dropdown-item" href="home-saas-technology.html"> Saas Technology </a></li>
                        <li><a class="dropdown-item" href="home-marketing-startup.html"> Marketing Startup </a></li>
                        <li><a class="dropdown-item" href="home-it-solutions.html"> It Solution </a></li>
                        <li><a class="dropdown-item" href="home-software-company.html"> Software Company </a></li>
                        <li><a class="dropdown-item" href="home-digital-agency.html"> Digital Agency </a></li>
                        <li><a class="dropdown-item" href="home-shop-modern.html"> Modern Shop </a></li>
                    </ul>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        Beranda
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('news-all') ? 'active' : '' }}" href="{{ route('news-all') }}">
                        Berita
                        <small class="hot alert-danger text-danger">hot</small>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('statistic-all') ? 'active' : '' }}"
                        href="{{ route('statistic-all') }}">
                        Statistik
                        <small class="hot alert-success text-success">new</small>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page-contact-app.html">
                        <img src="{{ asset('portal/img/icons/24hour.png') }}" alt="" class="icon-15 me-1">
                        Kontak
                    </a>
                </li>
            </ul>
            <div class="nav-side">
                <div class="d-flex align-items-center">
                    {{-- <a href="#" class="search-icon me-4">
                        <i class="bi bi-person"></i>
                    </a> --}}
                    <a href="#"
                        class="btn btn-primary text-white rounded-pill brd-gray hover-blue4 sm-butn fw-bold">
                        <span>Join Telegram Kami<i class="bi bi-arrow-right ms-1"></i> </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
