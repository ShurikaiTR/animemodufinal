<?php

namespace App\Livewire\Home\LatestEpisodes;

use Livewire\Component;

class LatestEpisodes extends Component
{
    public function render()
    {
        $latestEpisodes = [
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
        ];

        return view('livewire.home.latest-episodes.latest-episodes', [
            'latestEpisodes' => $latestEpisodes,
        ]);
    }
}
