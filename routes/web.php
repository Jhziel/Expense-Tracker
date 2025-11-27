<?php

use App\Http\Controllers\BudgetController;
use App\Models\Budget;
use App\Models\Expense;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/budgets', [BudgetController::class, 'index']);
Route::get('/budgets/create', [BudgetController::class, 'create']);
Route::get('/budgets/{budget}', [BudgetController::class, 'show']);
Route::post('/budgets', [BudgetController::class, 'store']);

Route::get('/expenses', function () {
    $expenses = Expense::with('user')->paginate(7);
    return view('expense.index', [
        'expenses' => $expenses
    ]);
});
