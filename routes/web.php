<?php

Route::get('/login', 'LoginController@showLoginForm')->name('login');
Route::post('/login', 'LoginController@login');

Route::get('/now', 'NowController@index')->name('now.index');

Route::prefix('blog')->group(function() {
    Route::get('/', 'BlogController@index')->name('blog.index');
    Route::get('archive', 'BlogController@archive')->name('blog.archive');
    Route::get('{post}', 'BlogController@show')->name('blog.show');
});

Route::middleware('auth')->group(function() {
    Route::get('logout', 'LoginController@logout')->name('logout');

    Route::prefix('admin')->group(function() {
        Route::get('/', 'AdminController@index')->name('admin');

        Route::prefix('posts')->group(function() {
            Route::get('/', 'AdminController@posts')->name('admin.post.index');
            Route::get('create', 'PostController@create')->name('admin.post.create');
            Route::post('create', 'PostController@save')->name('admin.post.save');
            Route::get('{post}/edit', 'PostController@edit')->name('admin.post.edit');
            Route::post('{post}/edit', 'PostController@update')->name('admin.post.update');
            Route::post('{post}/delete', 'PostController@delete')->name('admin.post.delete');
        });
    });
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

