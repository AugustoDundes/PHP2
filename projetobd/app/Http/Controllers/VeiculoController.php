<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;

class VeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $veiculo = Veiculo::all();
        return view("veiculo.index", compact('veiculo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("veiculo.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Veiculo::create($request->all());
        return redirect("/veiculo");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $veiculo = Veiculo::findOrFail($id);
        return view("veiculo.show", compact('veiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $veiculo = Veiculo::findOrFail($id);
        return view("veiculo.edit", compact('veiculo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $veiculo = Veiculo::findOrFail($id);
        $veiculo->update($request->all());
        return redirect("/veiculo");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $veiculo = Veiculo::findOrFail($id);
        $veiculo->delete();
        return redirect("/veiculo");
    }
}
