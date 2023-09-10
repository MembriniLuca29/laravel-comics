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


Route::get('/comics/{id}', function ($id) {
    $comics = config('comics');

    if (isset($comics[$id])) {
        $comic = $comics[$id];
        return view('comic', compact('comic'));
    }

    abort(404);
})->name('comic.show');


