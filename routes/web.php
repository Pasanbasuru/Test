<?php

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index');

Route::get('/products', 'ProductController@index')->name('products');

Route::get('/products/{product}', 'ProductController@show');

Route::get('/products/create', 'ProductController@create');

Route::get('/category/{id}', 'SearchController@specific_category');

Route::get('/l', 'SearchController@all_category');

Route::get('/m', 'SearchController@main_category');



