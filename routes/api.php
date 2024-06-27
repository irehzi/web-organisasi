<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengurusController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/pengurus','Pengurusontroller@apiIndex');
Route::get('/pengurus','PengurusController@apiShow');
Route::get('/pengurus','PengurusController@apiUpdate');
Route::get('/pengurus','PengurusController@apiStore');
Route::get('/pengurus','PengurusController@apiDelete');