<?php

use App\Http\Controllers\homecontroller;
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

Route::post('/', [homecontroller::class ,'enviar'])->name('enviar');

Route::get("leandro",[homecontroller::class,'men'])->name('leandro');

Route::get('/', [homecontroller::class,'mostrar']);

Route::DELETE("eliminar{id}",[homecontroller::class,"delete"])->name('eliminar');

Route::get('editar/{id}',[homecontroller::class,'editar'])->name('editar');

Route::put('modificar{id}/',[homecontroller::class,'update'])->name('modificar');
