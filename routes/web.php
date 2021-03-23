<?php

use App\Http\Controllers\CareerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


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

Route::get('/admin', function(){
    return view('admin/index');
});
/*----------------------------------Student---------------------------------*/

/*Mostrar*/
Route::get('/show/student', [StudentController::class, 'index']);

/*Mostrar por ID*/
Route::get('/show/student/{student}', [StudentController::class, 'show']);

/*Almacenar*/
Route::post('/create/student', [StudentController::class, 'create']);

/*Editar por ID*/
Route::get('/edit/student/{student}', [StudentController::class, 'edit']);

/*Almacenar edicion */
Route::put('/edit/student/{student}', [StudentController::class, 'update']);

/* */
Route::delete('/delete/student/{student}', [StudentController::class, 'delete']);


/*-----------------------------------Career---------------------------------*/

/*Mostrar*/
Route::get('/show/career', [CareerController::class, 'showall']);

/*Mostrar por ID*/
Route::get('/show/career/{career}', [CareerController::class, 'show']);

Route::get('/template', function(){
    return view('template/template1');
});

