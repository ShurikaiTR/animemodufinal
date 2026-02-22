<?php

use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts::app')] class extends Component {
    public string $selectedDay = '';

    public function mount()
    {
        $this->selectedDay = strtolower(date('l'));
    }

    public function selectDay(string $day)
    {
        $this->selectedDay = $day;
    }

    public function getDays(): array
    {
        return [
            'monday' => 'Pazartesi',
            'tuesday' => 'Salı',
            'wednesday' => 'Çarşamba',
            'thursday' => 'Perşembe',
            'friday' => 'Cuma',
            'saturday' => 'Cumartesi',
            'sunday' => 'Pazar',
        ];
    }

    public function getAnimesForSelectedDay(): array
    {
        // Mock data for the calendar
        $allAnimes = [
            'monday' => [
                [
                    'title' => 'Bleach: Thousand-Year Blood War',
                    'poster' => 'https://image.tmdb.org/t/p/w500/eN8C1llp23KxaE6dEDq1c3t8bBv.jpg',
                    'slug' => 'bleach',
                    'rating' => '9.6',
                    'year' => '2022',
                    'episode_count' => '26',
                    'genre' => 'Aksiyon, Doğaüstü',
                    'time' => '17:30',
                ],
                [
                    'title' => 'Vampire Dormitory',
                    'poster' => 'https://image.tmdb.org/t/p/w500/A31lX9l30Bgbq1W4L376l8gGvNl.jpg',
                    'slug' => 'vampire',
                    'rating' => '7.2',
                    'year' => '2024',
                    'episode_count' => '12',
                    'genre' => 'Romantizm, Doğaüstü',
                    'time' => '19:00',
                ]
            ],
            'tuesday' => [
                [
                    'title' => 'Tower of God S2',
                    'poster' => 'https://image.tmdb.org/t/p/w500/1pQ055o9n8Z15y8uHhF0J2z1lV0.jpg',
                    'slug' => 'tog-s2',
                    'rating' => '8.4',
                    'year' => '2024',
                    'episode_count' => '13',
                    'genre' => 'Aksiyon, Gizem',
                    'time' => '16:00',
                ]
            ],
            'wednesday' => [
                [
                    'title' => 'Oshi no Ko S2',
                    'poster' => 'https://image.tmdb.org/t/p/w500/jGBMvNOf2o27WpT58m6z4gR668F.jpg',
                    'slug' => 'oshi-no-ko-s2',
                    'rating' => '9.1',
                    'year' => '2024',
                    'episode_count' => '13',
                    'genre' => 'Dram, Gizem',
                    'time' => '15:30',
                ],
            ],
            'thursday' => [
                [
                    'title' => 'Suicide Squad ISEKAI',
                    'poster' => 'https://image.tmdb.org/t/p/w500/40R4241o21e17x19X665P16v50j.jpg',
                    'slug' => 'suicide-squad',
                    'rating' => '7.8',
                    'year' => '2024',
                    'episode_count' => '10',
                    'genre' => 'Aksiyon, Fantezi',
                    'time' => '18:00',
                ],
                [
                    'title' => 'Jujutsu Kaisen',
                    'poster' => 'https://image.tmdb.org/t/p/w500/9CsTtHlvErQ93jvIWIjs06G0Abe.jpg',
                    'slug' => 'jujutsu-kaisen',
                    'rating' => '9.8',
                    'year' => '2020',
                    'episode_count' => '47',
                    'genre' => 'Aksiyon, Shounen',
                    'time' => '20:00',
                ],
            ],
            'friday' => [
                [
                    'title' => 'Frieren',
                    'poster' => 'https://image.tmdb.org/t/p/w500/dqxALXq3H1bN3Wq5g8M5yB9nN6m.jpg',
                    'slug' => 'frieren',
                    'rating' => '9.8',
                    'year' => '2023',
                    'episode_count' => '28',
                    'genre' => 'Macera, Fantezi',
                    'time' => '22:00',
                ],
            ],
            'saturday' => [
                [
                    'title' => 'Solo Leveling',
                    'poster' => 'https://image.tmdb.org/t/p/w500/qXwnfAtaP0B82s4E58y7gI1K2pM.jpg',
                    'slug' => 'solo-leveling',
                    'rating' => '9.7',
                    'year' => '2024',
                    'episode_count' => '12',
                    'genre' => 'Aksiyon, Fantezi',
                    'time' => '14:00',
                ],
                [
                    'title' => 'Demon Slayer',
                    'poster' => 'https://image.tmdb.org/t/p/w500/xUfRZu2mi8jH6SzQEJNS61NCbRs.jpg',
                    'slug' => 'demon-slayer',
                    'rating' => '9.5',
                    'year' => '2019',
                    'episode_count' => '55',
                    'genre' => 'Aksiyon, Shounen',
                    'time' => '18:45',
                ],
                [
                    'title' => 'Wind Breaker',
                    'poster' => 'https://image.tmdb.org/t/p/w500/7aB20lIf8H6HqI1n77uK3j3Z3X0.jpg',
                    'slug' => 'wind-breaker',
                    'rating' => '8.6',
                    'year' => '2024',
                    'episode_count' => '13',
                    'genre' => 'Aksiyon, Okul',
                    'time' => '21:15',
                ],
            ],
            'sunday' => [
                [
                    'title' => 'One Piece',
                    'poster' => 'https://image.tmdb.org/t/p/w500/fcXdJpmOcWEwwHN8ww20XzKqFpG.jpg',
                    'slug' => 'one-piece',
                    'rating' => '9.4',
                    'year' => '1999',
                    'episode_count' => '1100',
                    'genre' => 'Macera, Aksiyon',
                    'time' => '09:30',
                ],
                [
                    'title' => 'Mushoku Tensei S2',
                    'poster' => 'https://image.tmdb.org/t/p/w500/2L2mE1j0c8v0n4q5N41M61f5L9Z.jpg',
                    'slug' => 'mushoku-tensei',
                    'rating' => '8.9',
                    'year' => '2024',
                    'episode_count' => '24',
                    'genre' => 'Fantezi, Isekai',
                    'time' => '16:00',
                ],
            ],
        ];

        return $allAnimes[$this->selectedDay] ?? [];
    }
}; ?>

<div class="mx-auto w-full max-w-7xl">
    {{-- Header --}}
    <div class="mb-8 md:mb-12">
        <div class="flex flex-col items-center justify-center gap-3">
            <h1 class="text-center text-3xl font-bold text-white md:text-4xl lg:text-5xl">Haftalık Yayın <span
                    class="text-primary-blue">Akışı</span></h1>
            <p class="max-w-xl text-center text-sm text-gray-400 md:text-base">Hangi gün hangi animenin yeni bölümü
                çıkıyor? Haftalık anime takvimine göz at ve kaçırma!</p>
        </div>
    </div>

    {{-- Day Selector Filter Bar --}}
    <div class="mb-10 w-full overflow-x-auto scrollbar-hide">
        <div
            class="flex min-w-max items-center justify-start gap-2 rounded-2xl border border-white/5 bg-[#1a1c24]/80 p-2 backdrop-blur-xl sm:justify-center">
            @foreach($this->getDays() as $dayKey => $dayName)
                <button wire:click="selectDay('{{ $dayKey }}')"
                    class="relative rounded-xl px-5 py-2.5 text-sm font-semibold transition-all duration-300 {{ $selectedDay === $dayKey ? 'bg-primary-blue/15 text-primary-blue border-primary-blue/30 shadow-[0_0_15px_rgba(47,128,237,0.15)]' : 'text-gray-400 hover:bg-[#1f2129] hover:text-white border-transparent' }} border">
                    {{ $dayName }}
                    @if($selectedDay === $dayKey)
                        <span
                            class="absolute -bottom-px left-1/2 h-px w-1/2 -translate-x-1/2 bg-gradient-to-r from-transparent via-primary-blue to-transparent"></span>
                    @endif
                </button>
            @endforeach
        </div>
    </div>

    {{-- Anime Results Grid for Selected Day --}}
    <div class="relative min-h-[400px]">
        {{-- Loading Overlay --}}
        <div wire:loading wire:target="selectDay"
            class="absolute inset-0 z-10 flex items-center justify-center rounded-2xl bg-main-bg/50 backdrop-blur-sm">
            <div
                class="h-10 w-10 animate-spin rounded-full border-4 border-solid border-primary-blue border-t-transparent">
            </div>
        </div>

        @php
            $dayAnimes = $this->getAnimesForSelectedDay();
        @endphp

        @if(count($dayAnimes) > 0)
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3">
                @foreach($dayAnimes as $anime)
                    <div class="relative">
                        <x-anime.list-card :title="$anime['title']" :poster_url="$anime['poster']" :slug="$anime['slug']"
                            :rating="$anime['rating']" :year="$anime['year']" :episode_count="$anime['episode_count']"
                            :genre="$anime['genre']" />
                        {{-- Broadcast Time Badge --}}
                        <div
                            class="absolute -right-2 -top-2 z-30 shrink-0 rounded-lg border border-primary-blue/30 bg-[#16181f]/95 px-3 py-1.5 shadow-[0_0_15px_rgba(47,128,237,0.2)] backdrop-blur-md">
                            <span class="flex items-center gap-1.5 text-sm font-bold text-white">
                                <i class="far fa-clock text-primary-blue"></i>
                                {{ $anime['time'] }}
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="flex flex-col items-center justify-center py-20 text-center opacity-70">
                <div class="mb-4 rounded-full bg-[#1a1c24] p-6 shadow-black/20">
                    <x-icons.calendar.calendar class="h-12 w-12 text-gray-500" />
                </div>
                <h3 class="mb-2 text-xl font-medium text-white">Bu Gün İçin Anime Bulunamadı</h3>
                <p class="text-sm text-gray-400">Şu an için {{ $this->getDays()[$selectedDay] }} gününe ait planlanmış bir
                    anime yayını görünmüyor.</p>
            </div>
        @endif
    </div>
</div>