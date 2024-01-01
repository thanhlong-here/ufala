<?php

use App\Http\Controllers\Admin\Landingpage\CategoriesController;
use Illuminate\Support\Facades\Route;

Route::get('login', 'Admin\PageController@login')->name('admin.login');

Route::middleware(['admin'])->group(function () {
  Route::get('/', 'Admin\PageController@index')->name('admin.index');
  Route::get('{prefix}.categories', 'CategoryController@index')->name('categories.prefix');


  Route::get('{prefix}.contacts', 'ContactController@index')->name('contacts.prefix');
  Route::get('{prefix}.contacts/create', 'ContactController@create')->name('contacts.prefix.create');

  Route::resources([
    'users'        =>  'UserController',
    'orders'       =>  'OrderController',
    'transactions' =>  'TransactionController',
    'contacts'     =>  'ContactController',
    'posts'        =>  'PostController',
    'products'     =>  'ProductController',
    'dropships'    =>  'Admin\DropshipController',
    'categories'   =>  'CategoryController',
    'templates'    =>  'Admin\Landingpage\TemplateController',
    'ldpcategory'    =>  'Admin\Landingpage\CategoriesController',
  ]);
    Route::get('/listcategories',[CategoriesController::class,'getListCategories'])->name('admin.listcategories');
    Route::get('landingpage-builder/{path?}/{dv?}', 'Admin\Landingpage\BuilderController')->where('path', '^[a-zA-Z0-9_.-]*$')->name('admin.ldp-builder');
    Route::post('/builder/update','Admin\Landingpage\BuilderController@update' )->name('admin.builder.update');
});
