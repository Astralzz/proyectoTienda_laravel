<?php

use App\Http\Controllers\productosController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

// Manejar las rutas de la pagina con laravel

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

//Ruta por defecto
Route::get('/', function () {
    //Retornamos
    return view('index');
});

//Ruta del inicio
Route::get('/', function () {
    //Retornamos
    return view('contenidos.inicio');
});

//Ruta de la tabla
Route::get('/productos', [productosController::class, 'index'])->name('tablaProductos');

//Ruta del formulario para crear un producto
Route::get('/productos/crear', function () {
    //Retornamos
    return view('contenidos.crear');
});

//crear producto || clase y método
Route::post('/productos/crear', [productosController::class, 'store'])->name('crearProducto');

//Ruta para la vista por defecto de laravel
Route::get('/default_php', function () {
    //Retornamos
    return view('welcome');
});
