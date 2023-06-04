<?php

use App\Http\Controllers\FirstUser;
use Illuminate\Support\Facades\Route;
//import controller
use App\Http\Controllers\Users;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UserApiController;
use GuzzleHttp\Middleware;



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
Route::get("viewUsers",[UsersController::class,'workLoad']);
//Call the FormController
Route::post("formView",[FormController::class,'getData']);
//Call tjhe formView.blade.php
// The first formView is the path and the second is the page
Route::view("login","formView");
Route::view("home","home");
Route::view("noaccess","noaccess");
//Group  middleware
Route::group(["Middleware"=>["groupAge"]],function()
{
    Route::view("contact","contact");
    Route::view("home","home");
    
});
// Route Middleware
Route::view("inner","inner")->Middleware("ageProtects");
Route::get("firstUser",[FirstUser::class,'index']);
Route::get("users",[UserController::class,'getData']);
Route::get("hello",[UserApiController::class,'index']);
Route::view("logins","loginView");
Route::post("loginView",[LoginController::class,'login']);



