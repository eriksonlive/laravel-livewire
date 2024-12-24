<div x-data="{
    sidebarOpen: true,
    mobile: false,
    initSidebar() {
        if (localStorage.getItem('sidebar') === null) {
            localStorage.setItem('sidebar', this.sidebarOpen);
        }

        if (this.mobile) {
            localStorage.setItem('sidebar', false);

        }

        this.sidebarOpen = localStorage.getItem('sidebar') === 'true';
    },
    toggleSidebar() {
        this.sidebarOpen = !this.sidebarOpen;
        localStorage.setItem('sidebar', this.sidebarOpen);
    }
}" x-init="initSidebar();
mobile = window.innerWidth < 768;" @resize.window="mobile = window.innerWidth < 768">

    <div x-show="sidebarOpen && mobile" class="fixed inset-0 bg-black bg-opacity-50 z-30 transition-opacity duration-300"
        @click="toggleSidebar()">
    </div>

    @if (is_string($header) && !empty($header))
        @if (Livewire::isDiscoverable($header))
            @livewire($header)
        @elseif (View::exists($header))
            @include($header)
        @else
            {{ $header }}
        @endif
    @endif

    <div class="fixed mt-16 inset-y-0 left-0 z-40 w-16 flex flex-col bg-white dark:bg-gray-800 dark:text-white transform transition-all duration-300 ease-in-out shadow-xl overflow-x-hidden"
        :class="{
            '-translate-x-full': !sidebarOpen && mobile,
            'translate-x-0 w-56': sidebarOpen && mobile,
            'w-[5rem]': !sidebarOpen && !mobile,
            'w-60': sidebarOpen && !mobile
        }">

        <div class="ml-1 mt-5 shrink-0 flex items-center justify-center" :class="{ 'hidden': !mobile }">
            <a href="{{ route('dashboard') }}" wire:navigate.hover>
                <x-application-mark class="block h-9 w-auto" />
            </a>
        </div>

        <x-nav :menu="$menu" />
    </div>

    <!-- Contenido principal -->
    <div :class="{ 'ml-[5rem]': !sidebarOpen && !mobile, 'ml-60': sidebarOpen && !mobile, 'ml-0': mobile }"
        class="transition-all duration-300 mt-[4.2rem] mx-2">
        <div class="p-4">
            {!! $slot !!}
        </div>
    </div>

    <footer :class="{ 'ml-[5rem]': !sidebarOpen && !mobile, 'ml-60': sidebarOpen && !mobile, 'ml-0': mobile }"
        class="transition-all duration-300">
        <div class="p-4">
            @if (Livewire::isDiscoverable($footer))
                @livewire($footer)
            @elseif (View::exists($footer))
                @include($footer)
            @else
                {{ $footer }}
            @endif
        </div>
    </footer>
</div>
