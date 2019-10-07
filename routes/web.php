<?php

Route::resource('pages', 'PagesController');

Route::get('/', 'PagesController@index');

Route::get('/venue', 'PagesController@venue');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

Route::resource('projects', 'ProjectsController');

Route::resource('plans', 'SubscriptionsController');

Route::resource('courses', 'CoursesController');

Route::resource('shop', 'ProductController');

Route::post('purchases', 'PurchasesController@store');

Route::post('subscriptions', 'SubscriptionsController@store');

Route::get('/add-to-cart/{id}', [
   'uses' => 'ProductController@getAddToCart',
   'as' => 'product.addToCart'
  ]);

Route::get('/cart', [
    'uses' => 'ProductController@getCart',
    'as' => 'product.Cart'
   ]);

Auth::routes();


