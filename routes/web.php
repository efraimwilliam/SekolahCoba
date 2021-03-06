<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('/Dashboard');
})->middleware('admin');


Route::get('/login', [LoginController::class, 'LoginPage']);

Route::post('/masuk', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'registerakun']);

Route::post('/daftar', [RegisterController::class, 'register']);

