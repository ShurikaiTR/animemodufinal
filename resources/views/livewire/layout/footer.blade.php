<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<footer class="mt-auto py-12 border-t border-white/5">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
            <!-- Brand Section -->
            <div class="col-span-1 md:col-span-1">
                <div class="flex items-center gap-3 mb-6">
                    <img src="{{ asset('images/animemodu-logo.svg') }}" alt="AnimeModu" class="h-12 w-auto">
                </div>
                <p class="text-muted-text text-sm leading-relaxed">
                    Türkiye'nin en modern ve hızlı anime platformu. En sevdiğiniz animeleri HD kalitesinde, reklamsız ve
                    kesintisiz izleyin.
                </p>
                <div class="flex items-center gap-4 mt-8">
                    <a href="#"
                        class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-muted-text hover:text-primary-blue hover:-translate-y-1.5 hover:scale-110 transition-all duration-300 ease-[cubic-bezier(0.34,1.56,0.64,1)]">
                        <x-icons.social-media.x class="w-5 h-5" />
                    </a>
                    <a href="#"
                        class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-muted-text hover:text-primary-blue hover:-translate-y-1.5 hover:scale-110 transition-all duration-300 ease-[cubic-bezier(0.34,1.56,0.64,1)]">
                        <x-icons.social-media.discord class="w-5 h-5" />
                    </a>
                    <a href="#"
                        class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-muted-text hover:text-primary-blue hover:-translate-y-1.5 hover:scale-110 transition-all duration-300 ease-[cubic-bezier(0.34,1.56,0.64,1)]">
                        <x-icons.social-media.instagram class="w-5 h-5" />
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-white font-bold mb-6 uppercase tracking-wider text-xs">Platform</h4>
                <ul class="space-y-4">
                    <li><a href="#" class="text-muted-text hover:text-white transition-colors text-sm">Anasayfa</a></li>
                    <li><a href="#" class="text-muted-text hover:text-white transition-colors text-sm">Popüler
                            Animeler</a></li>
                    <li><a href="#" class="text-muted-text hover:text-white transition-colors text-sm">Yeni Bölümler</a>
                    </li>
                    <li><a href="#" class="text-muted-text hover:text-white transition-colors text-sm">Takvim</a></li>
                </ul>
            </div>

            <!-- Support -->
            <div>
                <h4 class="text-white font-bold mb-6 uppercase tracking-wider text-xs">Destek</h4>
                <ul class="space-y-4">
                    <li><a href="#" class="text-muted-text hover:text-white transition-colors text-sm">Sıkça Sorulan
                            Sorular</a></li>
                    <li><a href="#" class="text-muted-text hover:text-white transition-colors text-sm">İletişim</a></li>
                    <li><a href="#" class="text-muted-text hover:text-white transition-colors text-sm">Kullanım
                            Koşulları</a></li>
                    <li><a href="#" class="text-muted-text hover:text-white transition-colors text-sm">Gizlilik
                            Politikası</a></li>
                </ul>
            </div>

            <!-- Community -->
            <div>
                <h4 class="text-white font-bold mb-6 uppercase tracking-wider text-xs">Topluluk</h4>
                <ul class="space-y-4">
                    <li><a href="#" class="text-muted-text hover:text-white transition-colors text-sm">Discord
                            Sunucumuz</a></li>
                    <li><a href="#" class="text-muted-text hover:text-white transition-colors text-sm">Forum</a></li>
                    <li><a href="#" class="text-muted-text hover:text-white transition-colors text-sm">Haberler</a></li>
                    <li><a href="#" class="text-muted-text hover:text-white transition-colors text-sm">Bağış Yap</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-muted-text text-xs uppercase tracking-widest font-medium">
                © {{ date('Y') }} AnimeModu. Tüm Hakları Saklıdır.
            </p>
            <div class="flex items-center gap-6">
                <span class="text-muted-text text-[10px] font-bold uppercase tracking-widest flex items-center gap-2">
                    <span class="w-1.5 h-1.5 bg-green-500 rounded-full animate-pulse"></span>
                    SYSTEM ONLINE
                </span>
            </div>
        </div>
    </div>
</footer>