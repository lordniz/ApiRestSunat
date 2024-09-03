<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\rucController;
use App\Http\Controllers\Api\agenteretController;


Route::get('/ruc',[rucController::class, 'index']);
Route::get('/ruc/{ruc}',[rucController::class, 'show']);

Route::get('/agente-ret',[agenteretController::class, 'index']);
Route::get('/agente-ret/{agente_ret}',[rucController::class, 'show']);


// Route::post('/ruc',function(){
//     return 'Creando Estudiantes';
// });
// Route::put('/ruc/{id}',function(){
//     return 'Actualizar Estudiantes';
// });
// Route::delete('/ruc/{id}',function(){
//     return 'Eliminando Estudiantes';
// });