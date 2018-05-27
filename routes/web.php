<?php

use Twilio\Rest\Client;

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

Route::get('pretraga', 'SearchController@search')->name('search');
Route::get('pretraga/mapiranje', 'SearchController@createMapping')->name('search-mapping');
Route::get('pretraga/indeksiranje', 'SearchController@indexDocuments')->name('search-indexing');

Route::get('test', function () {
    $data = \App\Models\Local\Vesti::all();
    foreach ($data as $item) {
        $item->delete();
    }
});


Route::get('sms', function() {
    $sid = "AC6a52ee98ed0e8992f1aaa26902c9b6b9"; // Your Account SID from www.twilio.com/console
    $token = "01a6808009096ab2641a7427078fe3da"; // Your Auth Token from www.twilio.com/console
    //15045027186
    $client = new Client($sid, $token);
    $numbers = [
        '+381628448816','+381645637112', '+381616202214', '+381644513163', '+381644343897', '+381607636111',
        '+381652695209', '+381601662661', '+381656076774', '+381643757525', '+381698893110', '+381655419360', '+381642970767'
    ];

    //$numbers = ['+381691014959'];
    collect($numbers)->each(function($broj) use ($client) {
        $client->messages->create(
            $broj, // Text this number
            array(
                'from' => '15045027186', // From a valid Twilio number
                'body' => '27. maja izmedju 19:30h - 20:30h je planirano iskljucenje elektricne energije na adresi Savska br. 5. Vasa eUprava'
            )
        );
    });

});

Route::get('pasos', function() {
    $sid = "AC6a52ee98ed0e8992f1aaa26902c9b6b9"; // Your Account SID from www.twilio.com/console
    $token = "01a6808009096ab2641a7427078fe3da"; // Your Auth Token from www.twilio.com/console
    //15045027186
    $client = new Client($sid, $token);
    $client->account->calls->create(
        '+381691014959',
        '15045027186',
        array(
            "url" => "https://mikicaivosevic.info/voice.xml"
        )
    );
});