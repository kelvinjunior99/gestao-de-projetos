<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MembroController;
use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\TarefaController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::prefix('lista')->group( function() {
    Route::get('/projetos', [ProjetoController::class, 'lista'])->name('lista-projetos');
    //Route::post('/cadastrar', [ParceiroController::class, 'create'])->name('create');
    Route::get('/tarefas', [TarefaController::class, 'lista'])->name('lista-tarefas');
    Route::get('/membros', [MembroController::class, 'lista'])->name('lista-membros');
});
