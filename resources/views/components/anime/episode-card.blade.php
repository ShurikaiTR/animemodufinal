@props([
    'title',
    'episode_number',
    'thumbnail',
    'time',
    'href' => '#',
    'slug' => null,
])

@php
    $link = $slug && \Illuminate\Support\Facades\Route::has('anime.show')
        ? route('anime.show', $slug)
        : $href;
@endphp

<a href="{{ $link }}" class="group relative flex items-center gap-4 p-3 rounded-xl bg-[#1a1c24]/80 border border-white/5 hover:bg-[#1f2129] hover:border-primary-blue/30 transition-all duration-300 hover:shadow-lg hover:shadow-black/40">
    {{-- Thumbnail --}}
    <div class="relative w-32 h-20 shrink-0 rounded-lg overflow-hidden">
        <img src="{{ $thumbnail }}" alt="{{ $title }}" loading="lazy" decoding="async"
            fetchpriority="low" width="128" height="80"
            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
        
        {{-- Overlay & Play Icon --}}
        <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100 group-focus-within:opacity-100">
            <div class="flex h-9 w-9 items-center justify-center rounded-full border border-white/20 bg-primary-blue/90 backdrop-blur-sm shadow-[0_0_12px_rgba(47,128,237,0.4)] transition-transform duration-300 group-hover:scale-110">
                <x-icons.play.play class="ml-0.5 h-4 w-4 text-white drop-shadow-md" aria-hidden="true" />
            </div>
        </div>
    </div>

    {{-- Info --}}
    <div class="flex flex-col justify-center min-w-0">
        <h4 class="text-sm font-bold text-white leading-tight truncate group-hover:text-primary-blue transition-colors duration-300">
            {{ $title }}
        </h4>
        <p class="text-xs text-gray-300 font-medium mt-1">
            {{ $episode_number }}
        </p>
        <div class="flex items-center gap-1.5 mt-2">
            <div class="h-1.5 w-1.5 rounded-full bg-primary-blue"></div>
            <span class="text-[10px] font-medium text-gray-400">{{ $time }}</span>
        </div>
    </div>

    {{-- Arrow Icon (Mobile/Visual Cue) --}}
    <div class="ml-auto opacity-0 -translate-x-2 transition-all duration-300 group-hover:opacity-100 group-hover:translate-x-0 group-focus-within:opacity-100 group-focus-within:translate-x-0">
        <x-icons.arrows.chevron-right class="h-4 w-4 text-gray-400 transition-colors duration-300 group-hover:text-primary-blue" aria-hidden="true" />
    </div>
</a>
