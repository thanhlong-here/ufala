<?php

use Illuminate\Support\Facades\Route;

Route::get('login', 'Admin\PageController@login')->name('admin.login');

Route::middleware(['admin'])->group(function () {
  Route::get('/', 'Admin\PageController@index')->name('admin.index');
  Route::get('{prefix}.categories', 'CategoryController@index')->name('categories.prefix');
  Route::get('{prefix}.contacts', 'ContactController@index')->name('contacts.prefix');
  Route::get('{prefix}.contacts/create', 'ContactController@create')->name('contacts.prefix.create');
  
  Route::resource('dropships', 'Admin\DropshipController')->except([
    'destroy'
  ]);

  Route::resource('dropship-orders', 'Admin\DropshipOrderController');

  Route::resources([
    'users'        =>  'UserController',
    'orders'       =>  'OrderController',
    'transactions' =>  'TransactionController',
    'contacts'     =>  'ContactController',
    'posts'        =>  'PostController',
    'products'     =>  'ProductController',
    'categories'   =>  'CategoryController',
  ]);
});
