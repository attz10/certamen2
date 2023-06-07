<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfesoresController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\AdministradoresController;
use App\Http\Controllers\PropuestasController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

/* Route::get('/login',[HomeController::class,'login'])->name('home.login'); */

//routes de home
Route::get('/',[HomeController::class,'index'])->name('home.index');

//routes de estudiantes
Route::get('/estudiantes',[EstudiantesController::class,'index'])->name('estudiantes.index');
Route::post('/estudiantes',[EstudiantesController::class,'store'])->name('estudiantes.store');

//routes de admin
Route::get('/administradores',[AdministradoresController::class,'index'])->name('administradores.index');
Route::get('/administradores/tablaprofesores',[AdministradoresController::class,'index_profesores'])->name('administradores.tablaprofesores');
Route::get('/administradores/tablaestudiantes',[AdministradoresController::class,'index_estudiantes'])->name('administradores.tablaestudiantes');

//routes de profesores
Route::get('/profesores',[ProfesoresController::class,'index'])->name('profesores.index');
Route::post('/profesores',[ProfesoresController::class,'store'])->name('profesores.store');

//routes de propuestas
Route::get('/propuestas',[PropuestasController::class,'index'])->name('propuestas.index');
Route::post('/propuestas',[PropuestasController::class,'store'])->name('propuestas.store');
Route::get('/propuestas/{propuesta}', [PropuestasController::class, 'descargar'])->name('propuestas.download');