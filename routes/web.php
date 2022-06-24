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

Route::get('/', 'PageController@index')->name('home');

Route::get('/personaggi', 'PageController@characters')->name('characters');

Route::get('/collezionabili', 'PageController@collectibles')->name('collectibles');

Route::get('/fumetti', 'PageController@comics')->name('comics');

Route::get('/fan', 'PageController@fans')->name('fans');

Route::get('/giochi', 'PageController@games')->name('games');

Route::get('/film', 'PageController@movies')->name('movies');

Route::get('/novità', 'PageController@news')->name('news');

Route::get('/negozio', 'PageController@shop')->name('shop');

Route::get('/serieTV', 'PageController@tv')->name('tv');

Route::get('/video', 'PageController@videos')->name('videos');