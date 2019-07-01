<?php

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

Route::get('/', 'PagesController@home');

Route::get('/cart', 'PagesController@cart');

Route::get('/checkout', 'PagesController@checkout');

Route::resource('projects', 'ProjectsController');

Route::get('/about', 'PagesController@about');

Route::resource('shop', 'ProductController');

Route::post('purchases', 'PurchasesController@store');

Route::get('/plans', function () {
    $plans = App\Plan::all();

    return view('plans', compact('plans'));
});

Route::post('subscriptions', 'SubscriptionsController@store');

Route::get('/add-to-cart/{id}', [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);

Route::get('/cart', [
    'uses' => 'ProductController@getCart',
    'as' => 'product.Cart'
]);

/*

Route::get('/', 'PagesController@home');

Route::get('/cart', 'PagesController@cart');

Route::get('/checkout', 'PagesController@checkout');

Route::get('/projects', 'ProjectsController@index');

Route::get('/projects/{project}', 'ProjectsController@show');

Route::get('/projects/create', 'ProjectsController@create');

Route::post('/projects', 'ProjectsController@store');

Route::get('/projects/{project}/edit', 'ProjectsController@edit');

Route::patch('/projects/{project}', 'ProjectsController@update');

Route::delete('/projects/{project}', 'ProjectsController@destroy'); */




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
