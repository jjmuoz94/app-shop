<?php

Route::get('/', 'App\Http\Controllers\ejemploController@welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
