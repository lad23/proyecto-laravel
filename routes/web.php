<?php

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


//rutas
Route::get('/', [HomeController::class, 'index']);
Route::get('/sobrenosotros', [HomeController::class, 'sobrenosotros']);
Route::get('/contacto', [HomeController::class, 'contacto']);
Route::get('/faq', [HomeController::class, 'faq']);


/*
TAREA PARA DESARROLLAR:

CREAR ruta, controlador


UNA RUTA /categories  QUE CONECTE CON UN CONTROLADOR LLAMADO eventcategoryController
QUE RETORNE UNA VISTA LALMADA events-categories.blade.php EN EL CUAL SE LISTEN TODAS
LAS CATEGORIAS QUE TENEMOS EN LA BASE DE DATOS


*/