<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [UserController::class, 'index']);
Route::get('/user', [UserController::class, 'user']);
Route::get('/post', [UserController::class, 'post']);
