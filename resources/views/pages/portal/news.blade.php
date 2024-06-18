@extends('layouts.portal')

@section('portal_content')
    <!--Contents-->
    <main class="blog-page style-5">

        <!-- ====== start news-slider ====== -->
        <section class="blog-slider pt-50 pb-10 style-1">
            <div class="container">
                <div class="section-head text-center mb-40 style-5">
                    <h2 class="mb-20"> Berita <span> Kami </span> </h2>
                    {{-- <div class="text color-666">Get the latest articles from our journal, writing, discuss and share</div> --}}
                </div>
                <div class="blog-details-slider">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @php
                                $headlineNo = 1;
                            @endphp

                            @foreach ($headlines as $headline)
                                <div class="swiper-slide">
                                    <div class="content-card">
                                        <div class="img overlay">
                                            <img src="{{ Storage::url($headline->post->post_image) }}" alt="">
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="cont">
                                                        <small class="date small mb-20">
                                                            @php
                                                                $sc = App\Models\Category::where(
                                                                    'id',
                                                                    $headline->post->sub_categories,
                                                                )->first();
                                                            @endphp
                                                            @if ($headline->post->sub_categories != null)
                                                                <a href="#">
                                                                    <span
                                                                        class="post-cat background{{ $headlineNo++ }} color-white">
                                                                        {{ $sc->name }}
                                                                    </span>
                                                                </a>
                                                            @else
                                                                <a href="#">
                                                                    <span
                                                                        class="post-cat background{{ $headlineNo++ }} color-white">
                                                                        {{ $headline->post->category->name }}
                                                                    </span>
                                                                </a>
                                                            @endif
                                                            &nbsp;
                                                            <i class="far fa-clock me-1"></i> Posted on
                                                            {{ date('d F Y', strtotime($headline->post->published_at)) }}
                                                        </small>
                                                        <h2 class="title">
                                                            <a
                                                                href="{{ route('news-detail', $headline->post->slug) }}">{{ $headline->post->post_title }}</a>
                                                        </h2>
                                                        <p class="fs-13px mt-10 text-light text-info">
                                                            {{ $headline->post->post_teaser }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <!-- ====== pagination ====== -->
                    <div class="swiper-pagination"></div>
                    <!-- ====== arrows ====== -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <!-- ====== end news-slider ====== -->


        <!-- ====== start all-news ====== -->
        <section class="all-news section-padding blog bg-transparent style-3">
            <div class="container">
                <div class="row gx-4 gx-lg-5">



                    {{-- BERITA  --}}
                    <div class="col-lg-8">
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($news as $item)
                            <div class="card border-0 bg-transparent rounded-0 border-bottom brd-gray pb-30 mb-30">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="img img-cover">
                                            <a href="{{ route('news-detail', $item->slug) }}">
                                                <img src="{{ Storage::url($item->post_image) }}" class="radius-7"
                                                    alt="...">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="card-body p-0">
                                            <small class="d-block date text">
                                                <span class="category"
                                                    style="background: #2499ff; padding: 3px 5px 3px 5px; border-radius: 10px; color: white;">
                                                    @php
                                                        $sc = App\Models\Category::where(
                                                            'id',
                                                            $item->sub_categories,
                                                        )->first();
                                                    @endphp
                                                    @if ($item->sub_categories != null)
                                                        <a
                                                            href="{{ route('home-category', $sc->slug) }}{{ route('home-category', $sc->slug) }}">
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

                                                <i class="bi bi-clock me-1"></i>
                                                <span class="op-8">
                                                    {{ date('d F Y', strtotime($item->published_at)) }}
                                                </span>
                                            </small>
                                            <a href="{{ route('news-detail', $item->slug) }}" class="card-title mb-10">
                                                {{ $item->post_title }}
                                            </a>
                                            <p class="fs-13px color-666">
                                                {{ $item->post_teaser }}
                                            </p>
                                            <div
                                                class="auther-comments d-flex small align-items-center justify-content-between op-9">
                                                <div class="l_side d-flex align-items-center">
                                                    <span
                                                        class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue5 p-2 me-2 text-white">
                                                        {{ getInitials($item->user->name) }}
                                                    </span>
                                                    <a href="{{ route('author', $item->user->id) }}">
                                                        <small class="text-muted">By</small>
                                                        {{ splitName($item->user->name) }}
                                                    </a>
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
                            </div>
                        @endforeach

                        <!--Start pagination -->
                        <div class="pagination style-5 color-5 justify-content-center mt-60">
                            @if ($news->hasPages())
                                {{-- Previous Page Link --}}
                                @if (!$news->onFirstPage())
                                    <a href="{{ $news->previousPageUrl() }}">
                                        <span class="text"><i class="fas fa-chevron-left"></i> prev</span>
                                    </a>
                                @endif

                                <?php
                                $start = $news->currentPage() - 1;
                                $end = $news->currentPage() + 1;
                                if ($start < 1) {
                                    $start = 1;
                                    $end += 1;
                                }
                                if ($end >= $news->lastPage()) {
                                    $end = $news->lastPage();
                                }
                                ?>

                                @if ($start > 1)
                                    <a href="{{ $news->url(1) }}">
                                        <span>1</span>
                                    </a>
                                    @if ($news->currentPage() > 3)
                                        <a href="#">
                                            <span>...</span>
                                        </a>
                                    @endif
                                @endif

                                @for ($i = $start; $i <= $end; $i++)
                                    <a href="{{ $news->url($i) }}"
                                        class="{{ $news->currentPage() == $i ? 'active' : '' }}">
                                        <span>{{ $i }}</span>
                                    </a>
                                @endfor

                                @if ($end < $news->lastPage())
                                    @if ($news->currentPage() + 2 < $news->lastPage())
                                        <a href="#">
                                            <span>...</span>
                                        </a>
                                    @endif
                                    <a href="{{ $news->url($news->lastPage()) }}">
                                        <span>{{ $news->lastPage() }}</span>
                                    </a>
                                @endif

                                {{-- Next Page Link --}}
                                @if ($news->hasMorePages())
                                    <a href="{{ $news->nextPageUrl() }}">
                                        <span class="text">next <i class="fas fa-chevron-right"></i></span>
                                    </a>
                                @endif
                            @endif
                        </div>
                        <!-- End pagination  -->
                    </div>





                    {{-- SIDEBAR  --}}
                    <div class="col-lg-4">
                        <div class="side-blog style-5 ps-lg-5 mt-5 mt-lg-0">

                            <form action="{{ route('search-article') }}" class="search-form mb-50" method="get" autocomplete="off">
                                <h6 class="title mb-20 text-uppercase fw-normal">
                                    Pencarian Berita
                                </h6>
                                <div class="form-group position-relative">
                                    <input type="text" name="keyword" class="form-control rounded-pill search_field" id="search_field"
                                        placeholder="Type and hit enter">
                                    <button class="search-btn border-0 bg-transparent"> <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>

                            <div class="side-recent-post mb-50">
                                <h6 class="title mb-20 text-uppercase fw-normal">
                                    BERITA LAINNYA
                                </h6>
                                @foreach ($random_news as $item)
                                    <a href="{{ route('news-detail', $item->slug) }}"
                                        class="post-card pb-3 mb-3 border-bottom brd-gray">
                                        <div class="img me-3">
                                            <img src="{{ Storage::url($item->post_image) }}" alt="">
                                        </div>
                                        <div class="inf">
                                            <h6> {{ $item->post_title }} </h6>
                                            {{-- <p> {{ $item->post_teaser }} </p> --}}
                                            <p>{{ date('d F Y', strtotime($item->published_at)) }}</p>
                                        </div>
                                    </a>
                                @endforeach
                            </div>


                            {{-- KATEGORI BERITA  --}}
                            <div class="side-categories mb-50">
                                <h6 class="title mb-20 text-uppercase fw-normal">
                                    KATEGORI
                                </h6>

                                @php
                                    $categories = App\Models\Category::where('parent_id', null)->get();
                                @endphp
                                @foreach ($categories as $menu)
                                    @php
                                        $check_sc = App\Models\Category::where('parent_id', $menu->id)->count();
                                        $sub_categories = App\Models\Category::where('parent_id', $menu->id)->get();
                                    @endphp
                                    <a href="{{ route('home-category', $menu->slug) }}" class="cat-item">
                                        <span> {{ $menu->name }} </span>
                                        {{-- <span> 265 </span>  --}}
                                    </a>
                                    {{-- @if ($check_sc > 0)
                                        <ul class="sub-menu">
                                            @foreach ($sub_categories as $submenu)
                                                <li><a
                                                        href="{{ route('home-category', $submenu->slug) }}">{{ $submenu->name }}</a>
                                                </li>
                                            @endforeach
                                            @if ($menu->name == 'Multimedia')
                                                <li><a href="{{ route('images') }}">Images</a></li>
                                            @endif
                                        </ul>
                                    @endif --}}
                                @endforeach
                            </div>

                            {{-- <div class="side-newsletter mb-50">
                                <h6 class="title mb-10 text-uppercase fw-normal">
                                    newsletter
                                </h6>
                                <div class="text">
                                    Register now to get latest updates on promotions & coupons.
                                </div>
                                <form action="https://iteck-html.themescamp.com/contact.php" class="form-subscribe"
                                    method="post">
                                    <div class="email-input d-flex align-items-center py-3 px-3 bg-white mt-3 radius-5">
                                        <span class="icon me-2 flex-shrink-0">
                                            <i class="far fa-envelope"></i>
                                        </span>
                                        <input type="text" placeholder="Email Address"
                                            class="border-0 bg-transparent fs-13px">
                                    </div>
                                    <button
                                        class="btn bg-blue5 sm-butn text-white hover-darkBlue w-100 mt-3 radius-5 py-3">
                                        <span>Subscribe</span>
                                    </button>
                                </form>
                            </div> --}}

                            {{-- <div class="side-share mb-50">
                                <h6 class="title mb-20 text-uppercase fw-normal">
                                    social
                                </h6>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-goodreads-g"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div> --}}

                            {{-- <div class="side-insta mb-50">
                                <h6 class="title mb-20 text-uppercase fw-normal">
                                    our instagram
                                </h6>
                                <div class="d-flex justify-content-between flex-wrap">
                                    <a href="{{ asset('portal/img/blog/1.jpg') }}" class="insta-img img-cover"
                                        data-fancybox="gallery">
                                        <img src="{{ asset('portal/img/blog/1.jpg') }}" alt="">
                                        <i class="fab fa-instagram icon"></i>
                                    </a>
                                    <a href="{{ asset('portal/img/blog/10.png') }}" class="insta-img img-cover"
                                        data-fancybox="gallery">
                                        <img src="{{ asset('portal/img/blog/10.png') }}" alt="">
                                        <i class="fab fa-instagram icon"></i>
                                    </a>
                                    <a href="{{ asset('portal/img/blog/11.png') }}" class="insta-img img-cover"
                                        data-fancybox="gallery">
                                        <img src="{{ asset('portal/img/blog/11.png') }}" alt="">
                                        <i class="fab fa-instagram icon"></i>
                                    </a>
                                    <a href="{{ asset('portal/img/blog/12.png') }}" class="insta-img img-cover"
                                        data-fancybox="gallery">
                                        <img src="{{ asset('portal/img/blog/12.png') }}" alt="">
                                        <i class="fab fa-instagram icon"></i>
                                    </a>
                                    <a href="{{ asset('portal/img/blog/2.jpg') }}" class="insta-img img-cover"
                                        data-fancybox="gallery">
                                        <img src="{{ asset('portal/img/blog/2.jpg') }}" alt="">
                                        <i class="fab fa-instagram icon"></i>
                                    </a>
                                    <a href="{{ asset('portal/img/blog/3.jpg') }}" class="insta-img img-cover"
                                        data-fancybox="gallery">
                                        <img src="{{ asset('portal/img/blog/3.jpg') }}" alt="">
                                        <i class="fab fa-instagram icon"></i>
                                    </a>
                                </div>
                            </div> --}}


                            {{-- TAG  --}}
                            <div class="side-tags">
                                <h6 class="title mb-20 text-uppercase fw-normal">
                                    Tags
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

        @push('addon-script')
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
            <script>
                var path = "{{ route('autocomplete') }}";

                $('#search_field').typeahead({

                    source: function(query, process) {

                        return $.get(path, {
                            query: query
                        }, function(data) {

                            return process(data);

                        });

                    }

                });
            </script>
        @endpush

    </main>
    <!--End-Contents-->
@endsection
