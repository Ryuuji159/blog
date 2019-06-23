<?php

Route::get('/login', 'LoginController@showLoginForm')->name('login');
Route::post('/login', 'LoginController@login');

Route::get('/now', 'NowController@index')->name('now.index');

Route::get('/blog', 'BlogController@index')->name('blog.index');
Route::get('blog/archive', 'BlogController@archive')->name('blog.archive');
Route::get('/blog/{post}', 'BlogController@show')->name('blog.show');

Route::middleware('auth')->group(function() {
    Route::get('/logout', 'LoginController@logout')->name('logout');
    Route::get('/admin', 'AdminController@index')->name('admin');
});

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/setup', function () {
    return view('setup');
})->name('setup');

