<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// Página Inicial
Route::get('/', fn() => view('welcome'))->name('home');

// Desafio 2: Rotas, Controller e Blade
Route::get('/bemvindo', [WelcomeController::class, 'index'])->name('bemvindo');

// Desafio 3: Lista Dinamica com Livewire
Route::get('/tarefas', \App\Livewire\TaskList::class)->name('tarefas');

// Desafio 4: Lista Interativa com Vue.js
Route::get('/produtos', [ProductController::class, 'index'])->name('produtos');


Route::middleware(['auth', 'verified'])->group(function () {

    // Desafio 6: Página Autenticada com Blade
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/usuarios', [DashboardController::class, 'usuarios'])->name('dashboard.usuarios');

    // Breeze: Gerenciamento de Perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
