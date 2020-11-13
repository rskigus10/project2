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

Route::get('/', function () {
    return view('welcome');
});
route::get('/hal1', function(){
    return view("hal1");
});
route::get('/hal2', function(){
    return view("hal2");
});
route::get('/hal3', function(){
    return view("hal3");
});
route::get('/hal4', function(){
    return view("hal4");
});