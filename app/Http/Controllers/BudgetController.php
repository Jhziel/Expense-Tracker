<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $budgets = Budget::with('user')->latest()->paginate(7);
        return view('budget.index', [
            'budgets' => $budgets
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('budget.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'source' => ['required'],
            'amount' => ['required']
        ]);
        $data['user_id'] = 1;
        Budget::create($data);
        return redirect('/budgets');
    }

    /**
     * Display the specified resource.
     */
    public function show(Budget $budget)
    {
        return view('budget.show', [
            'budget' => $budget
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Budget $budget)
    {
        return view('budget.edit', [
            'budget' => $budget
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Budget $budget)
    {
        $data = $request->validate([
            'source' => ['required'],
            'amount' => ['required']
        ]);

        $budget->update($data);
        return redirect('/budgets');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Budget $budget)
    {
        $budget->delete();
        return redirect('/budgets');
    }
}
