<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\PresencaController;
use App\Http\Controllers\RelatorioController;
use Illuminate\Support\Facades\Route;

// Rota para a página inicial
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Rotas para Autenticação
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);

// Rotas para Presença
Route::get('presenca', [PresencaController::class, 'index'])->name('presenca.index');
Route::post('presenca', [PresencaController::class, 'update'])->name('presenca.update');

// Rotas para Configurações
Route::get('configuracoes', [ConfigController::class, 'index'])->name('configuracoes.index');
Route::post('configuracoes', [ConfigController::class, 'update'])->name('configuracoes.update');

// Rotas para Equipes
Route::resource('equipes', EquipeController::class);

// Rotas para Definição de Equipes
Route::get('definir-equipes', [EquipeController::class, 'create'])->name('definir-equipes.form');
Route::post('definir-equipes', [EquipeController::class, 'store'])->name('definir-equipes.setup');

// Rotas para Sorteio de Equipes
Route::get('sorteio', [EquipeController::class, 'create'])->name('sorteio.form');
Route::post('sorteio', [EquipeController::class, 'store'])->name('sorteio.process');

// Rotas para Relatórios (se aplicável)
Route::get('relatorio', [RelatorioController::class, 'index'])->name('relatorio.index');
