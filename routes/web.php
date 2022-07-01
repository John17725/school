<?php

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/formulario', [App\Http\Controllers\HomeController::class, 'formulario'])->name('formulario_1');
Route::get('/lista-alumnos', [App\Http\Controllers\HomeController::class, 'getAlumnos'])->name('alumnosList');
Route::get('/reporte-alumno/{id}', [App\Http\Controllers\HomeController::class, 'makeReport'])->name('makeReport');
Route::get('/reportes-alumno/{id}', [App\Http\Controllers\HomeController::class, 'getReportAlumno'])->name('viewReports');
Route::post('registrarAlumno/', [App\Http\Controllers\HomeController::class, 'saveAlumnos'])->name('saveAlumno');
Route::post('registrarReporte/', [App\Http\Controllers\HomeController::class, 'saveReport'])->name('saveReport');
