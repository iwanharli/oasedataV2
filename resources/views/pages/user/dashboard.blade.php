@extends('layouts.user')

@section('title')
    Dashboard
@endsection

@section('user_content')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">

                    <div class="intro-y flex h-10 items-center">
                        <h2 class="mr-5 truncate text-lg font-medium">General Report</h2>
                        <a class="ml-auto flex items-center text-primary" href="#">
                            <i data-tw-merge="" data-lucide="refresh-ccw" class="stroke-1.5 mr-3 h-4 w-4"></i>
                            Reload Data
                        </a>
                    </div>

                    <div class="mt-5 grid grid-cols-12 gap-6">
                        {{-- VISITOR STAT  --}}
                        <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                            <div
                                class="relative zoom-in before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-['']">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-tw-merge="" data-lucide="user"
                                            class="stroke-1.5 h-[28px] w-[28px] text-success"></i>
                                        <div class="ml-auto">
                                            <div data-placement="top" title="22% Higher than last month"
                                                class="tooltip cursor-pointer flex items-center rounded-full bg-success py-[3px] pl-2 pr-1 text-xs font-medium text-white">
                                                22%
                                                <i data-tw-merge="" data-lucide="chevron-up"
                                                    class="stroke-1.5 ml-0.5 h-4 w-4"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-6 text-3xl font-medium leading-8">152.040</div>
                                    <div class="mt-1 text-base text-slate-500">
                                        Unique Visitor
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- BERITA STAT  --}}
                        <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                            <div
                                class="relative zoom-in before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-['']">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-tw-merge="" data-lucide="file-text"
                                            class="stroke-1.5 h-[28px] w-[28px] text-primary"></i>
                                    </div>
                                    <div class="mt-6 text-3xl font-medium leading-8">106</div>
                                    <div class="mt-1 text-base text-slate-500">Berita</div>
                                </div>
                            </div>
                        </div>

                        {{-- STATISTIK STAT  --}}
                        <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                            <div
                                class="relative zoom-in before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-['']">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-tw-merge="" data-lucide="bar-chart-4"
                                            class="stroke-1.5 h-[28px] w-[28px] text-primary"></i>
                                    </div>
                                    <div class="mt-6 text-3xl font-medium leading-8">26</div>
                                    <div class="mt-1 text-base text-slate-500">Statistik</div>
                                </div>
                            </div>
                        </div>

                        {{-- DRAFT STAT  --}}
                        <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                            <div
                                class="relative zoom-in before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-['']">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-tw-merge="" data-lucide="archive-x"
                                            class="stroke-1.5 h-[28px] w-[28px] text-danger"></i>
                                    </div>
                                    <div class="mt-6 text-3xl font-medium leading-8">2</div>
                                    <div class="mt-1 text-base text-slate-500">
                                        Draft
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->

                <!-- BEGIN: STAT PENULIS -->
                <div class="col-span-12 mt-6 xl:col-span-4">
                    <div class="intro-y flex h-10 items-center">
                        <h2 class="mr-5 truncate text-lg font-medium">
                            Statistik Penulis
                        </h2>
                    </div>
                    <div class="mt-5">
                        <div class="intro-y">
                            <div class="box zoom-in mb-3 flex items-center px-4 py-4">
                                <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-md">
                                    <img src="{{ asset('user/images/fakers/profile-6.jpg') }}"
                                        alt="Midone - Tailwind Admin Dashboard Template">
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">Al Pacino</div>
                                    <div class="mt-0.5 text-xs text-slate-500">
                                        7 December 2020
                                    </div>
                                </div>
                                <div
                                    class="cursor-pointer rounded-full bg-success px-2 py-1 text-xs font-medium text-white">
                                    137 Posting
                                </div>
                            </div>
                        </div>
                        <div class="intro-y">
                            <div class="box zoom-in mb-3 flex items-center px-4 py-4">
                                <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-md">
                                    <img src="{{ asset('user/images/fakers/profile-15.jpg') }}"
                                        alt="Midone - Tailwind Admin Dashboard Template">
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">Denzel Washington</div>
                                    <div class="mt-0.5 text-xs text-slate-500">
                                        14 October 2021
                                    </div>
                                </div>
                                <div
                                    class="cursor-pointer rounded-full bg-success px-2 py-1 text-xs font-medium text-white">
                                    137 Posting
                                </div>
                            </div>
                        </div>
                        <div class="intro-y">
                            <div class="box zoom-in mb-3 flex items-center px-4 py-4">
                                <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-md">
                                    <img src="{{ asset('user/images/fakers/profile-7.jpg') }}"
                                        alt="Midone - Tailwind Admin Dashboard Template">
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">Denzel Washington</div>
                                    <div class="mt-0.5 text-xs text-slate-500">
                                        13 October 2022
                                    </div>
                                </div>
                                <div
                                    class="cursor-pointer rounded-full bg-success px-2 py-1 text-xs font-medium text-white">
                                    137 Posting
                                </div>
                            </div>
                        </div>
                        <div class="intro-y">
                            <div class="box zoom-in mb-3 flex items-center px-4 py-4">
                                <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-md">
                                    <img src="{{ asset('user/images/fakers/profile-13.jpg') }}"
                                        alt="Midone - Tailwind Admin Dashboard Template">
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">Robert De Niro</div>
                                    <div class="mt-0.5 text-xs text-slate-500">
                                        7 August 2022
                                    </div>
                                </div>
                                <div
                                    class="cursor-pointer rounded-full bg-success px-2 py-1 text-xs font-medium text-white">
                                    137 Posting
                                </div>
                            </div>
                        </div>
                        <a class="intro-y block w-full rounded-md border border-dotted border-slate-400 py-4 text-center text-slate-500 dark:border-darkmode-300"
                            href="#">
                            View More
                        </a>
                    </div>
                </div>
                <!-- END: STAT PENULIS -->
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-3">
            <div class="-mb-10 pb-10 2xl:border-l">
                <div class="grid grid-cols-12 gap-x-6 gap-y-6 2xl:gap-x-0 2xl:pl-6">
                    
                    <!-- BEGIN: Important Notes -->
                    <div
                        class="col-span-12 mt-3 md:col-span-6 xl:col-span-12 xl:col-start-1 xl:row-start-1 2xl:col-start-auto 2xl:row-start-auto mt-30">
                        <div class="intro-x flex h-10 items-center">
                            <h2 class="mr-auto truncate text-lg font-medium">
                                Important Notes
                            </h2>
                            <button data-tw-merge="" data-carousel="important-notes" data-target="prev"
                                class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed tiny-slider-navigator mr-2 border-slate-300 px-2 text-slate-600 dark:text-slate-300"><i
                                    data-tw-merge="" data-lucide="chevron-left" class="stroke-1.5 h-4 w-4"></i></button>
                            <button data-tw-merge="" data-carousel="important-notes" data-target="next"
                                class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed tiny-slider-navigator mr-2 border-slate-300 px-2 text-slate-600 dark:text-slate-300"><i
                                    data-tw-merge="" data-lucide="chevron-right" class="stroke-1.5 h-4 w-4"></i></button>
                        </div>
                        <div class="intro-x mt-5">
                            <div class="box zoom-in">
                                <div data-config="" id="important-notes" class="tiny-slider">
                                    <div class="p-5">
                                        <div class="truncate text-base font-medium">
                                            Lorem Ipsum is simply dummy text
                                        </div>
                                        <div class="mt-1 text-slate-400">20 Hours ago</div>
                                        <div class="mt-1 text-justify text-slate-500">
                                            Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s.
                                        </div>
                                        <div class="mt-5 flex font-medium">
                                            <button data-tw-merge="" type="button"
                                                class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-secondary/70 border-secondary/70 text-slate-500 dark:border-darkmode-400 dark:bg-darkmode-400 dark:text-slate-300 [&:hover:not(:disabled)]:bg-slate-100 [&:hover:not(:disabled)]:border-slate-100 [&:hover:not(:disabled)]:dark:border-darkmode-300/80 [&:hover:not(:disabled)]:dark:bg-darkmode-300/80 px-2 py-1">View
                                                Notes</button>
                                            <button data-tw-merge="" type="button"
                                                class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 ml-auto px-2 py-1">Dismiss</button>
                                        </div>
                                    </div>
                                    <div class="p-5">
                                        <div class="truncate text-base font-medium">
                                            Lorem Ipsum is simply dummy text
                                        </div>
                                        <div class="mt-1 text-slate-400">20 Hours ago</div>
                                        <div class="mt-1 text-justify text-slate-500">
                                            Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s.
                                        </div>
                                        <div class="mt-5 flex font-medium">
                                            <button data-tw-merge="" type="button"
                                                class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-secondary/70 border-secondary/70 text-slate-500 dark:border-darkmode-400 dark:bg-darkmode-400 dark:text-slate-300 [&:hover:not(:disabled)]:bg-slate-100 [&:hover:not(:disabled)]:border-slate-100 [&:hover:not(:disabled)]:dark:border-darkmode-300/80 [&:hover:not(:disabled)]:dark:bg-darkmode-300/80 px-2 py-1">View
                                                Notes</button>
                                            <button data-tw-merge="" type="button"
                                                class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 ml-auto px-2 py-1">Dismiss</button>
                                        </div>
                                    </div>
                                    <div class="p-5">
                                        <div class="truncate text-base font-medium">
                                            Lorem Ipsum is simply dummy text
                                        </div>
                                        <div class="mt-1 text-slate-400">20 Hours ago</div>
                                        <div class="mt-1 text-justify text-slate-500">
                                            Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s.
                                        </div>
                                        <div class="mt-5 flex font-medium">
                                            <button data-tw-merge="" type="button"
                                                class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-secondary/70 border-secondary/70 text-slate-500 dark:border-darkmode-400 dark:bg-darkmode-400 dark:text-slate-300 [&:hover:not(:disabled)]:bg-slate-100 [&:hover:not(:disabled)]:border-slate-100 [&:hover:not(:disabled)]:dark:border-darkmode-300/80 [&:hover:not(:disabled)]:dark:bg-darkmode-300/80 px-2 py-1">View
                                                Notes</button>
                                            <button data-tw-merge="" type="button"
                                                class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 ml-auto px-2 py-1">Dismiss</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Important Notes -->


                    <!-- BEGIN: Recent Activities -->
                    <div class="col-span-12 mt-3 md:col-span-6 xl:col-span-4 2xl:col-span-12">
                        <div class="intro-x flex h-10 items-center">
                            <h2 class="mr-5 truncate text-lg font-medium">
                                Aktivitas Terbaru
                            </h2>
                            <a class="ml-auto truncate text-primary" href="#"> Show More </a>
                        </div>
                        <div
                            class="relative mt-5 before:absolute before:ml-5 before:mt-5 before:block before:h-[85%] before:w-px before:bg-slate-200 before:dark:bg-darkmode-400">
                            {{-- <div class="intro-x my-4 text-center text-xs text-slate-500">
                                12 November
                            </div> --}}
                            <div class="intro-x relative mb-3 flex items-center">
                                <div
                                    class="before:absolute before:ml-5 before:mt-5 before:block before:h-px before:w-20 before:bg-slate-200 before:dark:bg-darkmode-400">
                                    <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-full">
                                        <img src="{{ asset('user/images/fakers/profile-3.jpg') }}"
                                            alt="Midone - Tailwind Admin Dashboard Template">
                                    </div>
                                </div>
                                <div class="box zoom-in ml-4 flex-1 px-5 py-3">
                                    <div class="flex items-center">
                                        <div class="font-medium">
                                            Hugh Jackman
                                        </div>
                                        <div class="ml-auto text-xs text-slate-500">07:00 PM</div>
                                    </div>
                                    <div class="mt-1 text-slate-500">
                                        Has changed
                                        <a class="text-primary" href="#">
                                            Samsung Galaxy S20 Ultra
                                        </a>
                                        price and description
                                    </div>
                                </div>
                            </div>
                            <div class="intro-x relative mb-3 flex items-center">
                                <div
                                    class="before:absolute before:ml-5 before:mt-5 before:block before:h-px before:w-20 before:bg-slate-200 before:dark:bg-darkmode-400">
                                    <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-full">
                                        <img src="{{ asset('user/images/fakers/profile-13.jpg') }}"
                                            alt="Midone - Tailwind Admin Dashboard Template">
                                    </div>
                                </div>
                                <div class="box zoom-in ml-4 flex-1 px-5 py-3">
                                    <div class="flex items-center">
                                        <div class="font-medium">
                                            Christian Bale
                                        </div>
                                        <div class="ml-auto text-xs text-slate-500">07:00 PM</div>
                                    </div>
                                    <div class="mt-1 text-slate-500">
                                        Has changed
                                        <a class="text-primary" href="#">
                                            Nike Tanjun
                                        </a>
                                        description
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Recent Activities -->


                </div>
            </div>
        </div>
    </div>
@endsection
