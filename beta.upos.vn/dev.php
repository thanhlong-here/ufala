<?php

use Illuminate\Support\Facades\Route;

Route::prefix('comp')->group(function () {

  Route::post('editor/imgupload', 'component\EditorController@imgUpload')->name('editor.imgupload');

  Route::post('tmp/upload', 'component\UploadController@tmp')->name('tmp.upload');
  Route::post('tmp/remove/{media}', 'component\UploadController@remove')->name('tmp.remove');

  Route::post('search/{model}', 'Dev\SearchController@find')->name('search.find');

  //Builder Website
  Route::get('builder', 'Component\BuilderController@work')->name('builder.work');
//  Route::get('builder/preview', 'Component\BuilderController@preview')->name('builder.preview');


  Route::post('search/{model}', 'Component\SearchController@find')->name('search.find');

  Route::post('search/{model}/clear', 'Dev\SearchController@clear')->name('search.clear');


});
