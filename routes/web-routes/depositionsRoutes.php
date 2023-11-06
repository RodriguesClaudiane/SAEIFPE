<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepositionsController;

Route::controller(DepositionsController::class)
    //->middleware(['auth:sanctum','ability:adm,manage,analyst'])
    ->group(function () {

        Route::get('depoimentos/mural','index')->name('depoimentos_mural');
        Route::post('depoimentos/criar','store')->name('depoimentos_criar');

    });