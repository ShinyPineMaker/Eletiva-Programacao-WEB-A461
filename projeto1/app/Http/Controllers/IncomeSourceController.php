<?php

namespace App\Http\Controllers;

use App\Models\IncomeSource;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IncomeSourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incomeSources = IncomeSource::all();
        return view('incomesources.index', compact('incomeSources'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('incomesources.edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'description' => 'required',
            'monthly_income' => 'required',
            'annual_income' => 'required'
        ]);
        $incomeSource = IncomeSource::create($request->all());
        return redirect()->route('incomesources.index')->with('status', 'Fonte de Renda criada!');
    }

    /**
     * Display the specified resource.
     */
    public function show(IncomeSource $incomeSource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(IncomeSource $incomeSource)
    {
        return view('incomesources.edit', compact('incomeSource'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, IncomeSource $incomeSource)
    {
        $request -> validate([
            'description' => 'required',
            'monthly_income' => 'required',
            'annual_income' => 'required'
        ]);
        $incomeSource->update($request->all());
        return redirect()->route('incomesources.index')->with('status', 'Fonte de Renda atualizada!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($incomeSource)
    {
        $query = IncomeSource::find($incomeSource);
        if (!$query) {
            return redirect()->route('incomesources.index')->with('status', 'Fonte de Renda não encontrada');
        }
        $query->delete();
        return redirect()->route('incomesources.index')->with('status', 'Fonte de Renda excluída');
    }
}
