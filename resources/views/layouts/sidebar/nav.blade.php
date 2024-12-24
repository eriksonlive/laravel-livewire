@props([
    'menu' => [],
])
<nav class="flex-1 p-3">
    @foreach ($menu as $nav)
        @if ($nav['type'] === 'group')
            <ul>
                <div class="border-b-[1px] py-2">


                    <div class="flex flex-col my-1 transition-all duration-100 ease-in-out overflow-y-hidden"
                        :class="{
                            'opacity-0 max-h-0 hidden': !sidebarOpen && !mobile,
                            'opacity-100 max-h-full': sidebarOpen || mobile
                        }">
                        <span class="text-gray-600">{{ __($nav['title'] ?? '') }}</span>
                        <span class="text-gray-400 text-[13px]">{{ __($nav['caption'] ?? '') }}</span>
                    </div>


                    @foreach ($nav['children'] as $child)
                        @if ($child['type'] === 'collapse')
                            <li class="group cursor-pointer text-gray-500 hover:text-blue-700" x-data="{ subMenuOpen: false }"
                                @click="subMenuOpen = !subMenuOpen">
                                <span class="relative flex items-center gap-2 py-2 hover:bg-gray-100"
                                    :class="{
                                        'justify-center': !sidebarOpen && !mobile,
                                        'px-5': sidebarOpen || !mobile,
                                        'bg-blue-100 text-blue-700': subMenuOpen,
                                        'hover:bg-gray-100': !subMenuOpen
                                    }">
                                    <!-- Ícono -->
                                    <div class="flex w-8 h-8">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 8.25V18a2.25 2.25 0 0 0 2.25 2.25h13.5A2.25 2.25 0 0 0 21 18V8.25m-18 0V6a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 6v2.25m-18 0h18M5.25 6h.008v.008H5.25V6ZM7.5 6h.008v.008H7.5V6Zm2.25 0h.008v.008H9.75V6Z" />
                                        </svg>
                                    </div>

                                    <!-- Texto -->
                                    <span x-show="sidebarOpen || mobile" class="whitespace-nowrap text-[14px]"
                                        x-transition:enter="transition-opacity ease-out duration-500"
                                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                        x-transition:leave="transition-opacity ease-in duration-900"
                                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                                        {{ $child['title'] }}
                                    </span>

                                    <div class="absolute right-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="size-6 mr-3" :class="{ 'hidden': subMenuOpen || !sidebarOpen }">
                                            <path fill-rule="evenodd"
                                                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                                clip-rule="evenodd" />
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="size-6 mr-3" :class="{ 'hidden': !subMenuOpen || !sidebarOpen }">
                                            <path fill-rule="evenodd"
                                                d="M11.47 7.72a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 1 1-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 0 1-1.06-1.06l7.5-7.5Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>

                                </span>

                                <ul class="transition-all duration-500 ease-in-out overflow-hidden max-h-0 border-l-2"
                                    :class="{
                                        'max-h-0': !subMenuOpen,
                                        'max-h-screen': subMenuOpen
                                    }">
                                    <div class="py-2">
                                        @foreach ($child['children'] as $subChild)
                                            <li class="group">
                                                <a href="{{ $subChild['url'] ?? '/' }}" wire:navigate.hover
                                                    wire:current="text-red-500"
                                                    class="flex items-center justify-center gap-2 py-2 hover:bg-gray-100"
                                                    :class="{
                                                        'px-5': sidebarOpen || !mobile
                                                    }">
                                                    <!-- Ícono -->
                                                    <div class="flex w-8 h-8">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-6 text-gray-400">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M3 8.25V18a2.25 2.25 0 0 0 2.25 2.25h13.5A2.25 2.25 0 0 0 21 18V8.25m-18 0V6a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 6v2.25m-18 0h18M5.25 6h.008v.008H5.25V6ZM7.5 6h.008v.008H7.5V6Zm2.25 0h.008v.008H9.75V6Z" />
                                                        </svg>
                                                    </div>

                                                    <!-- Texto -->
                                                    <span x-show="sidebarOpen || mobile"
                                                        class="whitespace-nowrap text-gray-500 text-[14px]"
                                                        x-transition:enter="transition-opacity ease-out duration-500"
                                                        x-transition:enter-start="opacity-0"
                                                        x-transition:enter-end="opacity-100"
                                                        x-transition:leave="transition-opacity ease-in duration-900"
                                                        x-transition:leave-start="opacity-100"
                                                        x-transition:leave-end="opacity-0">
                                                        {{ __($subChild['title'] ?? '') }}
                                                    </span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </div>
                                </ul>
                            </li>
                        @else
                            <li class="item cursor-pointer text-gray-500 hover:text-blue-700">
                                <a href="{{ route($child['url']) }}" wire:navigate.hover wire:current="text-red-500"
                                    class="flex items-center gap-2 py-2 hover:bg-gray-100"
                                    :class="{
                                        'justify-center': !sidebarOpen && !mobile,
                                        'px-5': sidebarOpen || !mobile
                                    }">
                                    <!-- Ícono -->
                                    <div class="flex w-8 h-8">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 8.25V18a2.25 2.25 0 0 0 2.25 2.25h13.5A2.25 2.25 0 0 0 21 18V8.25m-18 0V6a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 6v2.25m-18 0h18M5.25 6h.008v.008H5.25V6ZM7.5 6h.008v.008H7.5V6Zm2.25 0h.008v.008H9.75V6Z" />
                                        </svg>
                                    </div>

                                    <!-- Texto -->
                                    <span x-show="sidebarOpen || mobile" class="whitespace-nowrap text-[14px]"
                                        x-transition:enter="transition-opacity ease-out duration-500"
                                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                        x-transition:leave="transition-opacity ease-in duration-900"
                                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                                        {{ __($child['title'] ?? '') }}
                                    </span>
                                </a>
                            </li>
                        @endif
                    @endforeach

                </div>

            </ul>
        @endif
    @endforeach
</nav>
