<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'landingpage'], function () {
    Route::resources([
        'builder'    =>  'Api\LandingPageTempController',
        'Create'    =>  'Api\LandingPageController',
        'categories' => 'Api\CategoriesController'
    ]);
});
Route::group(['prefix' => 'dropshipping'], function () {
    Route::resources([
        'pr'    =>  'Api\ProductDropshippingController',
    ]);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('landingpage/template',[\App\Http\Controllers\Api\LandingPageController::class,'getListTemplate'])->name('landingpage.listTemplate');