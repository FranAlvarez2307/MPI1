<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/volumenes', function () {
    return view('Integrales.Volumenes');
});
Route::get('/regionesGenerales', function () {
    return view('Integrales.RegionesGenerales');
});
Route::get('/integralDobleTriple', function () {
    return view('Integrales.IntegralDobleTriple');
});
Route::get('/ecuacionesParametricas', function () {
    return view('FuncionesVectoriales.EcuacionesParametricas');
});
Route::get('/integralLinea', function () {
    return view('FuncionesVectoriales.IntegralLinea');
});
Route::get('/calculoFuncionesVectoriales', function () {
    return view('FuncionesVectoriales.CalculoFuncionesVectoriales');
});
Route::get('/planosSuperficies', function () {
    return view('FuncionesVariables.PlanosSuperficies');
});
Route::get('/limitesContinuidad', function () {
    return view('FuncionesVariables.LimitesContinuidad');
});
Route::get('/funcionesEscalables', function () {
    return view('FuncionesVariables.FuncionesEscalables');
});
Route::get('/derivadaParcial', function () {
    return view('Derivadas.DerivadaParcial');
});
Route::get('/funcionesMultivariables', function () {
    return view('Derivadas.FuncionesMultivariables');
});
Route::get('/vectorGradiente', function () {
    return view('Derivadas.VectorGradianteDerivadaDireccional');
});