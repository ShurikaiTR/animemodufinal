<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home')->name('home');
Route::livewire('/animeler', 'pages::animes')->name('animes.index');
Route::livewire('/filmler', 'pages::movies')->name('movies.index');
