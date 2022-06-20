<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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
//Route::get('/', [HomeController::class, 'index']);
Route::get('/sobrenosotros', [HomeController::class, 'sobrenosotros']);
Route::get('/contacto', [HomeController::class, 'contacto']);
Route::get('/faq', [HomeController::class, 'faq']);
Route::get('/categories', [HomeController::class, 'categories']);


/*
TAREA PARA DESARROLLAR:

CREAR ruta, controlador


UNA RUTA /categories  QUE CONECTE CON UN CONTROLADOR LLAMADO eventcategoryController
QUE RETORNE UNA VISTA LALMADA events-categories.blade.php EN EL CUAL SE LISTEN TODAS
LAS CATEGORIAS QUE TENEMOS EN LA BASE DE DATOS


*/
Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/home', [HomeController::class, 'home'])->name('home');


Route::get('admin/events', [EventController::class, 'index']);
