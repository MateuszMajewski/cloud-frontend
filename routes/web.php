<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayingController;

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

Route::get('/', [PlayingController::class, 'index']);
Route::get('/statistics', [PlayingController::class, 'statistics']);
Route::get('/playing/create', [PlayingController::class, 'create']);
Route::get('/playing/edit/{id}', [PlayingController::class, 'edit']);

Route::delete('/playing/{id}', [PlayingController::class, 'destroy']);
Route::post('/playing', [PlayingController::class, 'store']);
Route::put('/playing/{id}', [PlayingController::class, 'update']);
