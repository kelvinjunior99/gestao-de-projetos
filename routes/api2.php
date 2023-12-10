<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerProduto;
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

Route::get('/produtos', [ControllerProduto::class, 'lista']);
Route::get('/produtos/{id}', [ControllerProduto::class, 'show']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::post('/produtos', [ControllerProduto::class, 'create']);
    Route::put('/produtos/{id}', [ControllerProduto::class, 'update']);
    Route::get('/produtos/search/{nome}', [ControllerProduto::class, 'search']);
    Route::delete('/produtos/{id}', [ControllerProduto::class, 'delete']);

    Route::post('/logout', [AuthController::class, 'logout']);
});

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
