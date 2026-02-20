<?php

use Livewire\Component;

new class extends Component {
    public function with(): array
    {
        return [
            'latestEpisodes' => [
                [
                    'title' => 'Solo Leveling',
                    'episode_number' => '12. Bölüm',
                    'thumbnail' => 'https://m.media-amazon.com/images/M/MV5BMmMxNDY3MzYtYTI5ZS00NzE4LTgxYjQtNTZjYjg4YjFkM2ZjXkEyXkFqcGdeQXVyMTEzMTI1Mjk3._V1_.jpg',
                    'time' => '10 dk önce',
                    'slug' => 'solo-leveling',
                ],
                [
                    'title' => 'One Piece',
                    'episode_number' => '1100. Bölüm',
                    'thumbnail' => 'https://m.media-amazon.com/images/M/MV5BMTNjNGU4NDgtZTdkMi00OTM0LThjYWUtN2I3N2E0Nzk3M2Y1XkEyXkFqcGdeQXVyNTAyODkwMDI@._V1_.jpg',
                    'time' => '25 dk önce',
                    'slug' => 'one-piece',
                ],
                [
                    'title' => 'Jujutsu Kaisen',
                    'episode_number' => '24. Bölüm',
                    'thumbnail' => 'https://m.media-amazon.com/images/M/MV5BMTMwMDM4MzItMGMyZi00YzY3LWIxMTQtMDYyZDFjMzU0YzFmXkEyXkFqcGdeQXVyMTMzNDExODE5._V1_.jpg',
                    'time' => '1 saat önce',
                    'slug' => 'jujutsu-kaisen',
                ],
                [
                    'title' => 'Demon Slayer',
                    'episode_number' => '1. Bölüm',
                    'thumbnail' => 'https://m.media-amazon.com/images/M/MV5BZjZjNzI5MDctY2Y4YS00NmM4LTljMmItYzMwZmIwMWhiNmMyXkEyXkFqcGdeQXVyMTEzMTI1Mjk3._V1_.jpg',
                    'time' => '2 saat önce',
                    'slug' => 'demon-slayer',
                ],
                [
                    'title' => 'Bleach: TYBW',
                    'episode_number' => '13. Bölüm',
                    'thumbnail' => 'https://m.media-amazon.com/images/M/MV5BODcwMWEzZDktGRiMS00ZTMzLThkNzQtODE0NmIyZWITWY1XkEyXkFqcGdeQXVyMTEzMTI1Mjk3._V1_.jpg',
                    'time' => '3 saat önce',
                    'slug' => 'bleach-tybw',
                ],
                [
                    'title' => 'Naruto Shippuden',
                    'episode_number' => '500. Bölüm',
                    'thumbnail' => 'https://m.media-amazon.com/images/M/MV5BZmQ5NGFiNWEtMmMyMC00MDdiLTg4YjktOGY5Yzc2MDUxMTE1XkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_FMjpg_UX1000_.jpg',
                    'time' => '5 saat önce',
                    'slug' => 'naruto-shippuden',
                ],
            ],
        ];
    }
}; ?>

<div class="mt-12 mb-12">
    <div class="flex justify-between items-end mb-6">
        <div>
            <h3 class="text-2xl font-bold text-white">Son Bölümler</h3>
            <p class="mt-2 text-sm font-normal text-white/65">
                Yeni eklenen anime bölümleri
            </p>
        </div>
        
        <a href="#" class="group/link inline-flex items-center gap-1.5 rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm font-semibold text-white/90 backdrop-blur-sm transition-all duration-300 hover:border-primary-blue/70 hover:bg-primary-blue/10 hover:text-primary-blue hover:shadow-[0_0_18px_rgba(47,128,237,0.25)]">
            <span>Tümünü Gör</span>
            <x-icons.arrows.chevron-right class="h-4 w-4 transition-transform duration-300 group-hover/link:translate-x-1" />
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($latestEpisodes as $episode)
            <a href="#" class="group relative flex items-center gap-4 p-3 rounded-xl bg-[#1a1c24]/80 border border-white/5 hover:bg-[#1f2129] hover:border-primary-blue/30 transition-all duration-300 hover:shadow-lg hover:shadow-black/40">
                {{-- Thumbnail --}}
                <div class="relative w-32 h-20 shrink-0 rounded-lg overflow-hidden">
                    <img src="{{ $episode['thumbnail'] }}" alt="{{ $episode['title'] }}" loading="lazy" decoding="async"
                        fetchpriority="low"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    
                    {{-- Overlay & Play Icon --}}
                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="flex h-9 w-9 items-center justify-center rounded-full border border-white/20 bg-primary-blue/90 backdrop-blur-sm shadow-[0_0_12px_rgba(47,128,237,0.4)] transition-transform duration-300 group-hover:scale-110">
                            <x-icons.play.play class="ml-0.5 h-4 w-4 text-white drop-shadow-md" />
                        </div>
                    </div>
                </div>

                {{-- Info --}}
                <div class="flex flex-col justify-center min-w-0">
                    <h4 class="text-sm font-bold text-white leading-tight truncate group-hover:text-primary-blue transition-colors duration-300">
                        {{ $episode['title'] }}
                    </h4>
                    <p class="text-xs text-gray-300 font-medium mt-1">
                        {{ $episode['episode_number'] }}
                    </p>
                    <div class="flex items-center gap-1.5 mt-2">
                        <div class="h-1.5 w-1.5 rounded-full bg-primary-blue"></div>
                        <span class="text-[10px] font-medium text-gray-400">{{ $episode['time'] }}</span>
                    </div>
                </div>

                {{-- Arrow Icon (Mobile/Visual Cue) --}}
                <div class="ml-auto opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300">
                    <x-icons.arrows.chevron-right class="h-4 w-4 text-gray-400 transition-colors duration-300 group-hover:text-primary-blue" />
                </div>
            </a>
        @endforeach
    </div>
</div>
