<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rota;

class RotaController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rota = Rota::all();
        return view("rota.index", compact('rota'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("rota.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Rota::create($request->all());
        return redirect("/rota");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rota = Rota::findOrFail($id);
        return view("rota.show", compact('rota'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rota = Rota::findOrFail($id);
        return view("rota.edit", compact('rota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rota = Rota::findOrFail($id);
        $rota->update($request->all());
        return redirect("/rota");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $rota = Rota::findOrFail($id);
        $rota->delete();
        return redirect("/rota");
    }
}
