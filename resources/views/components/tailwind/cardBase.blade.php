@props([
'decoration' => true,
'attrOne' => 'bg-gray-400',
'attrTwo' => 'bg-gray-300',
])

<div {{ $attributes->class(['w-full', 'relative', 'p-4', 'shadow-lg', 'rounded'])->merge(['class' => '']) }}>
    @if ($decoration)
    <div class="absolute w-full h-full top-0 left-0 overflow-hidden">
        <div
            class="absolute rounded-full opacity-75 w-52 h-52 top-[-50px] right-[-100px] sm:top-[-85px] sm:right-[-95px] {{ $attrOne }}">
        </div>
        <div
            class="absolute rounded-full opacity-50 w-52 h-52 top-[-100px] right-[-50px] sm:top-[-125px] sm:right-[-15px] {{ $attrTwo }}">
        </div>
    </div>
    @endif
    {{ $slot }}
</div>
