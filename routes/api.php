<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeloController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BookController;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('halo', function(){
    return["me" => "Gantenk"];
});

//Route::get('halocontroller',[HeloController::class, 'index']);
//Route::get('halocontroller',[HeloController::class, 'show']);
//Route::post('halocontroller',[HeloController::class, 'store]);
//Route::put('halocontroller',[HeloController::class, 'update]);
//Route::delete('halocontroller',[HeloController::class, 'destroy]);
Route::resource('halocontroller',HeloController::class);
Route::resource('siswa',SiswaController::class);
Route::resource('books',BookController::class);
