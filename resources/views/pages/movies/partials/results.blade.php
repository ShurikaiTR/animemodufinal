<div>
    @if($viewMode === 'grid')
        <div class="mt-4 grid grid-cols-2 gap-4 sm:grid-cols-3 md:mt-6 md:gap-6 lg:grid-cols-[repeat(auto-fill,minmax(190px,1fr))]">
            @foreach ($animes as $anime)
                <x-anime.card wire:key="anime-grid-{{ $anime['slug'] }}" :title="$anime['title']" :poster_url="$anime['poster']"
                    :rating="$anime['rating']" :slug="$anime['slug']" :year="$anime['year']"
                    :episode_count="$anime['episode_count']" :genre="$anime['genre']" />
            @endforeach
        </div>
    @else
        <div class="mt-4 flex flex-col gap-3 md:mt-6 md:gap-4">
            @foreach ($animes as $anime)
                <x-anime.list-card wire:key="anime-list-{{ $anime['slug'] }}" :title="$anime['title']" :poster_url="$anime['poster']"
                    :rating="$anime['rating']" :slug="$anime['slug']" :year="$anime['year']"
                    :episode_count="$anime['episode_count']" :genre="$anime['genre']" :description="$anime['description'] ?? null" />
            @endforeach
        </div>
    @endif

    @if($hasMoreAnimes)
        <div class="mt-6 md:mt-8">
            <div wire:intersect.margin.200px="loadMoreAnimes"
                class="flex items-center justify-center rounded-2xl border border-white/5 bg-[#1a1c24]/60 px-4 py-4 text-sm text-gray-400 backdrop-blur-xl">
                <span wire:loading.remove wire:target="loadMoreAnimes">Daha fazla film yükleniyor...</span>
                <span wire:loading.delay wire:target="loadMoreAnimes" class="inline-flex items-center gap-2 text-white/80">
                    <span class="h-2 w-2 animate-pulse rounded-full bg-primary-blue"></span>
                    Yükleniyor...
                </span>
            </div>
        </div>
    @endif
</div>
