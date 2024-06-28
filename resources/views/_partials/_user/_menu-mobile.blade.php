<div
    class="mobile-menu group top-0 inset-x-0 fixed bg-theme-1/90 z-[60] border-b border-white/[0.08] dark:bg-darkmode-800/90 md:hidden before:content-[''] before:w-full before:h-screen before:z-10 before:fixed before:inset-x-0 before:bg-black/90 before:transition-opacity before:duration-200 before:ease-in-out before:invisible before:opacity-0 [&.mobile-menu--active]:before:visible [&.mobile-menu--active]:before:opacity-100">
    <div class="flex h-[70px] items-center px-3 sm:px-8">
        <a class="mr-auto flex" href="#">
            <img class="w-6" src="{{ asset('user/images/logo.svg') }}" alt="Midone - Tailwind Admin Dashboard Template">
        </a>
        <a class="mobile-menu-toggler" href="#">
            <i data-tw-merge="" data-lucide="bar-chart2" class="stroke-1.5 h-8 w-8 -rotate-90 transform text-white"></i>
        </a>
    </div>
    <div
        class="scrollable h-screen z-20 top-0 left-0 w-[270px] -ml-[100%] bg-primary transition-all duration-300 ease-in-out dark:bg-darkmode-800 [&[data-simplebar]]:fixed [&_.simplebar-scrollbar]:before:bg-black/50 group-[.mobile-menu--active]:ml-0">
        <a href="#"
            class="fixed top-0 right-0 mt-4 mr-4 transition-opacity duration-200 ease-in-out invisible opacity-0 group-[.mobile-menu--active]:visible group-[.mobile-menu--active]:opacity-100">
            <i data-tw-merge="" data-lucide="x-circle"
                class="stroke-1.5 mobile-menu-toggler h-8 w-8 -rotate-90 transform text-white"></i>
        </a>

        <ul class="py-2">
            {{-- DASHBOARD  --}}
            <li>
                <a href="javascript:;" class="menu menu--active">
                    <div class="menu__icon">
                        <i data-tw-merge="" data-lucide="home" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                    <div class="menu__title">
                        Dashboard
                    </div>
                </a>
            </li>
    
            {{-- BERITA  --}}
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon">
                        <i data-tw-merge="" data-lucide="file-text" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                    <div class="menu__title">
                        Berita
                        <div class="menu__sub-icon ">
                            <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="#" class="menu">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="gallery-horizontal-end" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Semua Berita
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="menu">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="edit" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Tambah Baru
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
    
            {{-- STATISTIK  --}}
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon">
                        <i data-tw-merge="" data-lucide="bar-chart-4" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                    <div class="menu__title">
                        Statistik
                        <div class="menu__sub-icon ">
                            <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="#" class="menu">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="gallery-horizontal-end" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Semua Statistik
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="menu">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="edit" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Tambah Baru
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
    
            {{-- HALAMAN  --}}
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon">
                        <i data-tw-merge="" data-lucide="settings-2" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                    <div class="menu__title">
                        Halaman
                        <div class="menu__sub-icon ">
                            <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="#" class="menu">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="coffee" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Breaking News
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="menu">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="book-up-2" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Headline
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Detail
                                <div class="menu__sub-icon ">
                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="#" class="menu">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="sticky-note" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">
                                        Redaksi
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="menu">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="sticky-note" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">
                                        Pedoman
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="menu">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="sticky-note" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">
                                        Disclaimer
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="menu">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="sticky-note" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">
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
                <a href="#" class="menu">
                    <div class="menu__icon">
                        <i data-tw-merge="" data-lucide="folder-tree" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                    <div class="menu__title">
                        Kategori
                    </div>
                </a>
            </li>
    
            {{-- TAG  --}}
            <li>
                <a href="#" class="menu">
                    <div class="menu__icon">
                        <i data-tw-merge="" data-lucide="tag" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                    <div class="menu__title">
                        Tag
                    </div>
                </a>
            </li>
    
            {{-- GALERI  --}}
            <li>
                <a href="#" class="menu">
                    <div class="menu__icon">
                        <i data-tw-merge="" data-lucide="wallpaper" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                    <div class="menu__title">
                        File Manager
                    </div>
                </a>
            </li>
    
            <li class="my-6 side-nav__divider"></li>
    
            {{-- PENGGUNA  --}}
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon">
                        <i data-tw-merge="" data-lucide="users" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                    <div class="menu__title">
                        Pengguna
                        <div class="menu__sub-icon ">
                            <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="#" class="menu">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="book-user" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Semua Pengguna
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="menu">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="user-plus" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Tambah Pengguna
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
    
            {{-- APLIKASI  --}}
            <li>
                <a href="#" class="menu">
                    <div class="menu__icon">
                        <i data-tw-merge="" data-lucide="layout-grid" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                    <div class="menu__title">
                        Aplikasi
                    </div>
                </a>
            </li>

        </ul>
    </div>
</div>
