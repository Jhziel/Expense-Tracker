<?php

use App\Http\Controllers\BudgetController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\RegisterUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::controller(BudgetController::class)->group(function () {

        Route::get('/budgets',  'index');
        Route::get('/budgets/create',  'create');
        Route::get('/budgets/{budget}',  'show');
        Route::get('/budgets/{budget}/edit',  'edit')->middleware('can:edit-budget,budget');
        Route::post('/budgets',  'store');
        Route::put('/budgets/{budget}',  'update');
        Route::delete('/budgets/{budget}',  'destroy');
    });

    Route::post('/logout', [LoginUserController::class, 'destroy']);
});



Route::get('/expenses', [ExpenseController::class, 'index']);
Route::get('/expenses/create', [ExpenseController::class, 'create']);
Route::get('/expenses/{expense}/edit', [ExpenseController::class, 'edit']);
Route::post('/expenses', [ExpenseController::class, 'store']);
Route::put('/expenses/{expense}', [ExpenseController::class, 'update']);
Route::delete('/expenses/{expense}', [ExpenseController::class, 'destroy']);

Route::middleware('guest')->group(function () {

    Route::get('/register', [RegisterUserController::class, 'create']);
    Route::post('/register', [RegisterUserController::class, 'store']);
    Route::get('/login', [LoginUserController::class, 'login'])->name('login');
    Route::post('/login', [LoginUserController::class, 'store']);
});
