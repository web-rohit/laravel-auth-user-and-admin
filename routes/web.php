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
Route::get('verify/{token}', 'Auth\RegisterController@verify')->name('verify');
Route::get('/country', 'CountryController@index')->name('country');
Route::get('country/{country}/states', 'CountryController@getStates');
Route::get('/changePassword','HomeController@showChangePasswordForm')->name('changePassword');
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');
Route::get('/profile/','HomeController@profile')->name('profile');



Route::get('dashboard', [function () {
    return view('admin/dashboard');
}])->name('dashboard');

Route::middleware(['admin'])->group(function () {
    Route::get('users', 'HomeController@users')->name('users');
    Route::get('users-delete/{id}', 'HomeController@delete')->name('users-delete');
});
