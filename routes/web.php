<?php

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
//Pass data in the welcome page
Route::get('/{name}', function ($name) {
   
    return view('user',[$name=>$name]);
});
Route::get('/about',function()
{
    return view('about');
});
//Short code
Route::view("contact","contact");