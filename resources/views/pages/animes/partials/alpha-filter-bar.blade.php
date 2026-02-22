<div class="mb-8 md:mb-10">
    <div class="scrollbar-hide w-full overflow-x-auto overflow-y-hidden pb-2">
        <div
            class="flex w-max min-w-max items-center gap-1 rounded-2xl border border-white/5 bg-[#1a1c24]/80 p-1 backdrop-blur-xl md:gap-1.5 md:p-1.5">
            @foreach ($letters as $letter)
                <button wire:click="setLetter('{{ $letter }}')" class="flex h-7 w-7 items-center justify-center rounded-lg text-[11px] font-bold transition-all duration-300 md:h-8 md:w-8 md:text-xs
                        @if($activeLetter === $letter)
                            bg-primary-blue text-white shadow-[0_0_15px_rgba(47,128,237,0.4)]
                        @else
                            text-gray-400 hover:bg-white/10 hover:text-white
                        @endif">
                    {{ $letter }}
                </button>
            @endforeach
        </div>
    </div>
</div>
