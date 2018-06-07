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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::get('/country', 'CountryController@index')->name('country');
Route::get('country/{country}/states', 'CountryController@getStates');

Route::get('admin-dashboard', ['middleware' => 'admin', function () {
    return view('admin/dashboard');
}])->name('admin-dashboard');
