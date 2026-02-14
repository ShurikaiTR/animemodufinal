<?php

use Livewire\Livewire;

use function Pest\Laravel\get;

test('home page renders all core components and branding', function () {
    get('/home')
        ->assertOk()
        ->assertSee('Cinema.')
        ->assertSee('Anasayfa')
        ->assertSee('Animeler')
        ->assertSee('Filmler')
        ->assertSee('Anime Ara...')
        ->assertSee('ALITA')
        ->assertSee('Live Theaters');
});

test('sidebar component displays refined navigation', function () {
    Livewire::test('sidebar')
        ->assertSee('Cinema.')
        ->assertSee('Anasayfa')
        ->assertSee('Animeler')
        ->assertSee('Library');
});

test('navbar component displays correct search placeholder', function () {
    Livewire::test('navbar')
        ->assertSee('Anime Ara...')
        ->assertSee('Hello')
        ->assertSee('Jennie!')
        ->assertSet('hasNotifications', false);
});

test('navbar toggles notification state', function () {
    Livewire::test('navbar')
        ->assertSet('hasNotifications', false)
        ->call('toggleNotifications')
        ->assertSet('hasNotifications', true)
        ->call('toggleNotifications')
        ->assertSet('hasNotifications', false);
});

test('hero section renders primary content', function () {
    Livewire::test('home.hero-section')
        ->assertSee('ALITA')
        ->assertSee('Action')
        ->assertSee('Sci-Fi');
});

test('live theaters renders active streams', function () {
    Livewire::test('home.live-theaters')
        ->assertSee('Live Theaters')
        ->assertSee('Watching');
});
