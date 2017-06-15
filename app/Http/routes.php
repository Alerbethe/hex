<?php
Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/find', 'StaticPagesController@find')->name('find');
Route::get('/theme', 'StaticPagesController@theme')->name('theme');
Route::get('signup', 'UsersController@create')->name('signup');
Route::resource('users', 'UsersController');
