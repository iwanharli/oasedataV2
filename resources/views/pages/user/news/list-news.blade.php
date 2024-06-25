<table class="w-full text-left -mt-2 border-separate border-spacing-y-[10px]" id="newsTable">
    <thead class="">
        <tr class="">
            <th class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                NO
            </th>
            <th class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-left" colspan=2>
                JUDUL BERITA
            </th>
            <th class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                PENULIS
            </th>
            <th class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                KATEGORI
            </th>
            <th class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                TANGGAL
            </th>
            <th class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                STATUS
            </th>
            <th class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                ACTIONS
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        ?>
        @foreach ($news as $item)
            <tr class="intro-x">
                <td
                    class="px-5 py-3 border-b dark:border-darkmode-300 box w-10 rounded-l-none rounded-r-none border-x-0 text-center shadow-[5px_3px_5px_#00000005] last:border-r dark:bg-darkmode-600">
                    {{ $no++ }}
                </td>
                <td
                    class="px-5 py-3 border-b dark:border-darkmode-300 box w-20 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] last:border-r dark:bg-darkmode-600">
                    <div class="flex">
                        <div class="image-fit zoom-in h-10 w-14">
                            <img data-placement="top" title="{{ $item->post_image_description }}"
                                src="{{ Storage::url($item->post_image) }}"
                                class="tooltip cursor-pointer shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                        </div>
                    </div>
                </td>
                <td
                    class="px-0 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 text-left shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                    {{ $item->post_title }}
                </td>
                <td
                    class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 text-center shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                    <a class="whitespace-nowrap font-medium" href="#">
                        {{ $item->user->name }}
                    </a>
                    <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                        {{ $item->user->roles }}
                    </div>
                </td>
                <td
                    class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 text-center shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                    {{ $item->category->name }}
                </td>
                <td
                    class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 text-center shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                    {{ date('d M Y H:i:s', strtotime($item->created_at)) }}
                </td>
                <td
                    class="px-5 py-3 border-b dark:border-darkmode-300 box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                    <div
                        class="flex items-center justify-center 
                            @if ($item->post_status == 'Published') text-success
                            @elseif($item->post_status == 'Draft')
                            text-warning @endif">
                        <i data-lucide="check-square" class="stroke-1.5 mr-2 h-4 w-4"></i>
                        {{ $item->post_status }}
                    </div>
                </td>
                <td
                    class="px-5 py-3 border-b dark:border-darkmode-300 box w-20 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600 before:absolute before:inset-y-0 before:left-0 before:my-auto before:block before:h-8 before:w-px before:bg-slate-200 before:dark:bg-darkmode-400">
                    <div class="flex items-center justify-center">
                        <a class="mr-3 flex items-center text-warning" href="{{ route('post.edit', $item->id) }}">
                            <i data-lucide="pencil" class="stroke-1.5 mr-1 h-4 w-4"></i>
                        </a>
                        <a class="flex items-center text-danger" data-tw-toggle="modal"
                            data-tw-target="#delete-confirmation-modal" href="{{ route('post.destroy', $item->id) }}">
                            <i data-lucide="trash" class="stroke-1.5 mr-1 h-4 w-4"></i>
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
