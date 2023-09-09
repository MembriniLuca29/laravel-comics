<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('home');
});


Route::get('/comics', function () {
    $comics = config('comics');
    dd($comics);
    return view('comics');
})->name('comics');




