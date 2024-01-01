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

Route::get('/getlink','Web\PageController@getLink' )->name('dropship.link');
Route::get('/', 'Web\PageController@home')->name('home');

Route::prefix('lp')->group(function () {
    Route::get('widget/links', 'Web\Landingpage\LandingPageController@widgetLinks')->name('lp.widget.links');
});

Route::prefix('ds')->middleware(['link.short'])->group(function () {
    Route::get('{short}', 'Web\DropshipController@share')->name('dropship.share');
    Route::get('{short}/cart', 'Web\DropshipController@cart')->name('dropship.cart');
    Route::get('{short}/order', 'Web\DropshipController@order')->name('dropship.order');
    Route::get('{short}/order/{order}', 'Web\DropshipController@orderEnd')->name('dropship.order.end');

    Route::post('{short}/order/submit', 'Web\DropshipController@orderSubmit')->name('dropship.order.submit');
});

Route::middleware(['auth'])->group(function () {
    Route::group(['prefix' => 'landingpage'], function () {
        Route::resources([
            'create'    =>  'Web\Landingpage\LandingPageController',
        ]);
        Route::get('/report','Web\Landingpage\LandingPageController@report' )->name('landingpage.report');
        Route::get('/recycle','Web\Landingpage\LandingPageController@recycle' )->name('landingpage.recycle');
        Route::get('/cloneLanding/{path}','Web\Landingpage\BuilderController@cloneLanding' )->name('landingpage.clone');
    });
});
Route::get('template/preview/{id?}', 'Admin\Landingpage\BuilderController@preview')->name('admin.builder.preview');
Route::get('{prefix?}.preview/{id?}', 'Admin\Landingpage\BuilderController@homePreview')->name('template.preview');
Route::get('landingpage-builder/{path?}/{dv?}', 'Web\Landingpage\BuilderController')->where('path', '^[a-zA-Z0-9_.-]*$')->name('landingpage.work');
Route::group(['prefix' => 'landingpage'], function () {
    Route::get('/builder/preview/{id?}', 'Web\Landingpage\BuilderController@preview')->name('builder.preview');
    Route::post('/builder/update','Web\Landingpage\BuilderController@update' )->name('builder.update');
    Route::get('/builder/detail-temp','Web\Landingpage\BuilderController@getDetailLandingpageTemp' )->name('builder.detail');

    Route::get('/show/{id}','Web\Landingpage\LandingPageController@index' )->name('showLandingPage');
});


Route::group(['prefix' => 'ldp'], function () {
    Route::get('/{id?}', 'Web\Landingpage\LandingPageController@publish')->name('landingpage.publish');
});
Route::get('landingpage/template',[\App\Http\Controllers\Admin\Landingpage\TemplateController::class,'getListTemplate'])->name('landingpage.listTemplate');
Route::get('landingpage/element',[\App\Http\Controllers\Admin\Landingpage\ElementController::class,'getListElement'])->name('landingpage.listElement');