<?php

use App\Http\Controllers\Admin\FuncaoController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PermissaoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin.')->group(function(){
    Route::middleware(['auth', 'verified'])->group(function(){
        Route::get('home', [HomeController::class, 'index'])->name('dashboard');

        // Acesso restrito
        Route::middleware(['auth', 'role:Administrador'])->group(function(){
            Route::resource('/funcoes', FuncaoController::class);
            Route::resource('/permissoes', PermissaoController::class);
        });
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
