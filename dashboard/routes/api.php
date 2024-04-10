<?php

use App\Http\Controllers\Admin\FuncaoController;
use App\Http\Controllers\Admin\PermissaoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('funcoes/store', [FuncaoController::class, 'store']);
Route::post('funcoes/edit', [FuncaoController::class, 'edit']);

Route::post('permissoes/store', [PermissaoController::class, 'store']);
Route::post('permissoes/edit', [PermissaoController::class, 'edit']);
