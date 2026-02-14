<?php

use Livewire\Volt\Component;

new class extends Component {
    public bool $hasNotifications = false;

    public function toggleNotifications(): void
    {
        $this->hasNotifications = !$this->hasNotifications;
    }
}; ?>

<header class="flex justify-between items-center mb-16 px-6 md:px-12 py-8 md:pt-10 md:pb-0">
    <div class="flex items-center gap-4">
        <!-- Hamburger Menu (Mobile Only) -->
        <button
            class="md:hidden w-12 h-12 bg-white/5 border border-white/5 backdrop-blur-xl rounded-2xl flex items-center justify-center text-white hover:bg-white/10 transition-all duration-300 shadow-lg shadow-black/20">
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
        class="hidden md:flex w-search-bar bg-white/5 border border-white/5 backdrop-blur-xl rounded-2xl items-center gap-3 px-5 py-3.5 text-muted-text transition-all duration-300 shadow-lg shadow-black/20">
        <x-icons.search class="w-5 h-5 text-white/40" />
        <input type="text" placeholder="Anime Ara..."
            class="bg-transparent border-none outline-none text-white w-full text-sm placeholder-muted-text focus:ring-0">
    </div>

    <!-- Right Actions -->
    <div class="flex items-center gap-5">
        <button wire:click="toggleNotifications"
            class="w-12 h-12 bg-white/5 border border-white/5 backdrop-blur-xl rounded-2xl flex items-center justify-center text-muted-text hover:bg-white/10 hover:text-white transition-all duration-300 relative group cursor-pointer shadow-lg shadow-black/20">
            <x-icons.nofitication.default class="w-6 h-6 {{ $hasNotifications ? 'animate-ring text-white' : '' }}" />
            @if($hasNotifications)
                <span class="absolute top-3.5 right-3.5 w-2 h-2 bg-primary-blue rounded-full shadow-active-glow"></span>
            @endif
        </button>


        <!-- User Profile -->
        <button
            class="hidden md:flex items-center gap-3 ml-2 bg-white/5 border border-white/5 backdrop-blur-xl rounded-2xl p-1.5 pr-4 hover:bg-white/10 transition-all duration-300 group cursor-pointer shadow-lg shadow-black/20">
            <div
                class="w-10 h-10 rounded-xl bg-[url('https://i.pravatar.cc/150?img=32')] bg-cover bg-center border border-white/10">
            </div>
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