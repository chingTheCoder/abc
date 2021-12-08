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
    return view('index');
});


Route::get('/bathroom', function () {
    return view('bathroom');
});

Route::get('/surface', function () {
    return view('surface');
});

Route::get('/kitchen', function () {
    return view('kitchen');
});

Route::get('/lights', function () {
    return view('lights');
});

Route::get('/showroom', function () {
    return view('showroom');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/kohler', function () {
    return view('kohler');
});

Route::get('/bathx', function () {
    return view('bathx');
});