<div class="mb-6 flex flex-col justify-between gap-4 sm:flex-row sm:items-center md:mb-8">
    <h1 class="text-2xl font-bold tracking-wider text-white">
        Tüm Filmler
    </h1>

    <div
        class="flex shrink-0 self-start items-center justify-center gap-1 rounded-xl border border-white/5 bg-[#1a1c24]/80 p-1 backdrop-blur-xl sm:self-auto">
        <button wire:click="setViewMode('grid')" title="Izgara Görünümü"
            class="flex h-8 w-8 items-center justify-center rounded-lg transition-all duration-300 md:h-9 md:w-9 @if($viewMode === 'grid') bg-primary-blue text-white shadow-[0_0_15px_rgba(47,128,237,0.4)] @else text-gray-400 hover:bg-[#1f2129] hover:text-white @endif">
            <x-icons.list.grid class="h-5 w-5" />
        </button>
        <button wire:click="setViewMode('list')" title="Liste Görünümü"
            class="flex h-8 w-8 items-center justify-center rounded-lg transition-all duration-300 md:h-9 md:w-9 @if($viewMode === 'list') bg-primary-blue text-white shadow-[0_0_15px_rgba(47,128,237,0.4)] @else text-gray-400 hover:bg-[#1f2129] hover:text-white @endif">
            <x-icons.list.list class="h-5 w-5" />
        </button>
    </div>
</div>
