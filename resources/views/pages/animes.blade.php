<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new #[Layout('layouts.app')] class extends Component {
    public string $activeLetter = '#';
    public string $viewMode = 'grid';

    // Mock data for the grid
    public function with(): array
    {
        return [
            'animes' => [
                [
                    'title' => 'Jujutsu Kaisen',
                    'poster' => 'https://image.tmdb.org/t/p/w500/9CsTtHlvErQ93jvIWIjs06G0Abe.jpg',
                    'slug' => 'jujutsu-kaisen',
                    'rating' => '9.8',
                    'year' => '2020',
                    'episode_count' => '47',
                    'genre' => 'Aksiyon, Doğaüstü, Shounen',
                ],
                [
                    'title' => 'Demon Slayer',
                    'poster' => 'https://image.tmdb.org/t/p/w500/xUfRZu2mi8jH6SzQEJNS61NCbRs.jpg',
                    'slug' => 'demon-slayer',
                    'rating' => '9.5',
                    'year' => '2019',
                    'episode_count' => '55',
                    'genre' => 'Aksiyon, Tarihi, Shounen',
                ],
                [
                    'title' => 'Attack on Titan',
                    'poster' => 'https://image.tmdb.org/t/p/w500/8tZYtuWezpA9A4rYlqAEkL8Z0c6.jpg',
                    'slug' => 'attack-on-titan',
                    'rating' => '9.9',
                    'year' => '2013',
                    'episode_count' => '89',
                    'genre' => 'Aksiyon, Gizem, Dram',
                ],
                [
                    'title' => 'Solo Leveling',
                    'poster' => 'https://image.tmdb.org/t/p/w500/qXwnfAtaP0B82s4E58y7gI1K2pM.jpg',
                    'slug' => 'solo-leveling',
                    'rating' => '9.7',
                    'year' => '2024',
                    'episode_count' => '12',
                    'genre' => 'Aksiyon, Fantezi',
                ],
                [
                    'title' => 'Chainsaw Man',
                    'poster' => 'https://image.tmdb.org/t/p/w500/npdB6eFzizki0WaZ1OvKcJrWe97.jpg',
                    'slug' => 'chainsaw-man',
                    'rating' => '9.6',
                    'year' => '2022',
                    'episode_count' => '12',
                    'genre' => 'Aksiyon, Doğaüstü',
                ],
                [
                    'title' => 'One Piece',
                    'poster' => 'https://image.tmdb.org/t/p/w500/fcXdJpmOcWEwwHN8ww20XzKqFpG.jpg',
                    'slug' => 'one-piece',
                    'rating' => '9.4',
                    'year' => '1999',
                    'episode_count' => '1100',
                    'genre' => 'Macera, Aksiyon',
                ],
                [
                    'title' => 'Naruto Shippuden',
                    'poster' => 'https://image.tmdb.org/t/p/w500/zAYRe2bJxpWTVrwwmBc00VFkAfV.jpg',
                    'slug' => 'naruto',
                    'rating' => '9.3',
                    'year' => '2007',
                    'episode_count' => '500',
                    'genre' => 'Aksiyon, Macera',
                ],
                [
                    'title' => 'Bleach: TYBW',
                    'poster' => 'https://image.tmdb.org/t/p/w500/eN8C1llp23KxaE6dEDq1c3t8bBv.jpg',
                    'slug' => 'bleach',
                    'rating' => '9.6',
                    'year' => '2022',
                    'episode_count' => '26',
                    'genre' => 'Aksiyon, Doğaüstü',
                ],
                [
                    'title' => 'Frieren',
                    'poster' => 'https://image.tmdb.org/t/p/w500/dqxALXq3H1bN3Wq5g8M5yB9nN6m.jpg',
                    'slug' => 'frieren',
                    'rating' => '9.8',
                    'year' => '2023',
                    'episode_count' => '28',
                    'genre' => 'Macera, Fantezi',
                ]
            ]
        ];
    }

    public function setLetter($letter)
    {
        $this->activeLetter = $letter;
    }

    public function setViewMode($mode)
    {
        $this->viewMode = $mode;
    }
};
?>

<div class="min-h-screen overflow-x-hidden bg-main-bg text-white font-sans" x-data="{ sidebarOpen: false }"
    x-effect="document.body.classList.toggle('overflow-hidden', sidebarOpen && window.innerWidth < 1024)"
    @open-sidebar.window="sidebarOpen = true" @keydown.escape.window="sidebarOpen = false">

    <!-- Mobile Sidebar Overlay -->
    <div x-show="sidebarOpen" x-cloak class="fixed inset-0 z-50 lg:hidden" role="dialog" aria-modal="true">
        <div x-show="sidebarOpen" x-transition:enter="transition-opacity ease-linear duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black/80 backdrop-blur-sm"
            @click="sidebarOpen = false"></div>

        <div x-show="sidebarOpen" x-transition:enter="transition ease-in-out duration-300 transform"
            x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full" class="relative flex w-full max-w-xs flex-1 h-full">

            <livewire:layout.sidebar :is-mobile="true" />
        </div>
    </div>

    <div class="flex gap-2 relative">
        <!-- Sidebar -->
        <div class="hidden lg:block p-6 z-20">
            <livewire:layout.sidebar />
        </div>


        <!-- Main Content -->
        <main class="flex-1 flex flex-col relative z-10">
            <!-- Navbar -->
            <livewire:layout.navbar />

            <!-- Content Area -->
            <div class="pb-24 px-4 md:px-8 md:pb-10">
                <div class="pt-0 pb-10">
                    {{-- Page Header & View Toggle --}}
                    <div class="mb-6 md:mb-8 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                        <h1 class="text-2xl font-bold tracking-wider text-white">
                            Tüm Animeler
                        </h1>

                        {{-- View Toggle --}}
                        <div
                            class="flex shrink-0 self-start sm:self-auto items-center justify-center gap-1 rounded-xl border border-white/5 bg-dark-bg/50 p-1 backdrop-blur-xl">
                            <button wire:click="setViewMode('grid')" title="Izgara Görünümü"
                                class="flex h-8 w-8 md:h-9 md:w-9 items-center justify-center rounded-lg transition-all duration-300 @if($viewMode === 'grid') bg-primary-blue text-white shadow-[0_0_15px_rgba(47,128,237,0.4)] @else text-gray-400 hover:bg-white/10 hover:text-white @endif">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M4 4h6v6H4V4zm10 0h6v6h-6V4zM4 14h6v6H4v-6zm10 0h6v6h-6v-6z" />
                                </svg>
                            </button>
                            <button wire:click="setViewMode('list')" title="Liste Görünümü"
                                class="flex h-8 w-8 md:h-9 md:w-9 items-center justify-center rounded-lg transition-all duration-300 @if($viewMode === 'list') bg-primary-blue text-white shadow-[0_0_15px_rgba(47,128,237,0.4)] @else text-gray-400 hover:bg-white/10 hover:text-white @endif">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M4 6h2v2H4V6zm0 5h2v2H4v-2zm0 5h2v2H4v-2zm4-10h12v2H8V6zm0 5h12v2H8v-2zm0 5h12v2H8v-2z" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    {{-- A-Z Filter Bar --}}
                    <div class="mb-8 md:mb-10">
                        <div class="scrollbar-hide w-full overflow-x-auto overflow-y-hidden pb-2">
                            <div
                                class="flex min-w-max items-center gap-1 rounded-2xl border border-white/5 bg-dark-bg/50 p-1 backdrop-blur-xl md:gap-1.5 md:p-1.5 w-max">
                                @php
                                    $letters = array_merge(['#'], range('A', 'Z'));
                                @endphp

                                @foreach ($letters as $letter)
                                    <button wire:click="setLetter('{{ $letter }}')" class="flex h-7 w-7 items-center justify-center rounded-lg text-[11px] font-bold transition-all duration-300 md:h-8 md:w-8 md:text-xs
                                                @if($activeLetter === $letter) 
                                                    bg-primary-blue text-white shadow-[0_0_15px_rgba(47,128,237,0.4)]
                                                @else 
                                                    text-gray-400 hover:bg-white/10 hover:text-white
                                                @endif">
                                        {{ $letter }}
                                    </button>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- Anime View --}}
                    <div>
                        @if($viewMode === 'grid')
                            <div
                                class="mt-4 grid grid-cols-2 gap-4 sm:grid-cols-3 md:mt-6 md:gap-6 lg:grid-cols-[repeat(auto-fill,minmax(190px,1fr))]">
                                @foreach ($animes as $anime)
                                    <x-anime.card wire:key="anime-grid-{{ $anime['slug'] }}" :title="$anime['title']"
                                        :poster_url="$anime['poster']" :rating="$anime['rating']" :slug="$anime['slug']"
                                        :year="$anime['year']" :episode_count="$anime['episode_count']"
                                        :genre="$anime['genre']" />
                                @endforeach
                            </div>
                        @else
                            <div class="mt-4 flex flex-col gap-3 md:mt-6 md:gap-4">
                                @foreach ($animes as $anime)
                                    <x-anime.list-card wire:key="anime-list-{{ $anime['slug'] }}" :title="$anime['title']"
                                        :poster_url="$anime['poster']" :rating="$anime['rating']" :slug="$anime['slug']"
                                        :year="$anime['year']" :episode_count="$anime['episode_count']"
                                        :genre="$anime['genre']" />
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="mt-auto">
                <x-layout.footer />
            </div>
        </main>
    </div>
</div>