<?php

test('home page passes browser smoke checks', function () {
    if (! class_exists('Pest\\Browser\\Browser')) {
        $this->markTestSkipped('Install pestphp/pest-plugin-browser to run browser smoke tests.');
    }

    visit(['/'])->assertNoSmoke();
});
