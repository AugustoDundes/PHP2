<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Viagem;
use App\Models\Veiculo;
use App\Models\Motorista;
use App\Models\Rota;


class ViagemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viagem = Viagem::with(['veiculo', 'motorista', 'rota'])->get();
        return view('viagem.index', compact('viagem'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $veiculo = Veiculo::all();
        $motorista = Motorista::all();
        $rota = Rota::all();
        return view('viagem.create', compact('veiculo', 'motorista', 'rota'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'veiculo_id' => 'required|exists:veiculos,id',
            'motorista_id' => 'required|exists:motoristas,id',
            'rota_id' => 'required|exists:rotas,id',
            'data_viagem' => 'required|date',
        ]);

        Viagem::create($request->all());

        return redirect()->route('viagem.index')->with('success', 'viagem criado com sucesso!');
    }


    public function show(string $id)
    {
        $viagem = Viagem::with(['veiculo', 'motorista', 'rota'])->findOrFail($id);
        return view('viagem.show', compact('viagem'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $viagem = viagem::findOrFail($id);
        $veiculo = Veiculo::all();
        $motorista = motorista::all();
        $rota = rota::all();
        return view('viagem.edit', compact('viagem', 'veiculo', 'motorista', 'rota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'veiculos_id' => 'required|exists:veiculo,id',
            'motoristas_id' => 'required|exists:motorista,id',
            'rotas_id' => 'required|exists:rota,id',
            'data_viagem' => 'required|date',
        ]);

        $viagem = Viagem::findOrFail($id);
        $viagem->update($request->all());

        return redirect()->route('viagem.index')->with('success', 'Viagem atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $viagem = Viagem::findOrFail($id);
        $viagem->delete();

        return redirect()->route('viagem.index')->with('success', 'Viagem excluído com sucesso!');
    }
}
