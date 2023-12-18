<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $array [] = "Prince";
    $array [] = "Magnus";
    $array [] = "Nakamura";

    $array2['names'] = $array;

    return view('welcome', $array2);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/user', function () {

    return view('user');
});
 