<?php

namespace App\Http\Controllers;

use App\Models\Palestra;
use Illuminate\Http\Request;

class PalestraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $palestras = Palestra::orderBy('data', 'desc')->get();
        return view('palestra.index', compact('palestras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('palestra.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = $request->validate([
            'titulo' => ['required', 'min:3', 'max:255'],
            'palestrante' => ['required', 'min:3', 'max:255'],
            'data' => ['required', 'date'],
            'local' => ['required', 'min:2', 'max:255'],
            'descricao' => ['nullable', 'min:3'],
        ]);

        Palestra::create($dados);

        return redirect()->route('palestra.index')->wirh('sucesso', 'Palestra cadastrad com suceso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('palestras.show', compact('palestras'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('palestras.edit', compact('palestras'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = $request->validate([
            'titulo' => ['required', 'min:3', 'max:255'],
            'palestrante' => ['required', 'min:3', 'max:255'],
            'data' => ['required', 'date'],
            'local' => ['required', 'min:2', 'max:255'],
            'descricao' => ['nullable', 'min:3'],
        ]);

        $palestra->update($dados);

        return redirect()->route('palestras.index')->with('sucesso', 'Palestra atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $palestra->delete();
        return redirect()->route('palestras.index')->with('sucesso', 'Palestra removida com sucesso!');
    }
}
