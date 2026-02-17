<?php

use function Pest\Laravel\get;

test('home page renders successfully', function () {
    get('/')
        ->assertOk()
        ->assertSeeLivewire('layout.sidebar')
        ->assertSeeLivewire('layout.navbar')
        ->assertSeeLivewire('home.hero-section')
        ->assertSeeLivewire('home.latest-animes.latest-animes')
        ->assertSee('SYSTEM ONLINE');
});
