<?php

use App\Http\Controllers\Devices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyFirst;
use App\Http\Controllers\DevicesController;
use App\Http\Controllers\WorkersController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("data",[MyFirst::class,'index']);
Route::get("pro",[DevicesController::class,'list']);
Route::post("show",[WorkersController::class,'add']);
Route::put("update",[WorkersController::class,'update']);
Route::delete("delete/{id}",[WorkersController::class,'delete']);
Route::search("search{name}",[WorkersController::class,'search']);