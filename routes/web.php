<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', [WelcomeController::class, 'index']);

Route::get('/contact', [ContactController::class, 'show']);
// Kapcsolati űrlap adatainak elküldése
Route::post('/contact', [ContactController::class, 'store']);

Route::get('/home', function () {
    return view('home');
});

Route::get('/blog', [BlogController::class, 'index']);