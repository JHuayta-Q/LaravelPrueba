<?php

use App\Http\Controllers\CareerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use PhpParser\Node\Expr\FuncCall;

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

/*----------------------------------Student---------------------------------*/

/*Mostrar*/
Route::get('/studentlist', [StudentController::class, 'index'])->name('studentlist.index');

/* Mostrar Formulariode Registro */
Route::get('/studentlist/form', function(){
    return view('studentform/crear');
})->name('studentlist.form');
/*Mostrar por ID*/
//Route::get('/show/student/{student}', [StudentController::class, 'show']);

/*Almacenar*/
Route::post('/studentlist', [StudentController::class, 'create'])->name('studentlist.create');

/*Editar por ID*/
Route::get('/studentlist/{student}', [StudentController::class, 'edit'])->name('studentlist.edit');

/*Almacenar edicion */
Route::put('/studentlist/{student}', [StudentController::class, 'update'])->name('studentlist.update');

/* */
//Route::delete('/delete/student/{student}', [StudentController::class, 'delete']);
