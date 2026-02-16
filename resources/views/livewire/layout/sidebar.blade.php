<?php

use Livewire\Volt\Component;

new class extends Component {
    public bool $isMobile = false;
}; ?>

<aside x-data="{ open: false }"
    class="bg-sidebar-bg flex flex-col flex-shrink-0 p-8 h-full shadow-[var(--shadow-sidebar)] border border-white/5 {{ $isMobile ? 'w-full rounded-none' : 'w-sidebar rounded-sidebar min-h-[calc(100vh-3rem)]' }}">

    <!-- Logo -->
    <div class="flex items-center justify-center mb-16">
        <img src="{{ asset('images/animemodu-logo.svg') }}" alt="AnimeModu" class="h-16 w-auto">
    </div>

    <!-- Menu Section -->
    <div class="mb-10">
        <div class="text-xs text-sidebar-label font-semibold uppercase tracking-label mb-5 pl-2">Menu</div>
        <nav class="space-y-1">
            <a href="#" class="flex items-center gap-4 py-3 px-2 text-primary-blue font-normal relative group">
                <div
                    class="absolute -left-8 top-1/2 -translate-y-1/2 h-6 w-1 bg-primary-blue rounded-r shadow-active-glow">
                </div>
                <x-icons.home.home class="w-6 h-6" /> Anasayfa
            </a>
            <a href="#"
                class="flex items-center gap-4 py-3 px-2 text-muted-text hover:text-primary-blue transition-colors font-medium">
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
        <nav class="space-y-1">
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