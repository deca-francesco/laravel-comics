<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('comics');
})->name("comics");

// rotta della pagina di dettaglio
Route::get('/comics/{id}', function ($id) {
    $comics = config('comics');

    // Controllo per evitare errori su ID non validi
    if (!isset($comics[$id])) {
        abort(404);
    }

    $comic = $comics[$id];

    return view('comic-details', compact('comic'));
})->name('comic-details');
