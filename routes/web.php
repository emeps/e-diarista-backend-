<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DiaristaController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\UsuarioController;
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

Route::get('/', [LoginController::class, 'showLoginForm']);

Auth::routes();

Route::middleware('auth')->group(function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('usuarios', UsuarioController::class);

    //Rotas para trabalhar com serviços
    Route::get('/servicos', [ServicoController::class, 'index'])->name('servicos.index');
    Route::get('/servicos/create', [ServicoController::class, 'create'])->name('servicos.create');
    Route::post('/servicos', [ServicoController::class, 'store'])->name('servicos.store');
    Route::get('/servicos/{servico}/edit', [ServicoController::class, 'edit'])->name('servicos.edit');
    Route::put('/servicos/{servico}', [ServicoController::class, 'update'])->name('servicos.update');

    Route::get('/diarista', [DiaristaController::class, 'index']);
    Route::get('/diarista/create', [DiaristaController::class, 'create'])->name('diarista.create');
    Route::post('/diarista', [DiaristaController::class, 'store'])->name('diarista.store');
    Route::get('/diarista/{id}/edit', [DiaristaController::class, 'edit'])->name('diarista.edit');
    Route::put('/diarista/{id}', [DiaristaController::class, 'update'])->name('diarista.update');
    Route::get('/diarista/{id}', [DiaristaController::class, 'destroy'])->name('diarista.destroy');
});

