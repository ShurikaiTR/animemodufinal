<?php

use Livewire\Component;

new class extends Component {
    public bool $hasNotifications = false;

    public function toggleNotifications(): void
    {
        $this->hasNotifications = !$this->hasNotifications;
    }
}; ?>

<header
    class="relative z-30 mb-0 flex items-center justify-between gap-4 border-b border-white/10 bg-black/15 px-6 py-4 backdrop-blur-md md:mb-12 md:border-b-0 md:bg-transparent md:px-12 md:py-8 md:backdrop-blur-0 lg:mb-16 lg:pt-10 lg:pb-0">
    <div class="flex min-w-0 items-center gap-4">
        <!-- Hamburger Menu (Mobile Only) -->
        <button @click="$dispatch('open-sidebar')" aria-label="Menüyü aç"
            class="lg:hidden w-12 h-12 bg-white/5 border border-white/5 backdrop-blur-xl rounded-2xl flex items-center justify-center text-white hover:bg-white/10 transition-all duration-300 shadow-lg shadow-black/20 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary-blue focus-visible:ring-offset-2 focus-visible:ring-offset-main-bg">
            <x-icons.hamburger.hamburger-menu class="w-6 h-6" />
        </button>

        <!-- Welcome Message -->
        <div>
            <h1 class="text-xl md:text-2xl font-normal text-muted-text">Hello <span
                    class="text-white font-semibold">Jennie!</span> 👋
            </h1>
        </div>
    </div>

    <!-- Search Bar -->
    <div
        class="hidden md:flex flex-1 max-w-search-bar bg-white/5 border border-white/5 focus-within:border-white/20 backdrop-blur-xl rounded-2xl items-center gap-3 px-5 py-3.5 text-muted-text transition-all duration-300 shadow-lg shadow-black/20">
        <label for="search" class="sr-only">Anime Ara</label>
        <x-icons.search class="w-5 h-5 text-white/40" aria-hidden="true" />
        <input type="text" id="search" placeholder="Anime Ara..."
            class="bg-transparent border-none text-white w-full text-sm placeholder-muted-text rounded-md focus:outline-hidden">
    </div>

    <!-- Right Actions -->
    <div class="flex shrink-0 items-center gap-5">
        <button wire:click="toggleNotifications" aria-label="Bildirimler"
            class="w-12 h-12 bg-white/5 border border-white/5 backdrop-blur-xl rounded-2xl flex items-center justify-center text-muted-text hover:bg-white/10 hover:text-white transition-all duration-300 relative group cursor-pointer shadow-lg shadow-black/20 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary-blue focus-visible:ring-offset-2 focus-visible:ring-offset-main-bg">
            <x-icons.nofitication.default class="w-6 h-6 {{ $hasNotifications ? 'animate-ring text-white' : '' }}" />
            @if($hasNotifications)
                <span class="absolute top-3.5 right-3.5 w-2 h-2 bg-primary-blue rounded-full shadow-active-glow"></span>
            @endif
        </button>


        <!-- User Profile -->
        <button aria-label="Kullanıcı profili"
            class="hidden md:flex items-center gap-3 ml-2 bg-white/5 border border-white/5 backdrop-blur-xl rounded-2xl p-1.5 pr-4 hover:bg-white/10 transition-all duration-300 group cursor-pointer shadow-lg shadow-black/20 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary-blue focus-visible:ring-offset-2 focus-visible:ring-offset-main-bg">
            <img src="{{ asset('images/avatars/default-avatar.png') }}" alt="Profil fotoğrafı" loading="lazy"
                decoding="async" width="44" height="44"
                class="h-11 w-11 rounded-xl object-cover object-center border border-white/15 bg-white/5 ring-1 ring-white/5">
            <div class="text-left">
                <h4 class="text-sm font-semibold text-white group-hover:text-accent-blue transition-colors">Abe
                    Rigal</h4>
                <div class="flex items-center gap-2">
                    <p class="text-xs text-muted-text">Watcher</p>
                    <x-icons.arrows.arrow-down
                        class="w-4 h-4 text-muted-text group-hover:text-white transition-colors" />
                </div>
            </div>
        </button>
    </div>
</header>