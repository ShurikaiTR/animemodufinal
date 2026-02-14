<?php

use function Pest\Laravel\get;

test('home page renders successfully', function () {
    get('/home')
        ->assertOk()
        ->assertSeeLivewire('sidebar')
        ->assertSeeLivewire('navbar')
        ->assertSeeLivewire('home.hero-section')
        ->assertSeeLivewire('home.live-theaters');
});
