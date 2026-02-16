<?php

use Livewire\Livewire;

use function Pest\Laravel\get;

test('home page renders all core components and branding', function () {
    get('/')
        ->assertOk()
        ->assertSee('AnimeModu')
        ->assertSee('Anasayfa')
        ->assertSee('Animeler')
        ->assertSee('Filmler')
        ->assertSee('Anime Ara...')
        ->assertSee('JUJUTSU KAISEN')
        ->assertSee('Eklenen Animeler');
});

test('sidebar component displays refined navigation', function () {
    Livewire::test('layout.sidebar')
        ->assertSee('Menu')
        ->assertSee('Anasayfa')
        ->assertSee('Animeler')
        ->assertSee('Library');
});

test('navbar component displays correct search placeholder', function () {
    Livewire::test('layout.navbar')
        ->assertSee('Anime Ara...')
        ->assertSee('Hello')
        ->assertSee('Jennie!')
        ->assertSet('hasNotifications', false);
});

test('navbar toggles notification state', function () {
    Livewire::test('layout.navbar')
        ->assertSet('hasNotifications', false)
        ->call('toggleNotifications')
        ->assertSet('hasNotifications', true)
        ->call('toggleNotifications')
        ->assertSet('hasNotifications', false);
});

test('hero section renders primary content', function () {
    Livewire::test('home.hero-section')
        ->assertSee('JUJUTSU KAISEN')
        ->assertSee('Hemen')
        ->assertSee('HD');
});

test('live theaters renders active streams', function () {
    Livewire::test('home.live-theaters')
        ->assertSee('Eklenen Animeler')
        ->assertSee('Watching');
});
