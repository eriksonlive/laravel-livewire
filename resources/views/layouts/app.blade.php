<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased bg-[#eef2f6]">

    {{-- @if (is_string($header) && !empty($header))

    <header>
        @if (Livewire::isDiscoverable($header))
        @livewire($header)
        @elseif (View::exists($header))
        @include($header)
        @else
        {{ $header }}
        @endif
    </header>
    @endif --}}

    @if (Livewire::isDiscoverable($sidebar))
        @livewire($sidebar)
    @elseif (View::exists($sidebar))
        @include($sidebar)
    @else
        {{ $sidebar }}
    @endif

    {{-- <main>
        {!! $slot !!}
    </main> --}}

    {{-- <footer>
        @if (Livewire::isDiscoverable($footer))
        @livewire($footer)
        @elseif (View::exists($footer))
        @include($footer)
        @else
        {{ $footer }}
        @endif
    </footer> --}}

    <x-tailwind.alerts />

    @stack('modals')

    @livewireScripts

    @stack('alpine')


</body>

</html>
