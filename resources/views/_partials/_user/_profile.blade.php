<div data-tw-placement="bottom-end" class="dropdown relative">


    <button data-tw-toggle="dropdown" aria-expanded="false"
        class="cursor-pointer image-fit zoom-in intro-x block h-8 w-8 overflow-hidden rounded-full shadow-lg">
        @if (Auth::user()->profile != null)
            <img src="{{ Storage::url(Auth::user()->profile) }}" />
        @else
            <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" />
        @endif
        {{-- <img src="{{ asset('user/images/fakers/profile-2.jpg') }}"> --}}
    </button>
    <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150"
        data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
        data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150"
        data-leave-from="!mt-1 visible opacity-100 translate-y-0"
        data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
        <div data-tw-merge=""
            class="dropdown-content rounded-md border-transparent p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 mt-px w-56 bg-theme-1 text-white">
            <div class="p-2 font-medium font-normal">
                <div class="font-medium">{{ Auth::user()->name }}</div>
                <div class="mt-0.5 text-xs text-white/70 dark:text-slate-500">
                    {{ Auth::user()->roles }}
                </div>
            </div>

            <div class="h-px my-2 -mx-2 bg-slate-200/60 dark:bg-darkmode-400 bg-white/[0.08]"></div>

            <a href="{{ route('profile-user') }}"
                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item hover:bg-white/5">
                <i data-lucide="user" class="stroke-1.5 mr-2 h-4 w-4"></i>
                Profile
            </a>

            <a href="#"
                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item hover:bg-white/5">
                <i data-lucide="help-circle" class="stroke-1.5 mr-2 h-4 w-4"></i>
                Help
            </a>

            <div class="h-px my-2 -mx-2 bg-slate-200/60 dark:bg-darkmode-400 bg-white/[0.08]"></div>

            <form action="/logout" method="post">
                @csrf
                <button type="submit"
                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item hover:bg-white/5 w-full">
                    <i data-lucide="toggle-right" class="stroke-1.5 mr-2 h-4 w-4"></i>
                    Logout
                </button>
            </form>
        </div>
    </div>
</div>
