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
use App\Http\Controllers\UserController;
use App\Http\Controllers\SignUpController;

Route::get('/', function () {

    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/user',[UserController::class,'index']);
Route::get('/user/{id}',[UserController::class,'index']);

Route::get('/signup' ,[SignUpController::class,'get']);
Route::post('/signup' ,[SignUpController::class,'post']);

/* Route::get('/user', function () {

    return view('user');
}) */;
 