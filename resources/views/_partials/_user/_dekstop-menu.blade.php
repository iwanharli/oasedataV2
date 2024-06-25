<nav class="side-nav hidden w-[80px] overflow-x-hidden pb-16 pr-5 md:block xl:w-[230px]">
    <a class="flex items-center pt-4 pl-5 intro-x" href="#">
        <img class="w-6" src="{{ asset('user/images/logo.svg') }}" alt="Midone - Tailwind Admin Dashboard Template">
        <span class="hidden ml-3 text-lg text-white xl:block"> OASEDATA </span>
    </a>
    <div class="my-6 side-nav__divider"></div>
    <ul>
        {{-- DASHBOARD  --}}
        <li>
            <a href="{{ route('admin-dashboard') }}" class="side-menu side-menu--active">
                <div class="side-menu__icon">
                    <i data-tw-merge="" data-lucide="home" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    Dashboard
                </div>
            </a>
        </li>

        {{-- BERITA  --}}
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon">
                    <i data-tw-merge="" data-lucide="file-text" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    Berita
                    <div class="side-menu__sub-icon ">
                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{ route('post.index') }}" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="gallery-horizontal-end" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Semua Berita
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('post.create') }}" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="edit" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Tambah Baru
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        {{-- STATISTIK  --}}
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon">
                    <i data-tw-merge="" data-lucide="bar-chart-4" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    Statistik
                    <div class="side-menu__sub-icon ">
                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{ route('statistik.index') }}" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="gallery-horizontal-end" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Semua Statistik
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="edit" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Tambah Baru
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        {{-- HALAMAN  --}}
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon">
                    <i data-tw-merge="" data-lucide="settings-2" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    Halaman
                    <div class="side-menu__sub-icon ">
                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="#" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="coffee" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Breaking News
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="book-up-2" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Headline
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Detail
                            <div class="side-menu__sub-icon ">
                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{ route('redaction.index') }}" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="sticky-note" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Redaksi
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('guideline.index') }}" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="sticky-note" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Pedoman
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('disclaimer.index') }}" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="sticky-note" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Disclaimer
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact.index') }}" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="sticky-note" class="stroke-1.5 w-5 h-5"></i>
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

        <li class="my-6 side-nav__divider"></li>

        {{-- KATEGORI  --}}
        <li>
            <a href="{{ route('category.index') }}" class="side-menu">
                <div class="side-menu__icon">
                    <i data-tw-merge="" data-lucide="folder-tree" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    Kategori
                </div>
            </a>
        </li>

        {{-- TAG  --}}
        <li>
            <a href="{{ route('tag.index') }}" class="side-menu">
                <div class="side-menu__icon">
                    <i data-tw-merge="" data-lucide="tag" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    Tag
                </div>
            </a>
        </li>

        {{-- GALERI  --}}
        <li>
            <a href="#" class="side-menu">
                <div class="side-menu__icon">
                    <i data-tw-merge="" data-lucide="wallpaper" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    File Manager
                </div>
            </a>
        </li>

        <li class="my-6 side-nav__divider"></li>

        {{-- PENGGUNA  --}}
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon">
                    <i data-tw-merge="" data-lucide="users" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    Pengguna
                    <div class="side-menu__sub-icon ">
                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{ route('user.index') }}" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="book-user" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Semua Pengguna
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.create') }}" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="user-plus" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Tambah Pengguna
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        {{-- APLIKASI  --}}
        <li>
            <a href="{{ route('apps.index') }}" class="side-menu">
                <div class="side-menu__icon">
                    <i data-tw-merge="" data-lucide="layout-grid" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    Aplikasi
                </div>
            </a>
        </li>

        
    </ul>
</nav>
