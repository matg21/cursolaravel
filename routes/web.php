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


Route::get('/', ['as' => 'home', function () {
    return view('home');
}]);

Route::get('contactame', ['as' => 'contactos', function () {
    return view('contactos');
}]);

Route::get('saludos/{nombre}', ['as' => 'saludos', function ($nombre = "Invitado") {
    $html = "<h2>contenido html</h2>"; 
    $script = "<script>alert('problema xss')</script>";
    $consolas = [
       // "Play Station 4",
       // "Xbox One",
        //"Wii U"
    ];
    return view('saludo', compact('nombre', 'html', 'script', 'consolas'));
}])->where('nombre', "[A-Za-z]+");


