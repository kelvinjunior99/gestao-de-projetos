<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerProduto;
use App\Http\Controllers\MembroController;
use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/login', [AuthController::class, 'login']);

    Route::group(['middleware' => ['auth:sanctum']], function() {
    
    Route::put('/membro/{id}', [UserController::class, 'update']);

    Route::get('/membros/{id}', [UserController::class, 'show']);

    Route::delete('/membro/{id}', [UserController::class, 'delete']);
    Route::get('/membros/search/{nome}', [UserController::class, 'search']);

    Route::get('/membros/projetos', [UserController::class, 'membroProjeto']);

    Route::get('/membros', [UserController::class, 'lista']);

    Route::post('/projeto', [ProjetoController::class, 'create']);
    Route::put('/projeto/{id}', [ProjetoController::class, 'update']);
    Route::get('/projetos/{id}', [ProjetoController::class, 'show']);
    Route::delete('/projeto/{id}', [ProjetoController::class, 'delete']);
    Route::get('/projetos', [ProjetoController::class, 'lista']);
    Route::get('/projetos/search/{nome}', [ProjetoController::class, 'search']);


    Route::post('/register', [UserController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    
});

/*Route::get('/produtos', [ControllerProduto::class, 'lista']);
Route::get('/produtos/{id}', [ControllerProduto::class, 'show']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
