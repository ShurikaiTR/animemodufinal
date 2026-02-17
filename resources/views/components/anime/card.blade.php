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
    $link = $slug ? route('anime.show', $slug) : $href;
    $genres = is_array($genre) ? implode(', ', $genre) : $genre;
@endphp

<article class="group relative w-full max-w-[220px] cursor-pointer" {{ $attributes }}>
    <a href="{{ $link }}" class="block focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary-blue focus-visible:ring-offset-4 focus-visible:ring-offset-main-bg rounded-2xl">
        {{-- Image Container --}}
        <div class="relative w-full aspect-[2/3] rounded-2xl overflow-hidden shadow-lg transition-all duration-500 ease-out group-hover:scale-95 group-hover:rounded-3xl group-hover:shadow-2xl group-hover:shadow-black/60 isolate">
            
            {{-- Main Image --}}
            <img src="{{ $poster_url }}" 
                 alt="{{ $title }} Poster" 
                 class="w-full h-full object-cover transition-all duration-500 group-hover:blur-sm group-hover:brightness-50 z-0">
            
            {{-- Badges --}}
            <div class="absolute top-3 left-3 z-10 transition-opacity duration-300 group-hover:opacity-0">
                <span class="bg-black/60 backdrop-blur-md text-white/90 text-[10px] font-bold px-2 py-1 rounded-md border border-white/10 uppercase tracking-wide shadow-sm">
                    HD
                </span>
            </div>
            
            <div class="absolute top-3 right-3 z-10 transition-opacity duration-300 group-hover:opacity-0">
                <span class="flex items-center gap-1 bg-black/60 backdrop-blur-md text-white/90 text-[10px] font-bold px-2 py-1 rounded-md border border-white/10 shadow-sm">
                    <x-icons.star.star class="w-2.5 h-2.5 text-yellow-500" aria-hidden="true" />
                    {{ $rating }}
                </span>
            </div>

            {{-- Glass Overlay --}}
            <div class="absolute inset-0 z-20 bg-[#0f1014]/60 backdrop-blur-[4px] opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col items-center justify-center text-center p-4">
                
                {{-- Play Button Component --}}
                <div class="transform translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 delay-100 ease-out">
                    <div class="w-14 h-14 bg-primary-blue rounded-full flex items-center justify-center shadow-[0_0_20px_rgba(47,128,237,0.6)] hover:scale-110 hover:shadow-[0_0_30px_rgba(47,128,237,0.8)] transition-all duration-300 ring-1 ring-white/20">
                        <x-icons.play.play class="text-white ml-1 w-6 h-6" aria-hidden="true" />
                    </div>
                </div>
                
                {{-- Details --}}
                <div class="mt-4 transform translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 delay-200">
                    <p class="text-xs font-semibold text-white mb-1 tracking-wide drop-shadow-md">{{ $year }} • {{ $genres }}</p>
                    <p class="text-[10px] text-gray-200 font-medium drop-shadow-sm">{{ $episode_count }} Bölüm</p>
                    <div class="w-8 h-[2px] bg-primary-blue/80 mx-auto mt-3 rounded-full shadow-[0_0_8px_rgba(47,128,237,0.5)]"></div>
                </div>
            </div>
        </div>

        {{-- Title Section --}}
        <div class="mt-4 px-1 transition-transform duration-300 group-hover:translate-x-1">
            <h3 class="text-white text-[15px] font-semibold leading-tight line-clamp-1 group-hover:text-primary-blue transition-colors duration-300">
                {{ $title }}
            </h3>
        </div>
    </a>
</article>
