<?php

use App\Http\Controllers\AtividadesController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\DisciplinesController;
use App\Http\Controllers\LoginController;
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

Route::middleware('autenticador')->group(function(){

    Route::get('/disciplines/index', [DisciplinesController::class, 'index'])->name('disciplines.index');
    Route::get('/disciplines/create', [DisciplinesController::class, 'create'])->name('disciplines.create');
    Route::post('/disciplines/store', [DisciplinesController::class, 'store'])->name('disciplines.store');
    Route::get('/disciplines/edit/{id}', [DisciplinesController::class, 'edit'])->name('disciplines.edit');
    Route::post('/disciplines/update/{id}', [DisciplinesController::class, 'update'])->name('disciplines.update');
    Route::get('/disciplines/destroy/{id}', [DisciplinesController::class, 'destroy'])->name('disciplines.destroy');

    Route::get('/atividades/create/{id}', [AtividadesController::class, 'create'])->name('atividades.create');
    Route::post('/atividades/store/{id}', [AtividadesController::class, 'store'])->name('atividades.store');
    Route::get('/atividades/index/{id}', [AtividadesController::class, 'index'])->name('atividades.index');
});
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login/store', [LoginController::class, 'store'])->name('login.store');


Route::get('/cadastro', [CadastroController::class, 'create'])->name('cadastro.create');
Route::post('/cadastro/store', [CadastroController::class, 'store'])->name('cadastro.store');
