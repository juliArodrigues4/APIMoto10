<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
use App\Http\Controllers\MotoController;

route::get('/', function(){return response()->json(['Sucesso'=>true]);});
route::get('/motos',         [MotoController::class,'index']);
route::get('/motos/{id}',    [MotoController::class, 'show']);
route::post('/motos',[MotoController::class,'store']);
route::delete('/motos/{id}', [MotoController::class, 'destroy']);
route::put('/motos/{id}',    [MotoController::class, 'update']);
