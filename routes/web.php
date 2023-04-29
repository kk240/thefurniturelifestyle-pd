<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/services',  function () {
    return view('services');
})->name('services');

Route::get('/project',  function () {
    return view('portfolio');
})->name('project');

Route::get('/blogs', 'BlogController@index')->name('blogs');
Route::get('/blogs/{id}', 'BlogController@display')->name('blog.display');
Route::post('/add-blog', 'BlogController@addBlog')->name('addBlog');

Route::get('/contact-us',  function () {
    return view('contact');
})->name('contact');

Route::post('/contact-us',  'HomeController@contactUs')->name('contact-us');

Route::post('/send-message', 'HomeController@sendEmail')->name('contact.send');

Route::post('/sub_submit', 'SubscribersController@store')->name('submit');

Route::get('/about-us',  function () {
    return view('aboutus');
})->name('about-us');

Route::get('/our-team',  function () {
    return view('our-team');
})->name('our-team');


//Admin/////////////////////////////////////////////
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

//User////////////////////////
Route::group(['prefix' => 'user', 'as' => 'user.', 'namespace' => 'User', 'middleware' => ['auth', 'user']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

// Route::get('/login', 'Authcontroller@index')->name('login');
// Route::get('/register', 'Authcontroller@register_show')->name('register');
// Route::post('/login', 'Authcontroller@login')->name('do_login');
// //register
