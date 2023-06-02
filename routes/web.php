<?php

use Illuminate\Support\Facades\Route;
//import controller
use App\Http\Controllers\Users;

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
//Pass data
Route::get("/", function () {
    
    return view('welcome');
});
Route::get('/about',function()
{
    return view('about');
});
//Short code
Route::view("contact","contact");
//Define controllers and passed data in controller;
//Route::get("users/{user}",[Users::class,'index']);
Route::view("users","users");