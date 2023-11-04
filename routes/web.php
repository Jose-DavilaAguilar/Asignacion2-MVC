<?php

use App\Http\Controllers\automovilController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/automoviles', automovilController::class);
//Route::get('automoviles', [automovilController::class, 'index']);
//Route::get('automoviles/create', [automovilController::class, 'create']);
//Route::get('automoviles/message', [automovilController::class, 'message']);