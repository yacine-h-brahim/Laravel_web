<?php

use App\Http\Controllers\DatabaseController;
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

Route::get('/', ['controller1@home']);
Route::get('/page1', function () {
    return view('page1');
});
Route::get('/page2', function () {
    return view('page2');
});

Route::get('/users', [DatabaseController::class, "getUsers"]);
Route::get('/login', [DatabaseController::class, "login"]);
Route::post('/insertUser', [DatabaseController::class, "insertUser"]);
Route::delete('/delete', [DatabaseController::class, "deleteUser"]);
