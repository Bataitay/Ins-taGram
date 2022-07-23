<?php

use Illuminate\Support\Facades\Route;

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

Route::get('index', function () {
    return view('Front-End.index');
});
Route::get('profile', function () {
    return view('Front-End.profiles.index');
});
Route::get('test', function () {
    return view('welcome');
});
