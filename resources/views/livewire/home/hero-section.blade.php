<?php

use Livewire\Component;

new class extends Component {
    //
}; ?>

<div class="-mx-4 mb-12 mt-0 md:mx-0">



    <div
        class="group relative mx-auto w-full max-w-6xl min-h-[420px] sm:min-h-[430px] lg:min-h-[500px] overflow-hidden rounded-none rounded-b-3xl md:rounded-3xl shadow-none md:shadow-[0_20px_50px_rgba(0,0,0,0.5)]">

        <img src="https://image.tmdb.org/t/p/original/9CsTtHlvErQ93jvIWIjs06G0Abe.jpg" alt="Öne Çıkan Anime"
            loading="eager" decoding="async" fetchpriority="high"
            class="absolute inset-0 w-full h-full object-cover object-top transform group-hover:scale-105 transition-transform duration-[1500ms] ease-out">

        <div class="absolute inset-0 bg-gradient-to-r from-dark-bg/95 via-dark-bg/70 to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-dark-bg/35 to-transparent"></div>

        <div
            class="relative z-10 flex h-full max-w-3xl flex-col items-center justify-end p-6 pt-24 pb-8 text-center md:items-start md:p-12 md:pt-12 md:pb-12 md:text-left lg:p-16">

            <div class="mt-2 mb-6 md:mb-7">
                <img src="https://image.tmdb.org/t/p/original/gPflM950uYjpJ20Pu1QMVBwkpBn.svg" alt="Jujutsu Kaisen Logo"
                    class="w-48 md:w-64 lg:w-80 h-auto drop-shadow-2xl">
            </div>

            <div class="mb-6 flex flex-wrap items-center justify-center gap-2 md:mb-8 md:justify-start md:gap-3">
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

            <div class="flex items-center gap-3 sm:gap-4">
                <button
                    class="inline-flex h-12 items-center justify-center gap-2 rounded-xl bg-primary-blue px-5 text-sm font-bold text-white shadow-[0_0_24px_rgba(47,128,237,0.35)] transition-all duration-300 hover:scale-105 hover:bg-accent-blue focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary-blue focus-visible:ring-offset-2 focus-visible:ring-offset-dark-bg">
                    <x-icons.play.play class="h-5 w-5" />
                    Hemen İzle
                </button>

                <button
                    class="inline-flex h-12 w-12 items-center justify-center rounded-xl border border-white/15 bg-white/10 text-white backdrop-blur-md transition-all duration-300 hover:bg-white/20 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-dark-bg sm:w-auto sm:gap-2 sm:px-5">
                    <x-icons.bookmark.bookmark class="h-5 w-5" />
                    <span class="hidden sm:inline">Listeme Ekle</span>
                </button>
            </div>

        </div>
    </div>

</div>
