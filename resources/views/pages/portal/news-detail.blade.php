@extends('layouts.portal')

@section('portal_content')
    @php
        $app = App\Models\App::where('id', '1')->first();
    @endphp


    <main class="blog-page style-5">
        {{-- <div class="entry-meta meta-0 font-small mb-15">
            <ul class="breadcrumb">
                <li><a href="{{ route('home') }}">Beranda</a></li>
                <li><a href="{{ route('home-category', $post->category->slug) }}">{{ $post->category->name; }}</a></li>
                @if ($post->sub_categories != null)
                    <li><a href="{{ route('home-category', $sc->slug) }}">{{ $sc->name }}</a></li>
                @endif
                <li>{{ $post->post_title; }}</li>
            </ul>
        </div> --}}

        <div class="section-head text-center mt-50 mb-10 style-5">
            <div class="page-links color-999">
                <a href="{{ route('home') }}" class="me-2">
                    Home
                </a>
                <span class="me-2">/</span>
                <a href="{{ route('home-category', $post->category->slug) }}" class="me-2">
                    {{ $post->category->name }}
                </a>
                @if ($post->sub_categories != null)
                    <span class="me-2">/</span>
                    <a href="{{ route('home-category', $sc->slug) }}" class="me-2">
                        {{ $sc->name }}
                    </a>
                @endif
                <span class="me-2">/</span>
                <span class="color-000">
                    {{ $post->post_title; }}
                </span>
            </div>
        </div>


        <!-- ====== start all-news ====== -->
        <section class="all-news section-padding pt-20 blog bg-transparent style-3">
            <div class="container">

                {{-- HEADER  --}}
                <div class="blog-details-slider mb-30">
                    <div class="section-head text-center mb-60 style-5">
                        <h2 class="mb-20 color-000"> {{ $post->post_title }} </h2>
                        <small class="d-block date text">
                            <a href="#" class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5 fw-bold">
                                {{ $post->category->name }}
                            </a>
                            <i class="bi bi-clock me-1"></i>
                            <span class="op-8">{{ date('d F Y', strtotime($post->published_at)) }}</span>
                        </small>
                    </div>
                    <div class="content-card">
                        <div class="img">
                            <img src="{{ Storage::url($post->post_image) }}" alt="">
                            <div class="credit mt-15 font-small color-grey" style="margin-left: 10px;">
                                <i class="ti-credit-card mr-5"></i><span>{{ $post->post_image_description }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row gx-4 gx-lg-5">
                    {{-- ISI BERITA  --}}
                    <div class="col-lg-8">
                        <div class="d-flex small align-items-center justify-content-between mb-30 fs-12px">
                            <div class="l_side d-flex align-items-center">
                                <a href="{{ route('author', $post->user->id) }}" class="me-3 me-lg-5">
                                    <span
                                        class="icon-20 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-main p-1 me-2 text-white">
                                        {{ getInitials($post->user->name) }}
                                    </span>
                                    <span class="">
                                        By {{ $post->user->name }}
                                    </span>
                                </a>
                                {{-- <a href="#" class="me-3 me-lg-5">
                                    <i class="bi bi-chat-left-text me-1"></i>
                                    <span>24 Comments</span>
                                </a>
                                <a href="#">
                                    <i class="bi bi-eye me-1"></i>
                                    <span>774k Views</span>
                                </a> --}}
                            </div>
                        </div>

                        <div class="blog-content-info">
                            {!! $post->post_content !!}

                            @if ($post->tag->count() > 0)
                                <div class="side-tags mt-50"
                                    style="background: rgba(0, 0, 0, 0.096); padding: 10px; border-radius: 5px;">
                                    <h6 class="title mb-10 text-uppercase fw-normal">
                                        Tags
                                    </h6>
                                    <div class="content">
                                        @foreach ($post->tag as $item)
                                            <a href="{{ route('home-tag', $item->slug) }}"
                                                rel="tag">{{ $item->name }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>

                        <div class="blog-comments mt-70">
                            <div class="comment-card card p-5 radius-5 border-0 mt-50">
                                <div class="d-flex">
                                    <div class="icon-60 rounded-circle img-cover overflow-hidden me-3 flex-shrink-0">
                                        @if ($post->user->profile != null)
                                            <a href="#">
                                                <img src="{{ Storage::url($post->user->profile) }}" alt=""
                                                    class="avatar">
                                            </a>
                                        @else
                                            <a href="#">
                                                <img src="https://ui-avatars.com/api/?name={{ $post->user->name }}"
                                                    alt="" class="avatar">
                                            </a>
                                        @endif
                                    </div>
                                    <div class="inf">
                                        <a href="{{ route('author', $post->user->id) }}" rel="author">
                                            <h6 class="fw-bold">{{ $post->user->name }}</h6>
                                        </a>
                                        <small class="color-999">
                                            - {{ $post->user->roles }}
                                        </small>
                                        <div class="text color-000 fs-12px mt-10">
                                            Penulis di {{ $app->name }} Sejak
                                            {{ date('d F Y', strtotime($post->user->created_at)) }}
                                        </div>
                                        <div class="mt-10">
                                            <button type="button" class="btn btn-outline-primary btn-sm"
                                                onclick="location.href='{{ route('author', $post->user->id) }}'">
                                                Lihat Semua Post
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    {{-- SIDEBAR  --}}
                    <div class="col-lg-4">
                        <div class="side-blog style-5 ps-lg-5 mt-5 mt-lg-0">

                            {{-- Berita Terbaru --}}
                            <div class="side-recent-post mb-50">
                                <h6 class="title mb-20 text-uppercase fw-normal">
                                    Berita Terbaru
                                </h6>

                                @php
                                    $related = 1;
                                @endphp
                                @foreach ($latest_news as $item)
                                    <a href="{{ route('news-detail', $item->slug) }}"
                                        class="post-card pb-3 mb-3 border-bottom brd-gray">
                                        <div class="img me-3">
                                            <img src="{{ Storage::url($item->post_image) }}" alt="">
                                        </div>
                                        <div class="inf">
                                            <h6> {{ $item->post_title }} </h6>
                                            <p> {{ $item->post_teaser }} </p>
                                        </div>
                                    </a>
                                @endforeach
                            </div>

                            {{-- TAG  --}}
                            <div class="side-tags">
                                <h6 class="title mb-20 text-uppercase fw-normal">
                                    Tags Popular
                                </h6>

                                <div class="content">
                                    @foreach ($tags as $item)
                                        <a href="{{ route('home-tag', $item->slug) }}">{{ $item->name }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end all-news ====== -->


        <!-- ====== start Related News ====== -->
        <section class="popular-posts related Posts section-padding pb-100 bg-gray5">
            <div class="container">
                <h5 class="fw-bold text-uppercase mb-50">Berita Terkait</h5>
                <div class="related-postes-slider position-relative">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($related_news as $item)
                                <div class="swiper-slide">
                                    <div class="card border-0 bg-transparent rounded-0 p-0  d-block">
                                        <a href="{{ route('news-detail', $item->slug) }}"
                                            class="img radius-7 overflow-hidden img-cover">
                                            <img src="{{ Storage::url($item->post_image) }}" class="card-img-top"
                                                alt="...">
                                        </a>
                                        <div class="card-body px-0">
                                            <small class="d-block date mt-10 fs-10px fw-bold">
                                                @php
                                                    $sc = App\Models\Category::where(
                                                        'id',
                                                        $item->sub_categories,
                                                    )->first();
                                                @endphp

                                                @if ($item->sub_categories != null)
                                                    <a href="{{ route('home-category', $sc->slug) }}">
                                                        <span
                                                            class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5">
                                                            {{ $sc->name }}
                                                        </span>
                                                    </a>
                                                @else
                                                    <a href="{{ route('home-category', $item->category->slug) }}">
                                                        <span
                                                            class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5">
                                                            {{ $item->category->name }}
                                                        </span>
                                                    </a>
                                                @endif
                                                <i class="bi bi-clock me-1"></i>
                                                <span class="op-8">
                                                    {{ date('d F Y', strtotime($item->published_at)) }}
                                                </span>
                                            </small>
                                            <h5 class="fw-bold mt-10 title">
                                                <a href="{{ route('news-detail', $item->slug) }}">
                                                    {{ $item->post_title }}
                                                </a>
                                            </h5>
                                            <p class="small mt-2 op-8">
                                                {{ $item->post_teaser }}
                                            </p>
                                            <div
                                                class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                                <div class="l_side d-flex align-items-center">
                                                    <span
                                                        class="icon-20 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-main p-1 me-2 text-white">
                                                        {{ getInitials($post->user->name) }}
                                                    </span>
                                                    <span class="">
                                                        By {{ $post->user->name }}
                                                    </span>
                                                </div>
                                                {{-- <div class="r-side mt-1">
                                                    <i class="bi bi-chat-left-text me-1"></i>
                                                    <a href="#">24</a>
                                                    <i class="bi bi-eye ms-4 me-1"></i>
                                                    <a href="#">774k</a>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <!-- ====== end Popular News ====== -->

    </main>
    <!--End-Contents-->
@endsection
