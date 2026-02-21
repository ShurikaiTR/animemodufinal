<?php

use Livewire\Component;

new class extends Component {
    //
}; ?>

<div class="w-full max-w-6xl mx-auto mb-12">



    <div
        class="relative w-full min-h-[420px] sm:min-h-[460px] lg:min-h-[500px] rounded-3xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.5)] group">

        <img src="https://image.tmdb.org/t/p/original/9CsTtHlvErQ93jvIWIjs06G0Abe.jpg" alt="Öne Çıkan Anime"
            loading="eager" decoding="async" fetchpriority="high"
            class="absolute inset-0 w-full h-full object-cover object-top transform group-hover:scale-105 transition-transform duration-[1500ms] ease-out">

        <div class="absolute inset-0 bg-gradient-to-r from-dark-bg via-dark-bg/80 to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-dark-bg via-dark-bg/30 to-transparent"></div>

        <div class="relative z-10 flex h-full max-w-3xl flex-col justify-center p-8 md:p-12 lg:p-16">

            <div class="mb-4 md:mb-6">
                <img src="https://image.tmdb.org/t/p/original/gPflM950uYjpJ20Pu1QMVBwkpBn.svg" alt="Jujutsu Kaisen Logo"
                    class="w-48 md:w-64 lg:w-80 h-auto drop-shadow-2xl">
            </div>

            <div class="flex items-center flex-wrap gap-2 md:gap-3 mb-6 md:mb-8">
                <!-- Yaş Sınırı -->
                <span
                    class="border border-white/20 px-1.5 py-0.5 rounded-md text-[11px] font-medium bg-white/5 text-white/80">
                    13+
                </span>

                <span class="text-white/30 hidden sm:inline-block">&bull;</span>

                <!-- Türler (Genres) -->
                <div class="flex items-center flex-wrap gap-2 text-white/70 text-sm font-light tracking-wide">
                    <span>Aksiyon</span>
                    <span class="text-white/30 text-xs">&bull;</span>
                    <span>Doğaüstü</span>
                    <span class="text-white/30 text-xs">&bull;</span>
                    <span>Karanlık Fantezi</span>
                </div>
            </div>

            <p
                class="text-gray-300 text-base lg:text-lg leading-relaxed mb-8 md:mb-12 line-clamp-3 max-w-2xl drop-shadow-md">
                Sıradan bir lise öğrencisi olan Yuji Itadori, lanetli bir tılsımı yutarak iki yüzlü hayalet Ryomen
                Sukuna'nın taşıyıcısı olur. Artık o, Satoru Gojo'nun rehberliğinde Jujutsu Büyücülerinin gizli ve
                tehlikeli dünyasının ayrılmaz bir parçasıdır.
            </p>

            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
                <button
                    class="bg-primary-blue text-white hover:bg-accent-blue hover:scale-105 transition-all duration-300 px-8 py-3.5 rounded-2xl font-bold text-sm flex justify-center sm:justify-start items-center gap-3 shadow-[0_0_30px_rgba(47,128,237,0.35)] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary-blue focus-visible:ring-offset-2 focus-visible:ring-offset-dark-bg">
                    <x-icons.play.play class="h-6 w-6" />
                    Hemen İzle
                </button>

                <button
                    class="bg-white/10 hover:bg-white/20 backdrop-blur-md border border-white/10 text-white transition-all duration-300 px-8 py-3.5 rounded-2xl font-semibold text-sm flex justify-center sm:justify-start items-center gap-3 group-hover:border-white/30 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-dark-bg">
                    <x-icons.bookmark.bookmark class="w-6 h-6" />
                    Listeme Ekle
                </button>
            </div>

        </div>
    </div>

</div>