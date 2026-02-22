<div class="mb-6 md:mb-8">
    <div class="w-full pb-2">
        <div
            class="relative z-20 flex w-full flex-wrap items-center gap-2 rounded-2xl border border-white/5 bg-[#1a1c24]/80 p-2 backdrop-blur-xl">
            <div x-data="{ sortMenuOpen: false }" class="relative shrink-0">
                <button type="button" @click="sortMenuOpen = !sortMenuOpen" @click.outside="sortMenuOpen = false"
                    class="inline-flex h-10 items-center gap-2 rounded-xl border border-white/5 bg-[#1f2129] px-4 text-sm font-semibold text-white transition-colors hover:border-white/10">
                    <span>Sıralama: {{ $this->sortLabel() }}</span>
                    <x-icons.arrows.arrow-down class="h-4 w-4 text-white/70 transition-transform duration-200"
                        x-bind:class="{ 'rotate-180': sortMenuOpen }" />
                </button>

                <div x-show="sortMenuOpen" x-cloak x-transition:enter="transition ease-out duration-150"
                    x-transition:enter-start="opacity-0 -translate-y-1"
                    x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-1"
                    class="absolute left-0 top-12 z-40 w-60 rounded-xl border border-white/10 bg-[#16181f]/95 p-1.5 shadow-2xl shadow-black/60 backdrop-blur-xl">
                    @foreach ($sortOptions as $option)
                        <button type="button" wire:click="setSort('{{ $option['value'] }}')" @click="sortMenuOpen = false"
                            class="flex w-full items-center justify-between rounded-lg px-3 py-2.5 text-left text-sm transition-colors @if($sortBy === $option['value']) bg-primary-blue/15 text-white @else text-gray-300 hover:bg-[#1f2129] hover:text-white @endif">
                            <span>{{ $option['label'] }}</span>
                            @if($sortBy === $option['value'])
                                <span class="h-1.5 w-1.5 rounded-full bg-primary-blue"></span>
                            @endif
                        </button>
                    @endforeach
                </div>
            </div>

            <button type="button"
                class="inline-flex h-10 items-center gap-2 rounded-xl px-3.5 text-sm font-medium text-gray-300 transition-colors hover:bg-[#1f2129] hover:text-white">
                <span>Tür</span>
                <x-icons.arrows.arrow-down class="h-4 w-4 text-white/50" />
            </button>

            <button type="button"
                class="inline-flex h-10 items-center gap-2 rounded-xl px-3.5 text-sm font-medium text-gray-300 transition-colors hover:bg-[#1f2129] hover:text-white">
                <span>Yıl</span>
                <x-icons.arrows.arrow-down class="h-4 w-4 text-white/50" />
            </button>

            <button type="button"
                class="inline-flex h-10 items-center gap-2 rounded-xl px-3.5 text-sm font-medium text-gray-300 transition-colors hover:bg-[#1f2129] hover:text-white">
                <span>Puan</span>
                <x-icons.arrows.arrow-down class="h-4 w-4 text-white/50" />
            </button>

            <div class="mx-1 hidden h-6 w-px bg-white/10 lg:block"></div>

            <button type="button"
                class="inline-flex h-10 items-center rounded-xl border border-primary-blue/30 bg-primary-blue/10 px-4 text-sm font-semibold text-primary-blue transition-colors hover:bg-primary-blue/15 lg:ml-auto">
                Filtrele
            </button>

            <button type="button"
                class="inline-flex h-10 items-center rounded-xl px-3.5 text-sm font-medium text-gray-400 transition-colors hover:bg-[#1f2129] hover:text-white">
                Temizle
            </button>
        </div>
    </div>
</div>
