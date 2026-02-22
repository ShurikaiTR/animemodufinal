<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="bg-main-bg text-white font-sans antialiased">
    <div class="min-h-screen overflow-x-hidden bg-main-bg text-white font-sans" x-data="{ sidebarOpen: false }"
        x-effect="document.body.classList.toggle('overflow-hidden', sidebarOpen && window.innerWidth < 1024)"
        @open-sidebar.window="sidebarOpen = true" @keydown.escape.window="sidebarOpen = false">

        <div x-show="sidebarOpen" x-cloak class="fixed inset-0 z-50 lg:hidden" role="dialog" aria-modal="true">
            <div x-show="sidebarOpen" x-transition:enter="transition-opacity ease-linear duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black/80 backdrop-blur-sm"
                @click="sidebarOpen = false"></div>

            <div x-show="sidebarOpen" x-transition:enter="transition ease-in-out duration-300 transform"
                x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                x-transition:leave="transition ease-in-out duration-300 transform"
                x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                class="relative flex h-full w-full max-w-xs flex-1">
                <livewire:layout.sidebar :is-mobile="true" />
            </div>
        </div>

        <div class="relative flex gap-2">
            <div class="z-20 hidden p-6 lg:block">
                <livewire:layout.sidebar />
            </div>

            <main class="relative z-10 flex flex-1 flex-col">
                <livewire:layout.navbar />

                <div class="px-4 pb-24 md:px-8 md:pb-10">
                    <div class="pt-0 pb-10">
                        {{ $slot }}
                    </div>
                </div>

                <x-layout.footer />
            </main>
        </div>
    </div>

    @livewireScripts
</body>

</html>