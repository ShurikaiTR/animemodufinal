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
            <p class="text-sm text-muted-text mt-2 font-medium">
                Kütüphanemize yeni katılan seriler
            </p>
        </div>

        <a href="#" class="text-sm font-semibold text-white hover:text-primary-blue transition-colors">
            Tümünü Gör
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
