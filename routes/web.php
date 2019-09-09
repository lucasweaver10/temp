<?php

Route::resource('pages', 'PagesController');

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
