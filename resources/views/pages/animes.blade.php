<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new #[Layout('layouts::app')] class extends Component {
    protected const ALLOWED_VIEW_MODES = ['grid', 'list'];
    protected const ALLOWED_SORTS = ['latest', 'popularity', 'alphabetical_asc', 'alphabetical_desc'];

    public string $activeLetter = '#';
    public string $viewMode = 'grid';
    public string $sortBy = 'latest';
    public int $visibleAnimeCount = 6;
    public int $animeBatchSize = 6;

    public function with(): array
    {
        $animes = $this->filteredAnimes();

        $visibleAnimes = array_slice($animes, 0, $this->visibleAnimeCount);

        return [
            'animes' => $visibleAnimes,
            'hasMoreAnimes' => count($animes) > count($visibleAnimes),
            'letters' => $this->alphabetLetters(),
            'sortOptions' => $this->sortOptions(),
        ];
    }

    protected function filteredAnimes(): array
    {
        $animes = $this->allAnimes();

        if ($this->sortBy === 'popularity') {
            usort($animes, fn(array $left, array $right): int => (float) $right['rating'] <=> (float) $left['rating']);
        }

        if ($this->sortBy === 'latest') {
            usort($animes, fn(array $left, array $right): int => (int) $right['year'] <=> (int) $left['year']);
        }

        if ($this->sortBy === 'alphabetical_asc') {
            usort($animes, fn(array $left, array $right): int => strcasecmp($left['title'], $right['title']));
        }

        if ($this->sortBy === 'alphabetical_desc') {
            usort($animes, fn(array $left, array $right): int => strcasecmp($right['title'], $left['title']));
        }

        if ($this->isAlphabeticalSort() && $this->activeLetter !== '#') {
            $animes = array_values(array_filter($animes, function (array $anime): bool {
                return strtoupper(substr($anime['title'], 0, 1)) === $this->activeLetter;
            }));
        }

        return $animes;
    }

    protected function allAnimes(): array
    {
        return [
            [
                'title' => 'Jujutsu Kaisen',
                'poster' => 'https://image.tmdb.org/t/p/w500/9CsTtHlvErQ93jvIWIjs06G0Abe.jpg',
                'slug' => 'jujutsu-kaisen',
                'rating' => '9.8',
                'year' => '2020',
                'episode_count' => '47',
                'genre' => 'Aksiyon, Doğaüstü, Shounen',
                'description' => 'Yuji Itadori, lanetli bir nesneyle temas ettikten sonra büyücüler dünyasına sürüklenir ve güçlü bir tehdidi içinde taşımaya başlar.',
            ],
            [
                'title' => 'Demon Slayer',
                'poster' => 'https://image.tmdb.org/t/p/w500/xUfRZu2mi8jH6SzQEJNS61NCbRs.jpg',
                'slug' => 'demon-slayer',
                'rating' => '9.5',
                'year' => '2019',
                'episode_count' => '55',
                'genre' => 'Aksiyon, Tarihi, Shounen',
                'description' => 'Tanjiro, ailesini yok eden iblislerin peşine düşerken kız kardeşini kurtarmak için ölümcül bir yolculuğa çıkar.',
            ],
            [
                'title' => 'Attack on Titan',
                'poster' => 'https://image.tmdb.org/t/p/w500/8tZYtuWezpA9A4rYlqAEkL8Z0c6.jpg',
                'slug' => 'attack-on-titan',
                'rating' => '9.9',
                'year' => '2013',
                'episode_count' => '89',
                'genre' => 'Aksiyon, Gizem, Dram',
                'description' => 'Duvarların ardındaki gerçekler ortaya çıktıkça insanlığın titanlara karşı savaşı çok daha karanlık bir hale gelir.',
            ],
            [
                'title' => 'Solo Leveling',
                'poster' => 'https://image.tmdb.org/t/p/w500/qXwnfAtaP0B82s4E58y7gI1K2pM.jpg',
                'slug' => 'solo-leveling',
                'rating' => '9.7',
                'year' => '2024',
                'episode_count' => '12',
                'genre' => 'Aksiyon, Fantezi',
                'description' => 'En zayıf avcı olarak görülen Jinwoo, gizemli bir sistem sayesinde her savaşta güçlenmeye başlar.',
            ],
            [
                'title' => 'Chainsaw Man',
                'poster' => 'https://image.tmdb.org/t/p/w500/npdB6eFzizki0WaZ1OvKcJrWe97.jpg',
                'slug' => 'chainsaw-man',
                'rating' => '9.6',
                'year' => '2022',
                'episode_count' => '12',
                'genre' => 'Aksiyon, Doğaüstü',
                'description' => 'Denji, şeytanlarla dolu bir dünyada hayatta kalmaya çalışırken beklenmedik güçlerle avcıların arasına katılır.',
            ],
            [
                'title' => 'One Piece',
                'poster' => 'https://image.tmdb.org/t/p/w500/fcXdJpmOcWEwwHN8ww20XzKqFpG.jpg',
                'slug' => 'one-piece',
                'rating' => '9.4',
                'year' => '1999',
                'episode_count' => '1100',
                'genre' => 'Macera, Aksiyon',
                'description' => 'Luffy ve tayfası, Grand Line boyunca efsanevi hazineye ulaşmak için sayısız rakip ve tehlikeyle karşılaşır.',
            ],
            [
                'title' => 'Naruto Shippuden',
                'poster' => 'https://image.tmdb.org/t/p/w500/zAYRe2bJxpWTVrwwmBc00VFkAfV.jpg',
                'slug' => 'naruto',
                'rating' => '9.3',
                'year' => '2007',
                'episode_count' => '500',
                'genre' => 'Aksiyon, Macera',
                'description' => 'Naruto, ninja dünyasındaki savaşların ortasında dostlarını koruyup kaderini değiştirmeye çalışır.',
            ],
            [
                'title' => 'Bleach: TYBW',
                'poster' => 'https://image.tmdb.org/t/p/w500/eN8C1llp23KxaE6dEDq1c3t8bBv.jpg',
                'slug' => 'bleach',
                'rating' => '9.6',
                'year' => '2022',
                'episode_count' => '26',
                'genre' => 'Aksiyon, Doğaüstü',
                'description' => 'Ichigo ve müttefikleri, Soul Society’yi tehdit eden Quincy saldırısına karşı yeni bir savaşa girer.',
            ],
            [
                'title' => 'Frieren',
                'poster' => 'https://image.tmdb.org/t/p/w500/dqxALXq3H1bN3Wq5g8M5yB9nN6m.jpg',
                'slug' => 'frieren',
                'rating' => '9.8',
                'year' => '2023',
                'episode_count' => '28',
                'genre' => 'Macera, Fantezi',
                'description' => 'Yüzyıllar yaşayan elf büyücü Frieren, geçmiş yolculuğunun anlamını geç de olsa keşfetmeye başlar.',
            ],
        ];
    }

    public function setLetter(string $letter): void
    {
        $letter = strtoupper($letter);

        if ($letter !== '#' && !preg_match('/^[A-Z]$/', $letter)) {
            return;
        }

        $this->activeLetter = $letter;
        $this->resetInfiniteScroll();
    }

    public function setViewMode(string $mode): void
    {
        if (!in_array($mode, self::ALLOWED_VIEW_MODES, true)) {
            return;
        }

        $this->viewMode = $mode;
    }

    public function setSort(string $sort): void
    {
        if (!in_array($sort, self::ALLOWED_SORTS, true)) {
            return;
        }

        $this->sortBy = $sort;

        if (!$this->isAlphabeticalSort()) {
            $this->activeLetter = '#';
        }

        $this->resetInfiniteScroll();
    }

    public function isAlphabeticalSort(): bool
    {
        return in_array($this->sortBy, ['alphabetical_asc', 'alphabetical_desc'], true);
    }

    public function sortLabel(): string
    {
        return match ($this->sortBy) {
            'latest' => 'Yeni',
            'alphabetical_asc' => 'Alfabetik (A-Z)',
            'alphabetical_desc' => 'Alfabetik (Z-A)',
            default => 'Popülerlik',
        };
    }

    protected function sortOptions(): array
    {
        return [
            ['value' => 'latest', 'label' => 'Yeni'],
            ['value' => 'popularity', 'label' => 'Popülerlik'],
            ['value' => 'alphabetical_asc', 'label' => 'Alfabetik (A-Z)'],
            ['value' => 'alphabetical_desc', 'label' => 'Alfabetik (Z-A)'],
        ];
    }

    protected function alphabetLetters(): array
    {
        return array_merge(['#'], range('A', 'Z'));
    }

    public function loadMoreAnimes(): void
    {
        $totalCount = count($this->filteredAnimes());

        if ($this->visibleAnimeCount >= $totalCount) {
            return;
        }

        $this->visibleAnimeCount = min($this->visibleAnimeCount + $this->animeBatchSize, $totalCount);
    }

    protected function resetInfiniteScroll(): void
    {
        $this->visibleAnimeCount = $this->animeBatchSize;
    }
};
?>

<div class="mx-auto w-full max-w-7xl">
    @include('pages.animes.partials.header-controls')

    @include('pages.animes.partials.filter-bar')

    @if($this->isAlphabeticalSort())
        @include('pages.animes.partials.alpha-filter-bar')
    @endif

    @include('pages.animes.partials.results')
</div>