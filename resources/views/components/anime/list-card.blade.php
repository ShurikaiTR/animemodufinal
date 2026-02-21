@props([
    'title',
    'poster_url',
    'href' => '#',
    'slug' => null,
    'rating' => '0.0',
    'year' => 'TBA',
    'episode_count' => '?',
    'genre' => 'Unknown',
])

@php
    $link = $slug && \Illuminate\Support\Facades\Route::has('anime.show')
        ? route('anime.show', $slug)
        : $href;
@endphp

<article class="group relative w-full cursor-pointer bg-dark-bg/50 border border-white/5 hover:border-white/10 rounded-2xl p-3 sm:p-4 transition-all duration-300" {{ $attributes }}>
    <a href="{{ $link }}" class="flex gap-4 sm:gap-6 items-center focus-visible:outline-hidden focus-visible:ring-2 focus-visible:ring-primary-blue rounded-xl sm:rounded-2xl h-full">
        {{-- Image Container --}}
        <div class="relative w-24 sm:w-32 aspect-[2/3] shrink-0 rounded-xl overflow-hidden shadow-lg isolate">
            {{-- Main Image --}}
            <img src="{{ $poster_url }}"
                 alt="{{ $title }} Poster"
                 loading="lazy"
                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 group-hover:blur-xs group-hover:brightness-50 z-0">

            {{-- Glass Overlay & Play Button --}}
            <div class="absolute inset-0 z-20 bg-[#0f1014]/40 backdrop-blur-[2px] opacity-0 transition-opacity duration-300 group-hover:opacity-100 flex items-center justify-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-primary-blue/90 backdrop-blur-sm rounded-full flex items-center justify-center shadow-[0_0_15px_rgba(47,128,237,0.5)] transform scale-50 opacity-0 transition-all duration-300 group-hover:scale-100 group-hover:opacity-100">
                    <x-icons.play.play class="text-white ml-1 w-5 h-5 sm:w-6 sm:h-6" aria-hidden="true" />
                </div>
            </div>
        </div>

        {{-- Details Container --}}
        <div class="flex-1 min-w-0 flex flex-col justify-center py-1 sm:py-2">
            <h3 class="text-white font-semibold text-base sm:text-lg lg:text-xl leading-tight line-clamp-1 group-hover:text-primary-blue transition-colors duration-300 mb-2 sm:mb-3">
                {{ $title }}
            </h3>
            
            <div class="flex flex-wrap items-center gap-2 sm:gap-4 mb-2 sm:mb-3 text-xs sm:text-sm text-gray-300">
                <span class="flex items-center gap-1 sm:gap-1.5 bg-black/40 px-2 py-1 rounded-md">
                    <x-icons.star.star class="w-3.5 h-3.5 text-primary-blue" aria-hidden="true" />
                    <span class="font-bold text-white/90">{{ $rating }}</span>
                </span>
                
                <span class="flex items-center gap-1.5 bg-black/40 px-2 py-1 rounded-md font-medium">
                    {{ $year }}
                </span>
                
                <span class="flex items-center gap-1.5 bg-black/40 px-2 py-1 rounded-md font-medium text-gray-400">
                    {{ $episode_count }} Bölüm
                </span>
            </div>
            
            <div class="flex items-center gap-1.5">
                <span class="text-xs sm:text-sm font-medium text-gray-400 line-clamp-1">
                    {{ $genre }}
                </span>
            </div>
        </div>
        
        {{-- Right Arrow or Action (Desktop only optional) --}}
        <div class="hidden sm:flex shrink-0 w-12 h-12 items-center justify-center text-gray-500 group-hover:text-primary-blue group-hover:translate-x-1 transition-all duration-300 mr-2">
            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </div>
    </a>
</article>
