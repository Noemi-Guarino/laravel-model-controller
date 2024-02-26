<?php

use Illuminate\Support\Facades\Route;

// controllers
use App\Http\Controllers\Guest\MovieController;


Route::get('/', function () {
    return view('Home');
});

// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)

Route::get('/', [MovieController::class, 'index'])->name('movies.index');
