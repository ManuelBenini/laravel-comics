<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/personaggi', function () {
    return view('characters');
})->name('characters');

Route::get('/collezionabili', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/fumetti', function () {

    $data = config('comics');

    return view('comics', ['comics'=>$data]);
})->name('comics');

Route::get('/fan', function () {
    return view('fans');
})->name('fans');

Route::get('/giochi', function () {
    return view('games');
})->name('games');

Route::get('/film', function () {
    return view('movies');
})->name('movies');

Route::get('/novità', function () {
    return view('news');
})->name('news');

Route::get('/negozio', function () {
    return view('shop');
})->name('shop');

Route::get('/serieTV', function () {
    return view('tv');
})->name('tv');

Route::get('/video', function () {
    return view('videos');
})->name('videos');
