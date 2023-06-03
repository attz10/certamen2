<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfesoresController;

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

//routes de profesores
Route::get('/profesores',[ProfesoresController::class,'index'])->name('profesores.index');
Route::post('/profesores',[ProfesoresController::class,'store'])->name('profesores.store');