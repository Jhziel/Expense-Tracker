<?php

use App\Http\Controllers\BudgetController;
use App\Http\Controllers\ExpenseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/budgets', [BudgetController::class, 'index']);
Route::get('/budgets/create', [BudgetController::class, 'create']);
Route::get('/budgets/{budget}', [BudgetController::class, 'show']);
Route::get('/budgets/{budget}/edit', [BudgetController::class, 'edit']);
Route::post('/budgets', [BudgetController::class, 'store']);
Route::put('/budgets/{budget}', [BudgetController::class, 'update']);
Route::delete('/budgets/{budget}', [BudgetController::class, 'destroy']);

Route::get('/expenses', [ExpenseController::class, 'index']);
Route::get('/expenses/create', [ExpenseController::class, 'create']);
Route::post('/expenses', [ExpenseController::class, 'store']);
