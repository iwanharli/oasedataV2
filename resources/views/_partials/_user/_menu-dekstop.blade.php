<nav class="side-nav hidden w-[80px] overflow-x-hidden pb-16 pr-5 md:block xl:w-[230px]">
    <a class="flex items-center pt-2 pl-5 intro-x" href="#">
        <img class="w-10" src="{{ Storage::url($app->favicon) }}" alt="{{ $app->description }}"
            style="background: rgba(0, 0, 0, 0.245); border-radius: 20px;">
        <span class="hidden ml-3 text-lg text-white xl:block"> {{ $app->name }} </span>
    </a>
    <div class="my-6 side-nav__divider"></div>
    <ul>
        {{-- DASHBOARD  --}}
        <li>
            <a href="{{ route('admin-dashboard') }}"
                class="side-menu {{ request()->is('admin') || request()->is('admin/dashboard') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon">
                    <i data-lucide="home" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    Dashboard
                </div>
            </a>
        </li>

        {{-- BERITA  --}}
        <li>
            <a href="javascript:;"
                class="side-menu {{ request()->is('admin') || request()->is('admin/news*') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon">
                    <i data-lucide="file-text" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    Berita
                    <div class="side-menu__sub-icon ">
                        <i data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                </div>
            </a>
            <ul class="{{ request()->is('admin') || request()->is('admin/news*') ? 'side-menu__sub-open' : '' }}">
                <li>
                    <a href="{{ route('news.index') }}"
                        class="side-menu {{ request()->is('admin') || request()->is('admin/news') ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon">
                            <i data-lucide="gallery-horizontal-end" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Semua Berita
                        </div>
                    </a>
                </li>

                @if (Auth::user()->roles == 'Administrator' || Auth::user()->roles == 'Penulis')
                    <li>
                        <a href="{{ route('news.create') }}"
                            class="side-menu {{ request()->is('admin/news/create') ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon">
                                <i data-lucide="edit" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="side-menu__title">
                                Tambah Baru
                            </div>
                        </a>
                    </li>
                @endif
            </ul>
        </li>

        {{-- STATISTIK  --}}
        <li>
            <a href="javascript:;"
                class="side-menu {{ request()->is('admin') || request()->is('admin/statistic*') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon">
                    <i data-lucide="bar-chart-4" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    Statistik
                    <div class="side-menu__sub-icon ">
                        <i data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                </div>
            </a>
            <ul class="{{ request()->is('admin') || request()->is('admin/statistic*') ? 'side-menu__sub-open' : '' }}">
                <li>
                    <a href="{{ route('statistic.index') }}"
                        class="side-menu {{ request()->is('admin') || request()->is('admin/statistic') ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon">
                            <i data-lucide="gallery-horizontal-end" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Semua Statistik
                        </div>
                    </a>
                </li>

                @if (Auth::user()->roles == 'Administrator' || Auth::user()->roles == 'Penulis')
                    <li>
                        <a href="{{ route('statistic.create') }}"
                            class="side-menu {{ request()->is('admin') || request()->is('admin/statistic/create') ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon">
                                <i data-lucide="edit" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="side-menu__title">
                                Tambah Baru
                            </div>
                        </a>
                    </li>
                @endif
            </ul>
        </li>

        {{-- HALAMAN  --}}
        @if (Auth::user()->roles == 'Administrator')
            <li>
                <a href="javascript:;" class="side-menu">
                    <div class="side-menu__icon">
                        <i data-lucide="settings-2" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                    <div class="side-menu__title">
                        Halaman
                        <div class="side-menu__sub-icon ">
                            <i data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="#" class="side-menu {{ request()->is('admin/pages/breaking-news') ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon">
                                <i data-lucide="coffee" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="side-menu__title">
                                Breaking News
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="side-menu {{ request()->is('admin/pages/headline') ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon">
                                <i data-lucide="book-up-2" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="side-menu__title">
                                Headline
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon">
                                <i data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="side-menu__title">
                                Detail
                                <div class="side-menu__sub-icon ">
                                    <i data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{ route('redaction.index') }}" class="side-menu {{ request()->is('admin/pages/redaction') ? 'side-menu--active' : '' }}">
                                    <div class="side-menu__icon">
                                        <i data-lucide="sticky-note" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="side-menu__title">
                                        Redaksi
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('guideline.index') }}" class="side-menu {{ request()->is('admin/pages/guideline') ? 'side-menu--active' : '' }}">
                                    <div class="side-menu__icon">
                                        <i data-lucide="sticky-note" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="side-menu__title">
                                        Pedoman
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('disclaimer.index') }}" class="side-menu {{ request()->is('admin/pages/disclaimer') ? 'side-menu--active' : '' }}">
                                    <div class="side-menu__icon">
                                        <i data-lucide="sticky-note" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="side-menu__title">
                                        Disclaimer
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="side-menu {{ request()->is('admin/pages/contact') ? 'side-menu--active' : '' }}">
                                    <div class="side-menu__icon">
                                        <i data-lucide="sticky-note" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="side-menu__title">
                                        Kontak
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        @endif

        <li class="my-6 side-nav__divider"></li>

        {{-- KATEGORI  --}}
        <li>
            <a href="{{ route('category.index') }}" class="side-menu {{ request()->is('admin/category') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon">
                    <i data-lucide="folder-tree" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    Kategori
                </div>
            </a>
        </li>

        {{-- TAG  --}}
        <li>
            <a href="{{ route('tag.index') }}" class="side-menu {{ request()->is('admin/tag') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon">
                    <i data-lucide="tag" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    Tag
                </div>
            </a>
        </li>

        {{-- GALERI  --}}
        <li>
            <a href="#" class="side-menu {{ request()->is('admin/gallery') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon">
                    <i data-lucide="wallpaper" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    File Manager
                </div>
            </a>
        </li>

        <li class="my-6 side-nav__divider"></li>

        {{-- PENGGUNA  --}}
        @if (Auth::user()->roles == 'Administrator')
            <li>
                <a href="javascript:;" class="side-menu {{ request()->is('admin') || request()->is('admin/user*') ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon">
                        <i data-lucide="users" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                    <div class="side-menu__title">
                        Pengguna
                        <div class="side-menu__sub-icon ">
                            <i data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                    </div>
                </a>
                <ul class="{{ request()->is('admin') || request()->is('admin/user*') ? 'side-menu__sub-open' : '' }}">
                    <li>
                        <a href="{{ route('user.index') }}" class="side-menu {{ request()->is('admin') || request()->is('admin/user') ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon">
                                <i data-lucide="book-user" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="side-menu__title">
                                Semua Pengguna
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user.create') }}" class="side-menu {{ request()->is('admin') || request()->is('admin/user/create') ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon">
                                <i data-lucide="user-plus" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="side-menu__title">
                                Tambah Pengguna
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
        @endif

        {{-- APLIKASI  --}}
        @if (Auth::user()->roles == 'Administrator')
            <li>
                <a href="{{ route('apps.index') }}" class="side-menu {{ request()->is('admin/apps') ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon">
                        <i data-lucide="layout-grid" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                    <div class="side-menu__title">
                        Aplikasi
                    </div>
                </a>
            </li>
        @endif


    </ul>
</nav>
