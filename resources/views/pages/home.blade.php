<?php

use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new
    #[Layout('layouts.app')]
    class extends Component {
    //
}; ?>

<div class="min-h-screen bg-main-bg text-white font-sans">
    <div class="flex gap-2 relative">
        <!-- Sidebar -->
        <div class="hidden md:block p-6 sticky top-0 z-20">
            <livewire:sidebar />
        </div>


        <!-- Main Content -->
        <main class="flex-1 flex flex-col relative z-10">
            <!-- Navbar -->
            <livewire:navbar />

            <!-- Content Area (Grows naturally) -->
            <div class="pb-24 md:pb-10 px-4 md:px-8">
                <div class="pt-2 pb-10">
                    <livewire:home.hero-section />

                    <livewire:home.live-theaters />
                </div>
            </div>
        </main>
    </div>
</div>