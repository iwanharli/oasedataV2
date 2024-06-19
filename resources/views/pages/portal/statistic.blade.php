@extends('layouts.portal')

@section('portal_content')
    <main>
        <section class="blog style-7 section-padding">
            <div class="container">

                {{-- HEADER  --}}
                <div class="section-head text-center style-4 mb-80">
                    <div class="top-title mb-10">
                        <img src="{{ asset('portal/img/line_l.png') }}" alt="">
                        <h5> infografis </h5>
                        <img src="{{ asset('portal/img/line_r.png') }}" alt="">
                    </div>
                    <h2 class="">
                        Statistik <span> Insights </span>
                    </h2>
                </div>

                {{-- CONTENT  --}}
                <div class="content">
                    <div class="row">

                        @foreach ($statistics as $item)
                            <div class="col-lg-4"
                                style="background: white; padding: 30px 15px 30px 15px; border-radius: 10px;">
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

                                        <a href="{{ route('statistic-detail', $item->slug) }}" style="font-weight: bolder; font-size: 17px;">
                                            {{ $item->post_title }}
                                        </a>

                                        <a href="{{ route('statistic-detail', $item->slug) }}" style="margin-top: 5px;">
                                            {{ $item->post_teaser }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <img src="{{ asset('portal/img/shap_color_7.png') }}" alt="" class="shap_color">
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
