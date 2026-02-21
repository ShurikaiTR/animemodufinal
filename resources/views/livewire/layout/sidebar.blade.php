<?php

use Livewire\Component;

new class extends Component {
    public bool $isMobile = false;
}; ?>

<aside
    class="bg-sidebar-bg flex flex-col shrink-0 p-8 h-full shadow-[var(--shadow-sidebar)] border border-white/5 {{ $isMobile ? 'w-full rounded-none' : 'w-sidebar rounded-sidebar min-h-[calc(100vh-3rem)]' }}">

    <!-- Logo -->
    <div class="flex items-center justify-center mb-16">
        <img src="{{ asset('images/animemodu-logo.svg') }}" alt="AnimeModu" class="h-16 w-auto">
    </div>

    <!-- Menu Section -->
    <div class="mb-10">
        <div class="text-xs text-sidebar-label font-semibold uppercase tracking-label mb-5 pl-2">Menu</div>
        <nav class="flex flex-col gap-1">
            <a href="{{ route('home') }}"
                class="relative flex items-center gap-4 px-2 py-3 font-normal transition-colors {{ request()->routeIs('home') ? 'text-primary-blue' : 'text-muted-text hover:text-primary-blue' }}">
                @if (request()->routeIs('home'))
                    <div
                        class="absolute -left-8 top-1/2 h-6 w-1 -translate-y-1/2 rounded-r bg-primary-blue shadow-active-glow">
                    </div>
                @endif
                <x-icons.home.home class="w-6 h-6" /> Anasayfa
            </a>
            <a href="{{ route('animes.index') }}"
                class="relative flex items-center gap-4 px-2 py-3 font-medium transition-colors {{ request()->routeIs('animes.index') ? 'text-primary-blue' : 'text-muted-text hover:text-primary-blue' }}">
                @if (request()->routeIs('animes.index'))
                    <div
                        class="absolute -left-8 top-1/2 h-6 w-1 -translate-y-1/2 rounded-r bg-primary-blue shadow-active-glow">
                    </div>
                @endif
                <x-icons.tv.tv class="w-6 h-6" /> Animeler
            </a>
            <a href="#"
                class="flex items-center gap-4 py-3 px-2 text-muted-text hover:text-primary-blue transition-colors font-normal">
                <x-icons.movies.movies class="w-6 h-6" /> Filmler
            </a>
            <a href="#"
                class="flex items-center gap-4 py-3 px-2 text-muted-text hover:text-primary-blue transition-colors font-normal">
                <x-icons.calendar.calendar class="w-6 h-6" /> Takvim
            </a>
        </nav>
    </div>

    <!-- Library Section -->
    <div class="mb-auto">
        <div class="text-xs text-sidebar-label font-semibold uppercase tracking-label mb-5 pl-2">Library</div>
        <nav class="flex flex-col gap-1">
            <a href="#"
                class="flex items-center gap-4 py-3 px-2 text-muted-text hover:text-primary-blue transition-colors font-normal">
                <i class="far fa-clock w-5 text-center"></i> Watched
            </a>
            <a href="#"
                class="flex items-center gap-4 py-3 px-2 text-muted-text hover:text-primary-blue transition-colors font-normal">
                <i class="far fa-heart w-5 text-center"></i> Liked
            </a>
            <a href="#"
                class="flex items-center gap-4 py-3 px-2 text-muted-text hover:text-primary-blue transition-colors font-normal">
                <i class="far fa-folder w-5 text-center"></i> Downloads
            </a>
        </nav>
    </div>


</aside>
