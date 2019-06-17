<?php

use Illuminate\Http\Request;

Route::namespace('Api')->group(function() {
    Route::get('/users', 'UsersController@index');
    Route::get('/users/all', 'UsersController@all');
    Route::get('/users/{user}', 'UsersController@show');
    Route::put('/users/{user}', 'UsersController@update');
    Route::delete('/users/{user}', 'UsersController@delete');
});

