<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new
    #[Layout('layouts.app')]
    class extends Component {
    //
}; ?>

<div class="min-h-screen bg-main-bg text-white font-sans" x-data="{ sidebarOpen: false }"
    @open-sidebar.window="sidebarOpen = true">

    <!-- Mobile Sidebar Overlay -->
    <div x-show="sidebarOpen" class="fixed inset-0 z-50 lg:hidden" role="dialog" aria-modal="true"
        style="display: none;">
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

            <!-- Content Area (Grows naturally) -->
            <div class="pb-24 md:pb-10 px-4 md:px-8">
                <div class="pt-2 pb-10">
                    <livewire:home.hero-section />

                    <livewire:home.live-theaters />
                </div>
            </div>

            <!-- Footer -->
            <x-layout.footer />
        </main>
    </div>
</div>
