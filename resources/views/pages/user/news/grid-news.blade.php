@foreach ($news as $item)
    <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3 newsGrid hidden" id="newsGrid">
        <div class="box">
            <div class="p-5">
                <div
                    class="image-fit h-40 overflow-hidden rounded-md before:absolute before:left-0 before:top-0 before:z-10 before:block before:h-full before:w-full before:bg-gradient-to-t before:from-black before:to-black/10 2xl:h-56">
                    <img class="rounded-md" src="{{ Storage::url($item->post_image) }}"
                        alt="Midone - Tailwind Admin Dashboard Template">
                    <span class="absolute top-0 z-10 m-5 rounded bg-pending/80 px-2 py-1 text-xs text-white">
                        {{ $item->category->name }}
                    </span>
                    <div class="absolute bottom-0 z-10 px-5 pb-6 text-white">
                        <a class="block text-base font-medium" href="#">
                        </a>
                        {{ $item->post_title }}
                        <span class="mt-3 text-xs text-white/90">
                            Photography
                        </span>
                    </div>
                </div>
                <div class="mt-5 text-slate-600 dark:text-slate-500">
                    <div class="flex items-center">
                        <i data-tw-merge="" data-lucide="link" class="stroke-1.5 mr-2 h-4 w-4"></i>
                        {{ $item->user->name }} - &nbsp; <small>{{ $item->user->roles }}</small>
                    </div>
                    <div class="mt-2 flex items-center">
                        <i data-tw-merge="" data-lucide="check-square" class="stroke-1.5 mr-2 h-4 w-4"></i>
                        Status:
                        {{ $item->post_status }}
                    </div>
                </div>
            </div>
            <div
                class="flex items-center justify-center border-t border-slate-200/60 p-5 dark:border-darkmode-400 lg:justify-end">
                <a class="mr-auto flex items-center text-primary" href="#">
                    {{ date('d M Y H:i:s', strtotime($item->created_at)) }}
                </a>
                <a class="mr-3 flex items-center" href="#">
                    <i data-tw-merge="" data-lucide="check-square" class="stroke-1.5 mr-1 h-4 w-4"></i>
                    Edit
                </a>
                <a class="flex items-center text-danger" data-tw-toggle="modal"
                    data-tw-target="#delete-confirmation-modal" href="#">
                    <i data-tw-merge="" data-lucide="trash" class="stroke-1.5 mr-1 h-4 w-4"></i>
                    Delete
                </a>
            </div>
        </div>
    </div>
@endforeach
