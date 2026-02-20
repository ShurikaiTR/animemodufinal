<?php

use Livewire\Component;

new class extends Component {
    //
}; ?>

<div class="w-full max-w-6xl mx-auto mb-12">



    <div class="relative w-full h-[480px] rounded-3xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.5)] group">

        <img src="https://image.tmdb.org/t/p/original/9CsTtHlvErQ93jvIWIjs06G0Abe.jpg" alt="Öne Çıkan Anime"
            loading="eager" decoding="async" fetchpriority="high"
            class="absolute inset-0 w-full h-full object-cover object-top transform group-hover:scale-105 transition-transform duration-[1500ms] ease-out">

        <div class="absolute inset-0 bg-gradient-to-r from-dark-bg via-dark-bg/80 to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-dark-bg via-dark-bg/30 to-transparent"></div>

        <div class="relative z-10 flex flex-col justify-center h-full p-8 md:p-12 lg:p-16 max-w-3xl">

            <div class="flex flex-wrap items-center gap-3 mb-6">
                <span
                    class="bg-accent-blue/20 text-accent-blue border border-accent-blue/30 px-3 py-1.5 rounded-lg text-[11px] font-bold uppercase tracking-widest backdrop-blur-sm shadow-lg">
                    YENİ SEZON
                </span>
                <span
                    class="bg-white/10 border border-white/10 backdrop-blur-md text-white px-3 py-1.5 rounded-lg text-[12px] font-semibold flex items-center gap-1.5 shadow-lg">
                    <x-icons.star.star class="w-5 h-5 text-primary-blue" /> 9.8
                </span>
                <span class="text-gray-300 text-xs font-medium bg-black/40 px-3 py-1.5 rounded-lg backdrop-blur-sm">
                    24 Bölüm • HD
                </span>
            </div>

            <h1
                class="text-3xl md:text-5xl lg:text-6xl font-black text-white uppercase italic tracking-wider mb-5 drop-shadow-2xl">
                JUJUTSU KAISEN
            </h1>

            <p
                class="text-gray-300 text-sm lg:text-base leading-relaxed mb-8 md:mb-10 line-clamp-3 max-w-2xl drop-shadow-md">
                Sıradan bir lise öğrencisi olan Yuji Itadori, lanetli bir tılsımı yutarak iki yüzlü hayalet Ryomen
                Sukuna'nın taşıyıcısı olur. Artık o, Satoru Gojo'nun rehberliğinde Jujutsu Büyücülerinin gizli ve
                tehlikeli dünyasının ayrılmaz bir parçasıdır.
            </p>

            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
                <button
                    class="bg-white text-dark-bg hover:bg-gray-200 hover:scale-105 transition-all duration-300 px-8 py-3.5 rounded-2xl font-bold text-sm flex justify-center sm:justify-start items-center gap-3 shadow-[0_0_30px_rgba(255,255,255,0.3)] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-dark-bg">
                    <i class="fas fa-play text-xs"></i>
                    Hemen İzle
                </button>

                <button
                    class="bg-white/10 hover:bg-white/20 backdrop-blur-md border border-white/10 text-white transition-all duration-300 px-8 py-3.5 rounded-2xl font-semibold text-sm flex justify-center sm:justify-start items-center gap-3 group-hover:border-white/30 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-dark-bg">
                    <i class="fas fa-plus"></i>
                    Listeme Ekle
                </button>
            </div>

        </div>
    </div>

</div>
