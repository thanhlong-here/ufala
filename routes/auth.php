<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::post('/checkemail', 'Auth\LoginController@checkEmail')->name('checkemail');

Route::post('/firebase', 'Auth\LoginController@firebase')->name('login.firebase');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/login/pass', 'Auth\LoginController@pass')->name('pass');


Route::middleware(['auth'])->group(function () {
    Route::get('dropship', 'Auth\DropshipController@dashboard')->name('dropship.dashboard');
    Route::get('dropship/products', 'Auth\DropshipController@index')->name('dropship.index');
    Route::get('dropship/transaction', 'Auth\DropshipController@transaction')->name('dropship.transaction');
    Route::get('dropship/camp', 'Auth\DropshipController@camp')->name('dropship.report.camp');
    Route::get('dropship/order', 'Auth\DropshipController@order')->name('dropship.report.order');
   
   
    Route::get('dropship/{dropship}/get', 'Auth\DropshipController@getLink')->name('dropship.link');
    Route::get('dropship/{dropship}/share', 'Auth\DropshipController@share')->name('dropship.sharelink');

    Route::post('dropship/withdraw', 'Auth\DropshipController@withdraw')->name('dropship.withdraw');
});
