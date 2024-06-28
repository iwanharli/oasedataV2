@extends('layouts.user')

@section('title')
    Tambah Berita
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ asset('user/css/vendors/ckeditor.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/vendors/litepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/vendors/tom-select.css') }}">
@endpush

@section('user_content')
    <div class="intro-y mt-5 grid grid-cols-12 gap-5">
        <!-- BEGIN: Post Content -->
        <div class="intro-y col-span-12 lg:col-span-8">
            <input data-tw-merge="" type="text" placeholder="Title"
                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 intro-y !box px-4 py-3 pr-10">
            <div class="intro-y box mt-5 overflow-hidden">
                <ul data-tw-merge="" role="tablist"
                    class="border-b w-full flex flex-col border-transparent bg-slate-200 dark:border-transparent dark:bg-darkmode-800 sm:flex-row">
                    <li id="content-tab" data-tw-merge="" role="presentation" class="focus-visible:outline-none -mb-px">
                        <button data-tw-merge="" data-tw-target="#content" role="tab"
                            class="cursor-pointer appearance-none border border-transparent dark:text-slate-400 [&.active]:dark:text-white rounded-t-md dark:border-transparent [&.active]:bg-white [&.active]:font-medium [&.active]:dark:border-b-darkmode-600 [&:not(.active)]:dark:hover:border-transparent active flex items-center justify-center w-full px-0 py-0 sm:w-40 text-slate-500 [&:not(.active)]:hover:border-transparent [&:not(.active)]:hover:bg-transparent [&:not(.active)]:hover:text-slate-600 [&:not(.active)]:hover:dark:bg-transparent [&:not(.active)]:hover:dark:text-slate-300 [&.active]:text-primary [&.active]:border-transparent [&.active]:dark:bg-darkmode-600 [&.active]:dark:border-x-transparent [&.active]:dark:border-t-transparent"><span
                                data-placement="top" title="Fill in the article content" aria-controls="content"
                                aria-selected="true"
                                class="tooltip cursor-pointer flex w-full items-center justify-center py-4"><i
                                    data-tw-merge="" data-lucide="file-text" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                Content</span></button>
                    </li>
                    <li id="meta-title-tab" data-tw-merge="" role="presentation" class="focus-visible:outline-none -mb-px">
                        <button data-tw-merge="" data-tw-target="#meta-title" role="tab"
                            class="cursor-pointer appearance-none border border-transparent dark:text-slate-400 [&.active]:dark:text-white rounded-t-md dark:border-transparent [&.active]:bg-white [&.active]:font-medium [&.active]:dark:border-b-darkmode-600 [&:not(.active)]:dark:hover:border-transparent flex items-center justify-center w-full px-0 py-0 sm:w-40 text-slate-500 [&:not(.active)]:hover:border-transparent [&:not(.active)]:hover:bg-transparent [&:not(.active)]:hover:text-slate-600 [&:not(.active)]:hover:dark:bg-transparent [&:not(.active)]:hover:dark:text-slate-300 [&.active]:text-primary [&.active]:border-transparent [&.active]:dark:bg-darkmode-600 [&.active]:dark:border-x-transparent [&.active]:dark:border-t-transparent"><span
                                data-placement="top" title="Adjust the meta title" aria-selected="false"
                                class="tooltip cursor-pointer flex w-full items-center justify-center py-4"><i
                                    data-tw-merge="" data-lucide="code" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                Meta Title</span></button>
                    </li>
                    <li id="keywords-tab" data-tw-merge="" role="presentation" class="focus-visible:outline-none -mb-px">
                        <button data-tw-merge="" data-tw-target="#keywords" role="tab"
                            class="cursor-pointer appearance-none border border-transparent dark:text-slate-400 [&.active]:dark:text-white rounded-t-md dark:border-transparent [&.active]:bg-white [&.active]:font-medium [&.active]:dark:border-b-darkmode-600 [&:not(.active)]:dark:hover:border-transparent flex items-center justify-center w-full px-0 py-0 sm:w-40 text-slate-500 [&:not(.active)]:hover:border-transparent [&:not(.active)]:hover:bg-transparent [&:not(.active)]:hover:text-slate-600 [&:not(.active)]:hover:dark:bg-transparent [&:not(.active)]:hover:dark:text-slate-300 [&.active]:text-primary [&.active]:border-transparent [&.active]:dark:bg-darkmode-600 [&.active]:dark:border-x-transparent [&.active]:dark:border-t-transparent"><span
                                data-placement="top" title="Use search keywords" aria-selected="false"
                                class="tooltip cursor-pointer flex w-full items-center justify-center py-4"><i
                                    data-tw-merge="" data-lucide="align-left" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                Keywords</span></button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div data-transition="" data-selector=".active"
                        data-enter="transition-[visibility,opacity] ease-linear duration-150"
                        data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0" data-enter-to="visible opacity-100"
                        data-leave="transition-[visibility,opacity] ease-linear duration-150"
                        data-leave-from="visible opacity-100" data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0"
                        id="content" role="tabpanel" aria-labelledby="content-tab" class="tab-pane active p-5">
                        <div class="rounded-md border border-slate-200/60 p-5 dark:border-darkmode-400">
                            <div
                                class="flex items-center border-b border-slate-200/60 pb-5 font-medium dark:border-darkmode-400">
                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                Text
                                Content
                            </div>
                            <div class="mt-5">
                                <div class="editor">
                                    <p>Content of the editor.</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 rounded-md border border-slate-200/60 p-5 dark:border-darkmode-400">
                            <div
                                class="flex items-center border-b border-slate-200/60 pb-5 font-medium dark:border-darkmode-400">
                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                Caption & Images
                            </div>
                            <div class="mt-5">
                                <div>
                                    <label data-tw-merge="" for="post-form-7"
                                        class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                        Caption
                                    </label>
                                    <input data-tw-merge="" id="post-form-7" type="text" placeholder="Write caption"
                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
                                </div>
                                <div class="mt-3">
                                    <label data-tw-merge=""
                                        class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                        Upload Image
                                    </label>
                                    <div class="rounded-md border-2 border-dashed pt-4 dark:border-darkmode-400">
                                        <div class="flex flex-wrap px-4">
                                            <div class="image-fit zoom-in relative mb-5 mr-5 h-24 w-24 cursor-pointer">
                                                <img class="rounded-md" src="{{ asset('user/images/fakers/preview-12.jpg') }}"
                                                    alt="Midone - Tailwind Admin Dashboard Template">
                                                <div data-placement="top" title="Remove this image?"
                                                    class="tooltip cursor-pointer absolute right-0 top-0 -mr-2 -mt-2 flex h-5 w-5 items-center justify-center rounded-full bg-danger text-white">
                                                    <i data-tw-merge="" data-lucide="x" class="stroke-1.5 h-4 w-4"></i>
                                                </div>
                                            </div>
                                            <div class="image-fit zoom-in relative mb-5 mr-5 h-24 w-24 cursor-pointer">
                                                <img class="rounded-md" src="{{ asset('user/images/fakers/preview-14.jpg') }}"
                                                    alt="Midone - Tailwind Admin Dashboard Template">
                                                <div data-placement="top" title="Remove this image?"
                                                    class="tooltip cursor-pointer absolute right-0 top-0 -mr-2 -mt-2 flex h-5 w-5 items-center justify-center rounded-full bg-danger text-white">
                                                    <i data-tw-merge="" data-lucide="x" class="stroke-1.5 h-4 w-4"></i>
                                                </div>
                                            </div>
                                            <div class="image-fit zoom-in relative mb-5 mr-5 h-24 w-24 cursor-pointer">
                                                <img class="rounded-md" src="{{ asset('user/images/fakers/preview-2.jpg') }}"
                                                    alt="Midone - Tailwind Admin Dashboard Template">
                                                <div data-placement="top" title="Remove this image?"
                                                    class="tooltip cursor-pointer absolute right-0 top-0 -mr-2 -mt-2 flex h-5 w-5 items-center justify-center rounded-full bg-danger text-white">
                                                    <i data-tw-merge="" data-lucide="x" class="stroke-1.5 h-4 w-4"></i>
                                                </div>
                                            </div>
                                            <div class="image-fit zoom-in relative mb-5 mr-5 h-24 w-24 cursor-pointer">
                                                <img class="rounded-md" src="{{ asset('user/images/fakers/preview-4.jpg') }}"
                                                    alt="Midone - Tailwind Admin Dashboard Template">
                                                <div data-placement="top" title="Remove this image?"
                                                    class="tooltip cursor-pointer absolute right-0 top-0 -mr-2 -mt-2 flex h-5 w-5 items-center justify-center rounded-full bg-danger text-white">
                                                    <i data-tw-merge="" data-lucide="x" class="stroke-1.5 h-4 w-4"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="relative flex cursor-pointer items-center px-4 pb-4">
                                            <i data-tw-merge="" data-lucide="image" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                            <span class="mr-1 text-primary">
                                                Upload a file
                                            </span>
                                            or drag and drop
                                            <input data-tw-merge="" type="file"
                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 absolute left-0 top-0 h-full opacity-0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Post Content -->
        <!-- BEGIN: Post Info -->
        <div class="col-span-12 lg:col-span-4">
            <div class="intro-y box p-5">
                <div>
                    <label data-tw-merge=""
                        class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                        Written By
                    </label>
                    <div data-tw-merge="" data-tw-placement="bottom-end"
                        class="dropdown relative [&&gt;div:nth-child(2)]:w-full"><button data-tw-merge=""
                            data-tw-toggle="dropdown" aria-expanded="false" role="button"
                            class="transition duration-200 border shadow-sm items-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 flex w-full justify-start dark:border-darkmode-800 dark:bg-darkmode-800">
                            <div class="image-fit mr-3 h-6 w-6">
                                <img class="rounded" src="{{ asset('user/images/fakers/profile-10.jpg') }}"
                                    alt="Midone - Tailwind Admin Dashboard Template">
                            </div>
                            <div class="truncate">Kate Winslet</div>
                            <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 ml-auto h-4 w-4"></i>
                        </button>
                        <div data-transition="" data-selector=".show"
                            data-enter="transition-all ease-linear duration-150"
                            data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                            data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                            data-leave="transition-all ease-linear duration-150"
                            data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                            data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                            class="dropdown-menu absolute z-[9999] hidden">
                            <div data-tw-merge=""
                                class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600">
                                <a
                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">
                                    <div class="image-fit absolute mr-3 h-6 w-6">
                                        <img class="rounded" src="{{ asset('user/images/fakers/profile-3.jpg') }}"
                                            alt="Midone - Tailwind Admin Dashboard Template">
                                    </div>
                                    <div class="ml-8 pl-1">Kate Winslet</div>
                                </a>
                                <a
                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">
                                    <div class="image-fit absolute mr-3 h-6 w-6">
                                        <img class="rounded" src="{{ asset('user/images/fakers/profile-13.jpg') }}"
                                            alt="Midone - Tailwind Admin Dashboard Template">
                                    </div>
                                    <div class="ml-8 pl-1">Nicolas Cage</div>
                                </a>
                                <a
                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">
                                    <div class="image-fit absolute mr-3 h-6 w-6">
                                        <img class="rounded" src="{{ asset('user/images/fakers/profile-12.jpg') }}"
                                            alt="Midone - Tailwind Admin Dashboard Template">
                                    </div>
                                    <div class="ml-8 pl-1">Al Pacino</div>
                                </a>
                                <a
                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">
                                    <div class="image-fit absolute mr-3 h-6 w-6">
                                        <img class="rounded" src="{{ asset('user/images/fakers/profile-10.jpg') }}"
                                            alt="Midone - Tailwind Admin Dashboard Template">
                                    </div>
                                    <div class="ml-8 pl-1">Denzel Washington</div>
                                </a>
                                <a
                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">
                                    <div class="image-fit absolute mr-3 h-6 w-6">
                                        <img class="rounded" src="{{ asset('user/images/fakers/profile-10.jpg') }}"
                                            alt="Midone - Tailwind Admin Dashboard Template">
                                    </div>
                                    <div class="ml-8 pl-1">Johnny Depp</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <label data-tw-merge="" for="post-form-2"
                        class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                        Post Date
                    </label>
                    <input data-tw-merge="" type="text"
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 datepicker">
                </div>
                <div class="mt-3">
                    <label data-tw-merge="" for="post-form-3"
                        class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                        Categories
                    </label>
                    <select id="post-form-3" multiple="multiple" class="tom-select w-full">
                        <option value="1" selected="">Horror</option>
                        <option value="2">Sci-fi</option>
                        <option value="3" selected="">Action</option>
                        <option value="4">Drama</option>
                        <option value="5">Comedy</option>
                    </select>
                </div>
                <div class="mt-3">
                    <label data-tw-merge="" for="post-form-4"
                        class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                        Tags
                    </label>
                    <select id="post-form-4" multiple="multiple" class="tom-select w-full">
                        <option value="1" selected="">Leonardo DiCaprio</option>
                        <option value="2">Johnny Deep</option>
                        <option value="3" selected="">Robert Downey, Jr</option>
                        <option value="4">Samuel L. Jackson</option>
                        <option value="5">Morgan Freeman</option>
                    </select>
                </div>
                <div data-tw-merge="" class="flex mt-3 flex-col items-start"><label data-tw-merge="" for="post-form-5"
                        class="cursor-pointer mb-2 ml-0">Published</label>
                    <input data-tw-merge="" type="checkbox"
                        class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50 w-[38px] h-[24px] p-px rounded-full relative before:w-[20px] before:h-[20px] before:shadow-[1px_1px_3px_rgba(0,0,0,0.25)] before:transition-[margin-left] before:duration-200 before:ease-in-out before:absolute before:inset-y-0 before:my-auto before:rounded-full before:dark:bg-darkmode-600 checked:bg-primary checked:border-primary checked:bg-none before:checked:ml-[14px] before:checked:bg-white"
                        id="post-form-5">
                </div>
                <div data-tw-merge="" class="flex mt-3 flex-col items-start"><label data-tw-merge="" for="post-form-6"
                        class="cursor-pointer mb-2 ml-0">Show Author Name</label>
                    <input data-tw-merge="" type="checkbox"
                        class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50 w-[38px] h-[24px] p-px rounded-full relative before:w-[20px] before:h-[20px] before:shadow-[1px_1px_3px_rgba(0,0,0,0.25)] before:transition-[margin-left] before:duration-200 before:ease-in-out before:absolute before:inset-y-0 before:my-auto before:rounded-full before:dark:bg-darkmode-600 checked:bg-primary checked:border-primary checked:bg-none before:checked:ml-[14px] before:checked:bg-white"
                        id="post-form-6">
                </div>
            </div>
        </div>
        <!-- END: Post Info -->
    </div>

    {{-- SCRIPT  --}}
    @push('prepend-script')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script src="{{ asset('user/js/vendors/tab.js') }}"></script>
        <script src="{{ asset('user/js/vendors/ckeditor/classic.js') }}"></script>
        <script src="{{ asset('user/js/vendors/tom-select.js') }}"></script>
        <script src="{{ asset('user/js/components/base/classic-editor.js') }}"></script>
        <script src="{{ asset('user/js/components/base/tom-select.js') }}"></script>
    @endpush
@endsection
