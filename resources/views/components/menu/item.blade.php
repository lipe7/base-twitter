@props([
    'route',
    'icon',
    'title' => null
])

<div>
    <a href="{{ $route }}"
       class="inline-block p-2 space-x-2 bg-transparent rounded-full hover:bg-gray-200 hover:bg-opacity-10">
        <div class="flex items-center space-x-4">
            <div>
                <x-dynamic-component :component="'icons.'. $icon"/>
            </div>

            @if($title)
                <div class="pr-6 text-lg font-bold text-white truncate">{{ $title }}</div>
            @endif
        </div>
    </a>
</div>
