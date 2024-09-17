<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\AnotationsList;

Route::get('/', function () {
    return view('home');
});

Route::get('/list', AnotationsList::class);

