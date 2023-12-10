<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\Membros;
use App\Http\Livewire\Projetos;
use App\Http\Livewire\Tarefas;
use App\Http\Livewire\Teste;
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

Route::get('/', Home::class)->name('home');



Route::get('/teste', Teste::class);

Route::prefix('lista')->group( function() { 
    Route::get('/membros', Membros::class)->name('lista-membros');
    Route::get('/projetos', Projetos::class)->name('lista-projetos');
    Route::get('/tarefas', Tarefas::class)->name('lista-tarefas');
 }); 
