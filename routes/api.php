<?php

use Illuminate\Http\Request;

Route::namespace('Api')->group(function() {
    Route::get('/users', 'UsersController@index');
});

