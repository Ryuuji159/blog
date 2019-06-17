<?php

use Illuminate\Http\Request;

Route::get('/users', function() {
    return factory('App\User', 10)->make();
});
