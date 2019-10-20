<?php

Route::get('/login', 'LoginController@showLoginForm')->name('login');
Route::post('/login', 'LoginController@login');

Route::get('/now', 'NowController@index')->name('now.index');
Route::get('/projects', 'ProjectController@index')->name('project.index');
Route::get('/setups', 'SetupController@index')->name('setups.index');

Route::get('/about', function () {
    return view('about');
})->name('about');

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

        Route::prefix('now')->group(function() {
            Route::get('/', 'AdminController@now')->name('admin.now.index');
            Route::get('create', 'NowController@create')->name('admin.now.create');
            Route::post('create', 'NowController@save')->name('admin.now.save');
            Route::get('{now}/edit', 'NowController@edit')->name('admin.now.edit');
            Route::post('{now}/edit', 'NowController@update')->name('admin.now.update');
            Route::post('{now}/delete', 'NowController@delete')->name('admin.now.delete');
        });
        
        Route::prefix('projects')->group(function() {
            Route::get('/', 'AdminController@projects')->name('admin.project.index');
            Route::get('create', 'ProjectController@create')->name('admin.project.create');
            Route::post('create', 'ProjectController@save')->name('admin.project.save');
            Route::get('{project}/edit', 'ProjectController@edit')->name('admin.project.edit');
            Route::post('{project}/edit', 'ProjectController@update')->name('admin.project.update');
            Route::post('{project}/delete', 'ProjectController@delete')->name('admin.project.delete');
        });

        Route::prefix('setups')->group(function() {
            Route::get('/', 'AdminController@setups')->name('admin.setup.index');
            Route::get('create', 'SetupController@create')->name('admin.setup.create');
            Route::post('create', 'SetupController@save')->name('admin.setup.save');
            Route::get('{setup}/edit', 'SetupController@edit')->name('admin.setup.edit');
            Route::post('{setup}/edit', 'SetupController@update')->name('admin.setup.update');
            Route::post('{setup}/delete', 'SetupController@delete')->name('admin.setup.delete');
        });
    });
});

Route::get('/', function () {
    return view('index');
})->name('index');
