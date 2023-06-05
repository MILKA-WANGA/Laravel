<?php

use App\Http\Controllers\FirstUser;
use Illuminate\Support\Facades\Route;
//import controller
use App\Http\Controllers\Users;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UserApiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\AddFlashController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\AddMembers;
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
Route::delete("loginView",[LoginController::class,'loginRequest']);
Route::view("logins","loginView");
// Route::view("log","loginSession");
Route::view("profile","profile");

Route::get("/log",function()
{
if(session()->has("user"))
{
    return redirect("profile");
    
}
return view("loginSession");
});


Route::post("loginSession",[SessionController::class,'index']);




//logout
Route::get("/logout",function()
{
if(session()->has("user"))
{
    if(session()->pull("user"));
    
}
return redirect("log");
});
Route::view("addFlashSession","addFlashSession");
Route::post("addMember",[AddFlashController::class,'add']);
Route::view("upload","uploadFile");
Route::post("uploadFile",[UploadController::class,'index']);
//Set languages
Route::get('/lang/{lang}',function($lang)
{
    App::setlocale($lang);
    return view("profileLanguage");
}
);
Route::view("list","usersList");
Route::get("list",[ListController::class,'index']);
//Delete route
Route::get('delete/{id}',[ListController::class,'delete']);
Route::get('edit/{id}',[ListController::class,'edit']);
Route::post("adUsers",[AddMembers::class,'show']);
Route::view("ad","adUsers");

