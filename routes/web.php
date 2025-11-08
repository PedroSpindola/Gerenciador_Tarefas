<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\LoginController;

Route::middleware("auth")->group(function () {
    Route::post('/tarefas/restoreAll', [TarefaController::class, 'restoreAll'])->name('tarefas.restoreAll');
    Route::resource('tarefas', TarefaController::class);
});
Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::resource('login', LoginController::class);


