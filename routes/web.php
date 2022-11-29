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
    return view('welcome');
});

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/services',  function () {
    return view('services');
})->name('services');

Route::get('/project',  function () {
    return view('portfolio');
})->name('project');

Route::get('/contact-us',  function () {
    return view('contact');
})->name('contact');

Route::post('/contact-us',  'HomeController@contactUs')->name('contact-us');

Route::get('/about-us',  function () {
    return view('aboutus');
})->name('about-us');

Route::get('/our-team',  function () {
    return view('our-team');
})->name('our-team');
