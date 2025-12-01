<?php

namespace App\Providers;

use App\Models\Budget;
use App\Models\Expense;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('edit-budget', function (User $user, Budget $budget) {
            return $budget->user()->is($user);
        });

        Gate::define('delete-budget', function (User $user, Budget $budget) {
            return $budget->user()->is($user);
        });

        Gate::define('edit-expense', function (User $user, Expense $expense) {
            return $expense->user()->is($user);
        });

        Gate::define('delete-expense', function (User $user, Expense $expense) {
            return $expense->user()->is($user);
        });
    }
}
