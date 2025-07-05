<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductsController;
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
    return view('welcome');
});

Route::get('/user', [UsersController::class, 'index']);
Route::post('/user', [UsersController::class, 'create']);
Route::get('/user/{id}/edit', [UsersController::class, 'edit']);
Route::put('/user/{id}', [UsersController::class, 'update']);
Route::delete('/user/{id}', [UsersController::class, 'delete']);

Route::get('/{name}/{id}', [UsersController::class, 'findUserById'])
    ->where('name', '[a-zA-Z]+')
    ->where('id', '[0-9]+');


Route::get('/product', [ProductsController::class, 'index']);

Route::get('/uss', [UsersController::class, 'listTestData']);
    // ->name('users.listTestData');
