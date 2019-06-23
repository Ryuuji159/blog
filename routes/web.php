<?php
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/now', function () {
    return view('now');
})->name('now');

Route::get('/blog', 'BlogController@index')->name('blog.index');
Route::get('blog/archive', 'BlogController@archive')->name('blog.archive');
Route::get('/blog/{post}', 'BlogController@show')->name('blog.show');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/setup', function () {
    return view('setup');
})->name('setup');
