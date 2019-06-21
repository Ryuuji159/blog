<?php
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/now', function () {
    return view('now');
})->name('now');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/setup', function () {
    return view('setup');
})->name('setup');
