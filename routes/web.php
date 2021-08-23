<?php

use App\Http\Controllers\MessagesController;
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

Route::get('/', [PageController::class, 'home'])->name('home')->middleware('example');

Route::get('contactame', [PageController::class, 'contactos'])->name('contactos');
Route::post('contacto', [PageController::class, 'mensajes']);

Route::get('saludos/{nombre}', [PageController::class, 'saludos'])->name('saludos')->where('nombre', "[A-Za-z]+"); 

Route::resource('mensajes', MessagesController::class);

/* Route::get('mensajes/create', [MessagesController::class, 'create'])->name('messages.create');
Route::get('mensajes', [MessagesController::class, 'index'])->name('messages.index');
Route::post('mensajes', [MessagesController::class, 'store'])->name('messages.store');

Route::get('mensajes/{id}', [MessagesController::class, 'show'])->name('messages.show');
Route::get('mensajes/{id}/edit', [MessagesController::class, 'edit'])->name('messages.edit');
Route::put('mensajes/{id}', [MessagesController::class, 'update'])->name('messages.update');


Route::delete('mensajes/{id}', [MessagesController::class, 'destroy'])->name('messages.destroy'); */



