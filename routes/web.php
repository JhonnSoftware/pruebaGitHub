<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/primeraPagina', function(){
    return view('prueba.index');
});

Route::get('/pruebaJhonn', function(){
    return view('prueba.sad');
});

Route::get('/rama02', function(){
    return view('prueba.rama02');
});
