<?php

use Livewire\Component;

new class extends Component {
    //
}; ?>

<div class="mt-4 mb-24 md:mb-0">
    <div class="flex justify-between items-end mb-6">
        <div>
            <h3 class="text-2xl font-bold text-white">Eklenen Animeler</h3>

            <p class="text-sm text-gray-400 mt-2 font-medium">
                Kütüphanemize yeni katılan seriler
            </p>

        </div>

        <a href="#" class="text-sm font-semibold text-white hover:text-primary-blue transition-colors">Tümünü
            Gör</a>


    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
        <!-- Card 1 -->
        <div class="bg-card-bg rounded-3xl p-4 hover:-translate-y-1 transition-transform duration-300 group">
            <div class="flex justify-between items-start mb-4">
                <div class="relative">
                    <div class="w-11 h-11 rounded-2xl bg-cover bg-center bg-[url('https://i.pravatar.cc/150?img=11')]">
                    </div>
                    <div
                        class="absolute -bottom-0.5 -right-0.5 w-3 h-3 bg-emerald-500 border-2 border-card-bg rounded-full">
                    </div>
                </div>
                <div class="flex-1 ml-3">
                    <span class="block text-xs text-muted-text mb-0.5">Watching</span>
                    <h5 class="text-xs font-semibold leading-tight text-white">Me before you</h5>
                </div>
                <div
                    class="w-8 h-8 rounded-full bg-cover bg-center border border-white/10 bg-[url('https://image.tmdb.org/t/p/w200/6Qv6s85R4aG4qA7a6h2a8.jpg')]">
                </div>
            </div>
            <div class="flex items-center justify-between bg-deep-dark px-3 py-2 rounded-2xl">
                <div class="flex pl-2">
                    <img src="https://i.pravatar.cc/150?img=3"
                        class="w-5 h-5 rounded-full border-2 border-deep-dark -ml-2">
                    <img src="https://i.pravatar.cc/150?img=5"
                        class="w-5 h-5 rounded-full border-2 border-deep-dark -ml-2">
                    <img src="https://i.pravatar.cc/150?img=8"
                        class="w-5 h-5 rounded-full border-2 border-deep-dark -ml-2">
                </div>
                <span class="text-xs font-semibold text-muted-text">12+ watching</span>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-card-bg rounded-3xl p-4 hover:-translate-y-1 transition-transform duration-300 group">
            <div class="flex justify-between items-start mb-4">
                <div class="relative">
                    <div class="w-11 h-11 rounded-2xl bg-cover bg-center bg-[url('https://i.pravatar.cc/150?img=5')]">
                    </div>
                    <div
                        class="absolute -bottom-0.5 -right-0.5 w-3 h-3 bg-emerald-500 border-2 border-card-bg rounded-full">
                    </div>
                </div>
                <div class="flex-1 ml-3">
                    <span class="block text-xs text-muted-text mb-0.5">Watching</span>
                    <h5 class="text-xs font-semibold leading-tight text-white">Black Widow</h5>
                </div>
                <div
                    class="w-8 h-8 rounded-full bg-cover bg-center border border-white/10 bg-[url('https://image.tmdb.org/t/p/w200/qAZ0pzat24kLdO3o8ejmbLxyOac.jpg')]">
                </div>
            </div>
            <div class="flex items-center justify-between bg-deep-dark px-3 py-2 rounded-2xl">
                <div class="flex pl-2">
                    <img src="https://i.pravatar.cc/150?img=9"
                        class="w-5 h-5 rounded-full border-2 border-deep-dark -ml-2">
                    <img src="https://i.pravatar.cc/150?img=12"
                        class="w-5 h-5 rounded-full border-2 border-deep-dark -ml-2">
                </div>
                <span class="text-xs font-semibold text-muted-text">22+ watching</span>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-card-bg rounded-3xl p-4 hover:-translate-y-1 transition-transform duration-300 group">
            <div class="flex justify-between items-start mb-4">
                <div class="relative">
                    <div class="w-11 h-11 rounded-2xl bg-cover bg-center bg-[url('https://i.pravatar.cc/150?img=53')]">
                    </div>
                    <div
                        class="absolute -bottom-0.5 -right-0.5 w-3 h-3 bg-emerald-500 border-2 border-card-bg rounded-full">
                    </div>
                </div>
                <div class="flex-1 ml-3">
                    <span class="block text-xs text-muted-text mb-0.5">Watching</span>
                    <h5 class="text-xs font-semibold leading-tight text-white">The Hacker</h5>
                </div>
                <div
                    class="w-8 h-8 rounded-full bg-cover bg-center border border-white/10 bg-[url('https://image.tmdb.org/t/p/w200/pB8BM7pdSp6B6Ih7QZ4DrQ3PmJK.jpg')]">
                </div>
            </div>
            <div class="flex items-center justify-between bg-deep-dark px-3 py-2 rounded-2xl">
                <div class="flex pl-2">
                    <img src="https://i.pravatar.cc/150?img=22"
                        class="w-5 h-5 rounded-full border-2 border-deep-dark -ml-2">
                    <img src="https://i.pravatar.cc/150?img=33"
                        class="w-5 h-5 rounded-full border-2 border-deep-dark -ml-2">
                </div>
                <span class="text-xs font-semibold text-muted-text">34+ watching</span>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-card-bg rounded-3xl p-4 hover:-translate-y-1 transition-transform duration-300 group">
            <div class="flex justify-between items-start mb-4">
                <div class="relative">
                    <div class="w-11 h-11 rounded-2xl bg-cover bg-center bg-[url('https://i.pravatar.cc/150?img=42')]">
                    </div>
                    <div
                        class="absolute -bottom-0.5 -right-0.5 w-3 h-3 bg-amber-400 border-2 border-card-bg rounded-full">
                    </div>
                </div>
                <div class="flex-1 ml-3">
                    <span class="block text-xs text-muted-text mb-0.5">Waiting Stream</span>
                    <h5 class="text-xs font-semibold leading-tight text-white">Spider-man</h5>
                </div>
                <div
                    class="w-8 h-8 rounded-full bg-cover bg-center border border-white/10 bg-[url('https://image.tmdb.org/t/p/w200/u3bZgnGQ9T01sWNhyho4nmw5I2K.jpg')]">
                </div>
            </div>
            <div class="flex items-center justify-between bg-deep-dark px-3 py-2 rounded-2xl">
                <div class="flex pl-2">
                    <img src="https://i.pravatar.cc/150?img=10"
                        class="w-5 h-5 rounded-full border-2 border-deep-dark -ml-2">
                    <img src="https://i.pravatar.cc/150?img=14"
                        class="w-5 h-5 rounded-full border-2 border-deep-dark -ml-2">
                </div>
                <span class="text-xs font-semibold text-muted-text">32+ waiting</span>
            </div>
        </div>

    </div>
</div>
