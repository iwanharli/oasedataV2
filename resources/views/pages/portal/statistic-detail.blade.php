@extends('layouts.portal')

@section('title')
    {{ $post->post_title }}
@endsection

@section('portal_content')
    @php
        $app = App\Models\App::where('id', '1')->first();
    @endphp


    <main class="blog-page style-5">
        {{-- BREADCRUMB --}}
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
                    {{ $post->post_title }}
                </span>
            </div>
        </div>

        <!-- ====== start statistic ====== -->
        <section class="all-news section-padding pt-20 blog bg-transparent style-3">
            <div class="container">

                {{-- HEADER  --}}
                <div class="blog-details-slider mb-30">
                    <div class="section-head text-center mb-60 style-5">
                        <h2 class="mb-20 color-000"> {{ $post->post_title }} </h2>
                        <small class="d-block date text">
                            <a href="{{ route('home-category', $post->category->slug) }}" class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5 fw-bold">
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
                    {{-- ISI STATISTIC  --}}
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
                            <div>
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-chart-tab" data-toggle="pill"
                                            data-target="#pills-chart" type="button" role="tab"
                                            aria-controls="pills-chart" aria-selected="true">Chart</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-table-tab" data-toggle="pill"
                                            data-target="#pills-table" type="button" role="tab"
                                            aria-controls="pills-table" aria-selected="false">Table</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-chart" role="tabpanel"
                                        aria-labelledby="pills-chart-tab">
                                        <div id="chart" style="height: 300px">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-table" role="tabpanel"
                                        aria-labelledby="pills-table-tab">
                                        <div>
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>

                                                        <th scope="col">DATA</th>
                                                        <th scope="col">VALUE</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($apex_data['categories'] as $key => $value)
                                                        <tr>
                                                            <th scope="row">{{ $key + 1 }}</th>
                                                            <td>{{ $value }}</td>
                                                            <td>{{ $apex_data['data'][$key] }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            {!! $post->post_content !!}

                            {{-- @if ($post->tag->count() > 0)
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
                            @endif --}}
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
                                    Statistik Terbaru
                                </h6>

                                @php
                                    $related = 1;
                                @endphp
                                @foreach ($latest_statistics as $item)
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
        <!-- ====== end Statistic ====== -->


        <!-- ====== start Related Statistic ====== -->
        {{-- <section class="popular-posts related Posts section-padding pb-100 bg-gray5">
            <div class="container">
                <h5 class="fw-bold text-uppercase mb-50">Statistik Terkait</h5>
                <div class="related-postes-slider position-relative">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($related_statistics as $item)
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
        </section> --}}
        <!-- ====== end Popular Statistic ====== -->

    </main>
    <!--End-Contents-->


    {{--  --}}

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script>
        var options = {
            chart: {
                type: "{{ $post->chart_type ?? 'bar' }}"
            },
            series: [{
                name: "{{ $apex_data['name'] }}",
                data: {!! json_encode($apex_data['data']) !!},
            }],
            xaxis: {
                categories: {!! json_encode($apex_data['categories']) !!},
            }
        }

        var chart = new ApexCharts(document.querySelector("#chart"), options);

        chart.render();
    </script>
@endsection

@push('addon-style')
    <style>
        ul.breadcrumb {
            padding: 10px 16px;
            list-style: none;
            background-color: #eee;
        }

        ul.breadcrumb li {
            display: inline;
            font-size: 14px;
        }

        ul.breadcrumb li+li:before {
            padding: 8px;
            color: black;
            content: "/\00a0";
        }

        ul.breadcrumb li a {
            color: #0275d8;
            text-decoration: none;
        }

        ul.breadcrumb li a:hover {
            color: #01447e;
            text-decoration: underline;
        }

        .nav-pills li button {
            border: 0px !important;
            margin: 5px;
            cursor: pointer;
        }
    </style>

    <script type="text/javascript"
        src="https://platform-api.sharethis.com/js/sharethis.js#property=61acbda059afaf001ae4aa06&product=inline-share-buttons"
        async="async"></script>
@endpush

{{--  --}}
