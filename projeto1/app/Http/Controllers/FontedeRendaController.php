<?php

namespace App\Http\Controllers;

use App\Models\FontedeRenda;
use Illuminate\Http\Request;

class FontedeRendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fontederenda = FontedeRenda::all();
        return view('FontedeRenda.index', compact('fontederenda'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FontedeRenda $fontedeRenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FontedeRenda $fontedeRenda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FontedeRenda $fontedeRenda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FontedeRenda $fontedeRenda)
    {
        //
    }
}
