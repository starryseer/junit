<?php
Route::get('index','TestController@index');

Route::get('/junit', 'JunitController@index');
Route::post('/junit', 'JunitController@store')->name('junit.store');
