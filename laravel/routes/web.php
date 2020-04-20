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

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::group(['prefix'=>'/contact'],function (){

    Route::post('/submit','ContactController@submit')->name('contact-form');

    Route::get('/all','ContactController@all')->name('contact-all');

    Route::get('/one/{id}','ContactController@one')->name('contact-one');

    Route::get('/one/{id}/update','ContactController@update')->name('contact-update');

    Route::post('/one/{id}/update','ContactController@updateSubmit')->name('contact-update-submit');

    Route::get('/delete/{id}','ContactController@delete')->name('contact-delete');

});


