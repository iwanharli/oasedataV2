@extends('layouts.user')

@section('title')
    Statistic
@endsection

@section('user_content')
    <h2 class="intro-y mt-10 text-lg font-medium">Daftar Statistic</h2>
    <div class="intro-y mt-5 grid grid-cols-12 gap-6">
        <div class="intro-y col-span-12 mt-2 flex flex-wrap items-center sm:flex-nowrap">
            @if (Auth::user()->roles == 'Administrator' || Auth::user()->roles == 'Penulis')
                <button
                    class="transition duration-200 border inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary mr-2 shadow-md">
                    <i data-lucide="plus" class="stroke-1.5 h-4 w-4"></i> &nbsp; Tambah Statistic
                </button>
            @endif

            <div data-tw-placement="bottom-end" class="dropdown relative">
                <button data-tw-toggle="dropdown" aria-expanded="false"
                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed !box px-2"><span
                        class="flex h-5 w-5 items-center justify-center">
                        <i data-lucide="download" class="stroke-1.5 h-4 w-4"></i>
                    </span>
                </button>
                <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150"
                    data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                    data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                    data-leave="transition-all ease-linear duration-150"
                    data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                    data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                    class="dropdown-menu absolute z-[9999] hidden">
                    <div
                        class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                        <a
                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                data-lucide="file-text" class="stroke-1.5 mr-2 h-4 w-4"></i>
                            Export to Excel
                        </a>
                        <a
                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                data-lucide="file-text" class="stroke-1.5 mr-2 h-4 w-4"></i>
                            Export to PDF
                        </a>
                    </div>
                </div>
            </div>

            {{-- FILTER  --}}
            <div class="mx-auto hidden text-slate-500 md:block">
                <a href="{{ route('statistic.index') }}"
                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-primary text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 mb-2 mr-1 inline-block w-24 mb-2 mr-1 inline-block w-24">Semua
                    <br /> ({{ $all }})
                </a>
                <a href="{{ route('statistic-published') }}"
                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-success text-success dark:border-success [&:hover:not(:disabled)]:bg-success/10 mb-2 mr-1 inline-block w-24 mb-2 mr-1 inline-block w-24">Published
                    <br /> ({{ $published }})
                </a>
                <a href="{{ route('statistic-draft') }}"
                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-warning text-warning dark:border-warning [&:hover:not(:disabled)]:bg-warning/10 mb-2 mr-1 inline-block w-24 mb-2 mr-1 inline-block w-24">Draft
                    <br /> ({{ $draft }})
                </a>
                @if (Auth::user()->roles == 'Administrator')
                    <a href="{{ route('statistic-trash') }}"
                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-danger text-danger dark:border-danger [&:hover:not(:disabled)]:bg-danger/10 mb-2 mr-1 inline-block w-24 mb-2 mr-1 inline-block w-24">Trash
                        <br /> ({{ $trash }})
                    </a>
                @endif
            </div>

            <button id="changeViewList"
                class="transition duration-100 border inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-dark border-primary text-white dark:border-primary mr-5 shadow-md">
                <i data-lucide="layout-grid" class="stroke-1.5 w-5 h-5 newsList" id="newsList"></i>
                <i data-lucide="align-justify" class="stroke-1.5 w-5 h-5 statisticGrid hidden" id="statisticGrid"></i>
            </button>

            <div class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto md:ml-0">
                <div class="relative w-56 text-slate-500">
                    <input type="text" placeholder="Search..."
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 !box w-56 pr-10">
                    <i data-lucide="search" class="stroke-1.5 absolute inset-y-0 right-0 my-auto mr-3 h-4 w-4"></i>
                </div>
            </div>
        </div>

        <!-- BEGIN: STATISTIC ------------------------------------------------------------------------------>
        @foreach ($statistic as $item)
            <div class="intro-y box col-span-12 md:col-span-4">
                <div
                    class="image-fit h-[320px] before:absolute before:left-0 before:top-0 before:z-10 before:block before:h-full before:w-full before:bg-gradient-to-t before:from-black/90 before:to-black/10">
                    <img class="rounded-t-md" src="{{ Storage::url($item->post_image) }}" alt="{{ $item->post_teaser }}">
                    <div class="absolute z-10 flex w-full items-center px-5 pt-6">
                        <div class="image-fit h-10 w-10 flex-none">
                            <img class="rounded-full" src="{{ Storage::url($item->user->profile) }}"
                                alt="{{ $item->user->name }}">
                        </div>
                        <div class="ml-3 mr-auto text-white">
                            <a class="font-medium" href="#">
                                {{ $item->user->name }}
                            </a>
                            <div class="mt-0.5 text-xs">
                                {{ $item->user->roles }}
                            </div>
                        </div>
                    </div>
                    <div class="absolute bottom-0 z-10 px-5 pb-6 text-white">
                        <span class="rounded bg-white/20 px-2 py-1">
                            {{ $item->category->name }}
                        </span>
                        <a class="mt-3 block text-xl font-medium" href="#">
                            {{ $item->post_title }}
                        </a>
                        <div class="mt-0.5 text-xs">
                            {{ date('d M Y H:i:s', strtotime($item->created_at)) }}
                        </div>
                    </div>
                </div>
                <div class="flex items-center border-t border-slate-200/60 px-5 py-3 dark:border-darkmode-400">
                    <a data-placement="top" title="Bookmark" href="#"
                        class="tooltip cursor-pointer intro-x mr-2 flex h-8 w-8 items-center justify-center rounded-full border border-slate-300 text-slate-500 dark:border-darkmode-400 dark:bg-darkmode-300 dark:text-slate-300"><i
                            data-tw-merge="" data-lucide="bookmark" class="stroke-1.5 h-3 w-3"></i></a>
                    <a data-placement="top" title="Share" href="#"
                        class="tooltip cursor-pointer intro-x ml-auto flex h-8 w-8 items-center justify-center rounded-full bg-primary/10 text-primary dark:bg-darkmode-300 dark:text-slate-300"><i
                            data-tw-merge="" data-lucide="share" class="stroke-1.5 h-3 w-3"></i></a>
                    <a data-placement="top" title="Download PDF" href="#"
                        class="tooltip cursor-pointer intro-x ml-2 flex h-8 w-8 items-center justify-center rounded-full bg-primary text-white"><i
                            data-tw-merge="" data-lucide="share" class="stroke-1.5 h-3 w-3"></i></a>
                </div>
            </div>
        @endforeach
        <!-- END: STATISTIC -------------------------------------------------------------------------------->

        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap items-center sm:flex-row sm:flex-nowrap">
            <nav class="w-full sm:mr-auto sm:w-auto">
                <ul class="flex w-full mr-0 sm:mr-auto sm:w-auto">
                    <li class="flex-1 sm:flex-initial">
                        <a
                            class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i
                                data-lucide="chevrons-left" class="stroke-1.5 h-4 w-4"></i></a>
                    </li>
                    <li class="flex-1 sm:flex-initial">
                        <a
                            class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i
                                data-lucide="chevron-left" class="stroke-1.5 h-4 w-4"></i></a>
                    </li>
                    <li class="flex-1 sm:flex-initial">
                        <a
                            class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">...</a>
                    </li>
                    <li class="flex-1 sm:flex-initial">
                        <a
                            class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">1</a>
                    </li>
                    <li class="flex-1 sm:flex-initial">
                        <a
                            class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3 !box dark:bg-darkmode-400">2</a>
                    </li>
                    <li class="flex-1 sm:flex-initial">
                        <a
                            class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">3</a>
                    </li>
                    <li class="flex-1 sm:flex-initial">
                        <a
                            class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">...</a>
                    </li>
                    <li class="flex-1 sm:flex-initial">
                        <a
                            class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i
                                data-lucide="chevron-right" class="stroke-1.5 h-4 w-4"></i></a>
                    </li>
                    <li class="flex-1 sm:flex-initial">
                        <a
                            class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i
                                data-lucide="chevrons-right" class="stroke-1.5 h-4 w-4"></i></a>
                    </li>
                </ul>
            </nav>
            <select
                class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 !box mt-3 w-20 sm:mt-0">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </select>
        </div>
        <!-- END: Pagination -->
    </div>


    <!-- BEGIN: Delete Confirmation Modal -->
    <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="delete-confirmation-modal"
        class="modal group bg-black/60 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
        <div
            class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px]">
            <div class="p-5 text-center">
                <i data-lucide="x-circle" class="stroke-1.5 mx-auto mt-3 h-16 w-16 text-danger"></i>
                <div class="mt-5 text-3xl">Are you sure?</div>
                <div class="mt-2 text-slate-500">
                    Do you really want to delete these records? <br>
                    This process cannot be undone.
                </div>
            </div>
            <div class="px-5 pb-8 text-center">
                <button data-tw-dismiss="modal" type="button"
                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 mr-1 w-24">Cancel</button>
                <button type="button"
                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-danger border-danger text-white dark:border-danger w-24">
                    <form id="delete-form" method="POST" action="">
                        @csrf
                        @method('DELETE')
                        Delete
                        </a>
                </button>
            </div>
        </div>
    </div>
    <!-- END: Delete Confirmation Modal -->


    {{-- SCRIPT  --}}
    @push('addon-script')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            jQuery(document).ready(function($) {
                $('#changeViewList').click(function() {
                    $('#statisticList, #statisticGrid').toggleClass('hidden');
                });
            });
        </script>
    @endpush
@endsection
