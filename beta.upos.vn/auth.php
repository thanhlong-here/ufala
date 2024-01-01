<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::post('/checkemail', 'Auth\LoginController@checkEmail')->name('checkemail');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/login/pass', 'Auth\LoginController@pass')->name('pass');


Route::middleware(['auth'])->group(function () {
    Route::get('dropship', 'Auth\DropshipController@index')->name('dropship.index');
    Route::get('dropship/order', 'Auth\DropshipOrderController@index')->name('dropship.order.index');

    Route::get('dropship/{dropship}/get', 'Auth\DropshipController@getLink')->name('dropship.link');
    Route::get('dropship/{dropship}/share', 'Auth\DropshipController@share')->name('dropship.sharelink');
});
