<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new
    #[Layout('layouts::app')]
    class extends Component {
    //
}; ?>

<div>
    <livewire:home.hero-section />

    <livewire:home.latest-animes.latest-animes defer.bundle />

    <livewire:home.latest-episodes.latest-episodes defer.bundle />
</div>