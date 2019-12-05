<?php

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
Route::get('/chart',function() {return view('pages.main-chart');})->name('chart');
Route::get('/escrow',function() {
    return view('pages.escrow');
})->name('escrow');
Route::get('/portfolio',function() {
    return view('pages.portfolio');
})->name('portfolio');
Route::get('/blog',function() {
    return view('pages.blog');
})->name('blog');
Route::get('/law-firm',function() {
    return view('pages.law-firm');
})->name('law-firm');
Route::get('/lawyer',function() {
    return view('pages.lawyer');
})->name('lawyer');
Route::get('/broker',function() {
    return view('pages.broker');
})->name('broker');

Route::get('/page',function() {
    return view('pages.thepage');
})->name('page');
Route::get('/team',function() {
    return view('pages.team');
})->name('team');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
