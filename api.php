<?php

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//GET untuk mendapatkan user by id
Route::get('user/{id}', [UserController::class, 'getUserById']);

//GET untuk mendapatkan semua user
Route::get('users', [UserController::class, 'getAllUsers']);

//POST untuk menambahkan data user
Route::post('users', [UserController::class, 'createUser' ]);

//POST untuk mengupdate data user
Route::put('user/{id}', [UserController::class, 'updateUser']);

//DELETE untuk menghapus data user
Route::delete('user/{id}', [UserCOntroller::class, 'deleteUser']);
