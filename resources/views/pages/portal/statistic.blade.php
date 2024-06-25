@extends('layouts.portal')

@section('portal_content')
    <main>
        <section class="blog style-7 section-padding">
            <div class="container" style="width: 100% !important;">

                {{-- HEADER  --}}
                <div class="section-head text-center style-4 mb-20">
                    <div class="top-title mb-10">
                        <img src="{{ asset('portal/img/line_l.png') }}" alt="">
                        <h5> infografis </h5>
                        <img src="{{ asset('portal/img/line_r.png') }}" alt="">
                    </div>
                    <h2>
                        Statistik <span> Insights </span>
                    </h2>
                </div>

                {{-- CONTENT  --}}
                <div class="content">
                    <div class="row">

                        @foreach ($statistics as $item)
                            <div class="col-lg-4"
                                style="background: rgba(255, 255, 255, 0); padding: 30px 15px 30px 15px; border-radius: 10px;">
                                <div class="blog-card style-7 mt-0 mt-lg-0">
                                    <div class="img img-cover">
                                        <a href="{{ route('statistic-detail', $item->slug) }}">
                                            <img src="{{ Storage::url($item->post_image) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="info pt-10">
                                        <div class="date-tags mb-10">
                                            <div class="tags">
                                                <a href="{{ route('statistic-detail', $item->slug) }}">
                                                    {{ $item->category->name }}
                                                </a>
                                            </div>
                                            <span class="date" style="font-size: 10px;">
                                                {{ date('d F Y', strtotime($item->published_at)) }}
                                            </span>
                                            <span class="color-999"> | </span>
                                            <a href="{{ route('author', $item->user->id) }}" class="author color-999">
                                                By <span class="color-000 fw-bold"> {{ splitName($item->user->name) }}
                                                </span>
                                            </a>
                                        </div>

                                        <a href="{{ route('statistic-detail', $item->slug) }}"
                                            style="font-weight: bolder; font-size: 17px;">
                                            {{ $item->post_title }}
                                        </a>

                                        <a href="{{ route('statistic-detail', $item->slug) }}" style="margin-top: 5px;">
                                            {{ $item->post_teaser }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <!--Start pagination -->
                        <div class="pagination style-5 color-5 justify-content-center mt-30 mb-60">
                            @if ($statistics->hasPages())
                                {{-- Previous Page Link --}}
                                @if (!$statistics->onFirstPage())
                                    <a href="{{ $statistics->previousPageUrl() }}">
                                        <span class="text"><i class="fas fa-chevron-left"></i> prev</span>
                                    </a>
                                @endif

                                <?php
                                $start = $statistics->currentPage() - 1;
                                $end = $statistics->currentPage() + 1;
                                if ($start < 1) {
                                    $start = 1;
                                    $end += 1;
                                }
                                if ($end >= $statistics->lastPage()) {
                                    $end = $statistics->lastPage();
                                }
                                ?>

                                @if ($start > 1)
                                    <a href="{{ $statistics->url(1) }}">
                                        <span>1</span>
                                    </a>
                                    @if ($statistics->currentPage() > 3)
                                        <a href="#">
                                            <span>...</span>
                                        </a>
                                    @endif
                                @endif

                                @for ($i = $start; $i <= $end; $i++)
                                    <a href="{{ $statistics->url($i) }}"
                                        class="{{ $statistics->currentPage() == $i ? 'active' : '' }}">
                                        <span>{{ $i }}</span>
                                    </a>
                                @endfor

                                @if ($end < $statistics->lastPage())
                                    @if ($statistics->currentPage() + 2 < $statistics->lastPage())
                                        <a href="#">
                                            <span>...</span>
                                        </a>
                                    @endif
                                    <a href="{{ $statistics->url($statistics->lastPage()) }}">
                                        <span>{{ $statistics->lastPage() }}</span>
                                    </a>
                                @endif

                                {{-- Next Page Link --}}
                                @if ($statistics->hasMorePages())
                                    <a href="{{ $statistics->nextPageUrl() }}">
                                        <span class="text">next <i class="fas fa-chevron-right"></i></span>
                                    </a>
                                @endif
                            @endif
                        </div>
                        <!-- End pagination  -->
                    </div>
                </div>
            </div>
        </section>
    </main>

    {{-- <ul>
        @foreach ($statistics as $stat)
            <li>{{ $stat }}</li>
        @endforeach
    </ul>

    <br>
    <br>
    <br>
    <br> --}}
@endsection
