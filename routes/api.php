<?php

use Illuminate\Http\Request;

Route::get('/users', function() {
    if(rand(1, 10) < 3) {
        abort(500, 'We could not retrieve the users');
    }
    return factory('App\User', 10)->make();
});
