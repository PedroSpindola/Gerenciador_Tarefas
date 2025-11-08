<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tarefas',TarefaController::class);
Route::post('/tarefas/restoreAll', [TarefaController::class, 'restoreAll'])
     ->name('tarefas.restoreAll');
