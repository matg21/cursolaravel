<?php

use App\Http\Controllers\PageController;
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

/* 
Route::get('/', ['as' => 'home', function () {
    return view('home');
}]); */

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('contactame', [PageController::class, 'contactos'])->name('contactos');
Route::post('contacto', [PageController::class, 'mensajes']);

Route::get('saludos/{nombre}', [PageController::class, 'saludos'])->name('saludos')->where('nombre', "[A-Za-z]+"); 





