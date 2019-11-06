<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return view('items/list');
});

Route::get('items', function() {
    return view('items/list');
});

Route::get('items/form', function() {
    return view('items/form');
});

Route::get('requirements', function() {
    return view('requirements/list');
});

Route::get('requirements/form', function() {
    return view('requirements/form');
});