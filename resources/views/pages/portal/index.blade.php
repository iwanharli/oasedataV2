@extends('layouts.portal')

@section('portal_content')
    <main>
        <!-- ====== start breaking news ====== -->
        <section class="blog section-padding bg-gray2 style-1">
            <div class="container">
                <div class="section-head mb-40 d-flex justify-content-between align-items-center style-6">
                    <h2 class="mb-20">
                        <span> <small>Breaking</small> </span>
                        news
                    </h2>
                </div>
                <div class="content">
                    <div class="blog_slider">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                @php
                                    $headlineNo = 1;
                                @endphp
                                @foreach ($headlines as $headline)
                                    <div class="swiper-slide">
                                        <div class="blog_box">
                                            <div class="tags">
                                                <a href="#">
                                                    {{-- {{ $headline->category->name }} --}}
                                                </a>
                                            </div>
                                            <div class="img">
                                                <img src="{{ Storage::url($headline->post->post_image) }}" alt="">
                                            </div>
                                            <div class="info">
                                                <h6>
                                                    <a href="{{ route('news-detail', $headline->post->slug) }}">
                                                        {{ $headline->post->post_title }}
                                                    </a>
                                                </h6>
                                                <div class="auther">
                                                    <span>
                                                        <img class="auther-img"
                                                            src="{{ asset('portal/img/testimonials/user1.jpg') }}"
                                                            alt="">
                                                        <small><a href="#">By
                                                                {{ splitName(@$headline->post->user->name) }}</a></small>
                                                    </span>
                                                    <span>
                                                        <i class="bi bi-calendar2"></i>
                                                        <small>{{ date('d F Y', strtotime($headline->post->published_at)) }}</small>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- ====== slider navigation ====== -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end breaking news ====== -->

        <!-- ====== start news ====== -->
        <section class="blog style-8" style="background: #dedbeb;">
            <div class="container">
                <div class="content section-padding wow fadeInUp">
                    <div class="section-head mb-40 d-flex justify-content-between align-items-center style-6">
                        <h2 class="mb-20">
                            <span> <small>Berita</small> </span>
                            terbaru
                        </h2>
                        <p class="color-666">Dapatkan artikel terbaru dari pers kami, diskusikan, dan bagikan.</p>
                        <a href="{{ route('news-all') }}"
                            class="btn btn-icon-circle rounded-pill bg-blue7 fw-bold text-white">
                            <small> Lihat semua berita <i class="fas fa-long-arrow-alt-right"></i> </small>
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="row">

                            {{-- {{ var_dump($news_home1) }} --}}

                            @foreach ($news_home1 as $item)
                                <div class="col-lg-6">
                                    <div class="main-post wow fadeInUp">
                                        <div class="img img-cover">
                                            <img src="{{ Storage::url($item->post_image) }}" alt="">
                                            <div class="tags">
                                                <a href="{{ route('home-category', $item->category->slug) }}">
                                                    {{ $item->category->name }}
                                                </a>
                                            </div>
                                        </div>
                                        <div class="info pt-30">
                                            <div class="date-author">
                                                <span class="date">
                                                    {{ date('d F Y', strtotime($item->published_at)) }}
                                                </span>
                                                <span class="color-999 mx-3"> | </span>
                                                <span class="author color-999">
                                                    By <span class="color-000 fw-bold"> {{ splitName($item->user->name) }}
                                                    </span>
                                                </span>
                                            </div>
                                            <h4 class="title">
                                                <a href="{{ route('news-detail', $item->slug) }}"> {{ $item->post_title }}
                                                </a>
                                            </h4>
                                            <span>
                                                {{ $item->post_teaser }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="col-lg-6" style="margin-bottom: 20px !important;">
                                <div class="side-posts">
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($news_home2 as $item)
                                        <div class="item wow fadeInUp" data-wow-delay="0.2s">

                                            <a href="{{ route('news-detail', $item->slug) }}">
                                                <div class="img img-cover">
                                                    <img src="{{ Storage::url($item->post_image) }}" alt="">
                                                </div>
                                            </a>
                                            <div class="info">
                                                <div class="date-author">
                                                    <span class="category"
                                                        style="background: #0086fb; padding: 3px 5px 3px 5px; border-radius: 10px; color: white;">
                                                        @php
                                                            $sc = App\Models\Category::where(
                                                                'id',
                                                                $item->sub_categories,
                                                            )->first();
                                                        @endphp
                                                        @if ($item->sub_categories != null)
                                                            <a href="{{ route('home-category', $sc->slug) }}">
                                                                <span
                                                                    class="post-cat background{{ $no++ }} color-white">
                                                                    {{ $sc->name }}
                                                                </span>
                                                            </a>
                                                        @else
                                                            <a href="{{ route('home-category', $item->category->slug) }}">
                                                                <span
                                                                    class="post-cat background{{ $no++ }} color-white">
                                                                    {{ $item->category->name }}
                                                                </span>
                                                            </a>
                                                        @endif
                                                    </span>

                                                    <span class="color-999 mx-2"> | </span>

                                                    <span class="date">
                                                        {{ date('d F Y', strtotime($item->published_at)) }}
                                                    </span>

                                                    <span class="color-999 mx-2"> | </span>

                                                    <span class="author color-999">
                                                        By <span class="color-000 fw-bold">
                                                            {{ splitName($item->user->name) }}
                                                        </span>
                                                    </span>
                                                </div>
                                                <h5 class="title" style="font-weight: bolder;">
                                                    <a href="{{ route('news-detail', $item->slug) }}">
                                                        {{ $item->post_title }}
                                                    </a>
                                                </h5>
                                                <span>
                                                    {{ $item->post_teaser }}
                                                </span>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end news ====== -->

        <!-- ====== start statistics ====== -->
        <section class="portfolio section-padding style-1" data-scroll-index="4">
            <div class="container">
                <div class="section-head mb-40 d-flex justify-content-between align-items-center style-6">
                    <h2 class="mb-20">
                        <span> <small>Statistik</small> </span>
                        terbaru
                    </h2>
                    <a href="{{ route('statistic-all') }}" class="btn btn-icon-circle rounded-pill bg-blue7 fw-bold text-white">
                        <small> Lihat semua statistik <i class="fas fa-long-arrow-alt-right"></i> </small>
                    </a>
                </div>
                <div class="content wow fadeIn slow">
                    <div class="portfolio-slider">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                @isset($statistic_home1)
                                    @foreach ($statistic_home1 as $item)
                                        <div class="swiper-slide">
                                            <div class="portfolio-card">
                                                <div class="img">
                                                    <img src="{{ Storage::url($item->post_image) }}" alt="">
                                                </div>
                                                <div class="info">
                                                    <h5>
                                                        <a href="{{ route('statistic-detail', $item->slug) }}">
                                                            {{ $item->post_title }}
                                                        </a>
                                                    </h5>
                                                    <small class="d-block color-main text-uppercase">
                                                        <a href="{{ route('statistic-detail', $item->slug) }}">
                                                            @php
                                                                $sc = App\Models\Category::where(
                                                                    'id',
                                                                    $item->sub_categories,
                                                                )->first();
                                                            @endphp
                                                            @if ($item->sub_categories != null)
                                                                <a href="{{ route('home-category', $sc->slug) }}">
                                                                    <span
                                                                        class="post-cat background{{ $no++ }} color-white">
                                                                        {{ $sc->name }}
                                                                    </span>
                                                                </a>
                                                            @else
                                                                <a href="{{ route('home-category', $item->category->slug) }}">
                                                                    <span
                                                                        class="post-cat background{{ $no++ }} color-white">
                                                                        {{ $item->category->name }}
                                                                    </span>
                                                                </a>
                                                            @endif
                                                        </a>
                                                    </small>
                                                    <div class="text">
                                                        {{ $item->post_teaser }}
                                                    </div>
                                                    <div class="tags">
                                                        <a href="#">Consultation</a>
                                                        <a href="#">Management</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endisset
                            </div>
                        </div>

                        <br />

                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                @isset($statistic_home2)
                                    @foreach ($statistic_home2 as $item)
                                        <div class="swiper-slide">
                                            <div class="portfolio-card">
                                                <div class="img">
                                                    <img src="{{ Storage::url($item->post_image) }}" alt="">
                                                </div>
                                                <div class="info">
                                                    <h5>
                                                        <a href="{{ route('statistic-detail', $item->slug) }}">
                                                            {{ $item->post_title }}
                                                        </a>
                                                    </h5>
                                                    <small class="d-block color-main text-uppercase">
                                                        <a href="{{ route('statistic-detail', $item->slug) }}">
                                                            @php
                                                                $sc = App\Models\Category::where(
                                                                    'id',
                                                                    $item->sub_categories,
                                                                )->first();
                                                            @endphp
                                                            @if ($item->sub_categories != null)
                                                                <a href="{{ route('home-category', $sc->slug) }}">
                                                                    <span
                                                                        class="post-cat background{{ $no++ }} color-white">
                                                                        {{ $sc->name }}
                                                                    </span>
                                                                </a>
                                                            @else
                                                                <a href="{{ route('home-category', $item->category->slug) }}">
                                                                    <span
                                                                        class="post-cat background{{ $no++ }} color-white">
                                                                        {{ $item->category->name }}
                                                                    </span>
                                                                </a>
                                                            @endif
                                                        </a>
                                                    </small>
                                                    <div class="text">
                                                        {{ $item->post_teaser }}
                                                    </div>
                                                    <div class="tags">
                                                        <a href="#">Consultation</a>
                                                        <a href="#">Management</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endisset
                            </div>
                        </div>

                        <!-- ====== slider pagination ====== -->
                        <div class="swiper-pagination"></div>

                        <!-- ====== slider navigation ====== -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('portal/img/projects/prog/shap_r.png') }}" alt="" class="shap_r">
            <img src="{{ asset('portal/img/projects/prog/shap_l.png') }}" alt="" class="shap_l">
        </section>
        <!-- ====== end statistics ====== -->

        <!-- ====== start community ====== -->
        <section class="community section-padding pt-0 style-4">
            <div class="container">
                <div class="section-head text-center style-4">
                    <small class="title_small">OaseData Community</small>
                    <h2 class="mb-30"> Join Into <span> Our Hub </span> </h2>
                </div>
                <div class="content">
                    <a href="https://www.instagram.com/oasedata/" class="commun-card" target="_blank">
                        <div class="icon">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <div class="inf">
                            <h5>Instagram</h5>
                            <p>Open Source & Commnit Code</p>
                        </div>
                    </a>
                    <a href="https://www.tiktok.com/@oasedata" class="commun-card" target="_blank">
                        <div class="icon">
                            <i class="fab fa-tiktok"></i>
                        </div>
                        <div class="inf">
                            <h5>Tiktok</h5>
                            <p>Latest News & Update</p>
                        </div>
                    </a>
                    <a href="https://whatsapp.com/channel/0029VaLHTTL77qVXN6sIne0a" class="commun-card" target="_blank">
                        <div class="icon">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <div class="inf">
                            <h5>Whatsapp</h5>
                            <p>Chanel for Community</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- ====== end community ====== -->

    </main>
@endsection
