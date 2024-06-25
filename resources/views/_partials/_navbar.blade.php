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
                <li class="nav-item dropdown">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        Beranda
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link {{ request()->routeIs('news-all') ? 'active' : '' }} dropdown-toggle"
                        href="{{ route('news-all') }} dropdown-toggle" href="{{ route('news-all') }}"
                        id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Berita
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <li>
                            <a class="dropdown-item" href="{{ route('news-all') }}">
                                <b> Semua Berita </b>
                            </a>
                        </li>
                        <hr style="margin: 0;"/>
                        <li>
                            <a class="dropdown-item" href="#" style="background: #9aabff17; pointer-events: none; opacity: 0.5; font-size:10px;">
                                Kategori
                            </a>
                        </li>
                        @php
                            $categories = App\Models\Category::where('parent_id', null)->get();
                        @endphp
                        @foreach ($categories as $menu)
                            @php
                                $check_sc = App\Models\Category::where('parent_id', $menu->id)->count();
                                $sub_categories = App\Models\Category::where('parent_id', $menu->id)->get();
                            @endphp

                            <li>
                                <a class="dropdown-item" href="{{ route('home-category', $menu->slug) }}">
                                    {{ $menu->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('statistic-all') ? 'active' : '' }}"
                        href="{{ route('statistic-all') }}">
                        Statistik
                        <small class="hot alert-success text-success">new</small>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
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
                    <a href="https://whatsapp.com/channel/0029VaLHTTL77qVXN6sIne0a"
                        class="btn btn-success text-white rounded-pill brd-gray hover-blue4 sm-butn fw-bold"
                        target="_blank">
                        <span>Join Whatsapp Kami<i class="bi bi-arrow-right ms-1"></i> </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
