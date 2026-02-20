<?php

use Livewire\Component;

new class extends Component {
    public function with(): array
    {
        return [
            'latestAnimes' => [
                [
                    'title' => 'Solaris: The Last Light',
                    'poster_url' => 'https://m.media-amazon.com/images/M/MV5BNGY4MTg3NzgtMmFkZi00NTg5LWExMmEtMWI3YzI1ODdmMWQ1XkEyXkFqcGdeQXVyMjQwMDg0Ng@@._V1_.jpg',
                    'rating' => '9.8',
                    'year' => 2024,
                    'genre' => 'Aksiyon',
                    'episode_count' => 24,
                    'slug' => 'solaris-the-last-light',
                ],
                [
                    'title' => 'Naruto Shippuden',
                    'poster_url' => 'https://m.media-amazon.com/images/M/MV5BZmQ5NGFiNWEtMmMyMC00MDdiLTg4YjktOGY5Yzc2MDUxMTE1XkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_FMjpg_UX1000_.jpg',
                    'rating' => '9.2',
                    'year' => 2023,
                    'genre' => 'Fantastik',
                    'episode_count' => 12,
                    'slug' => 'naruto-shippuden',
                ],
                [
                    'title' => 'Jujutsu Kaisen',
                    'poster_url' => 'https://m.media-amazon.com/images/M/MV5BMTMwMDM4MzItMGMyZi00YzY3LWIxMTQtMDYyZDFjMzU0YzFmXkEyXkFqcGdeQXVyMTMzNDExODE5._V1_.jpg',
                    'rating' => '9.5',
                    'year' => 2024,
                    'genre' => 'Aksiyon, Doğaüstü',
                    'episode_count' => 24,
                    'slug' => 'jujutsu-kaisen',
                ],
                [
                    'title' => 'One Piece',
                    'poster_url' => 'https://m.media-amazon.com/images/M/MV5BMTNjNGU4NDgtZTdkMi00OTM0LThjYWUtN2I3N2E0Nzk3M2Y1XkEyXkFqcGdeQXVyNTAyODkwMDI@._V1_.jpg',
                    'rating' => '9.0',
                    'year' => 2024,
                    'genre' => 'Macera',
                    'episode_count' => 1100,
                    'slug' => 'one-piece',
                ],
            ],
        ];
    }
}; ?>

<div class="mt-4 mb-24 md:mb-0">
    <div class="flex justify-between items-end mb-8">
        <div>
            <h3 class="text-2xl font-bold text-white">Eklenen Animeler</h3>
            <p class="mt-2 text-sm font-normal text-white/65">
                Kütüphanemize yeni katılan seriler
            </p>
        </div>

        <a href="#"
            class="group/link inline-flex items-center gap-1.5 rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm font-semibold text-white/90 backdrop-blur-sm transition-all duration-300 hover:border-primary-blue/70 hover:bg-primary-blue/10 hover:text-primary-blue hover:shadow-[0_0_18px_rgba(47,128,237,0.25)]">
            <span>Tümünü Gör</span>
            <x-icons.arrows.chevron-right
                class="h-4 w-4 transition-transform duration-300 group-hover/link:translate-x-1" />
        </a>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-[repeat(auto-fill,minmax(190px,1fr))] gap-4 md:gap-6">
        @foreach ($latestAnimes as $anime)
            <div wire:key="latest-anime-{{ $anime['slug'] }}">
                <x-anime.card :title="$anime['title']" :poster_url="$anime['poster_url']" :rating="$anime['rating']"
                    :year="$anime['year']" :genre="$anime['genre']" :episode_count="$anime['episode_count']"
                    :slug="$anime['slug']" href="#" />
            </div>
        @endforeach
    </div>
</div>
