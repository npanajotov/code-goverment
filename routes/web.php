<?php


Route::get('/', 'HomeController@index')->name('home');
Route::get('e-usluge', 'HomeController@services')->name('services');
Route::get('pomoc', 'HomeController@help')->name('help');
Route::get('kontakt', 'HomeController@contact')->name('contact');

Route::post('search', 'HomeController@search')->name('search');

Route::get('auth', 'AuthController@index');
Route::post('auth', 'AuthController@login')->name('login');
Route::post('register', 'AuthController@register')->name('register');
Route::get('logout', 'AuthController@logout')->name('logout');

Route::group(['prefix' => '/dashboard', 'middleware' => ['auth']], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::get('ko-sam-ja', 'DashboardController@whoIam')->name('whoIam');
    Route::get('profil', 'DashboardController@profile')->name('profile');
    Route::post('profil', 'DashboardController@updateProfile')->name('profile');
    Route::get('obavestenja', 'DashboardController@notifications')->name('notification');
    Route::get('vesti', 'DashboardController@news')->name('news');
    Route::get('e-forma', 'DashboardController@changeLocation')->name('change-location');
    Route::get('kalendar', 'DashboardController@calendar')->name('calendar');
});
