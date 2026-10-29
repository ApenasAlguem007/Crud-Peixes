<?php

namespace App\Http\Controllers;

use App\Models\Fish;
use App\Models\Type;
use Illuminate\Http\Request;

class FishController extends Controller
{
    // 1. Listar todos os peixes
    public function index()
    {
        $fishes = Fish::with('type')->get();
        return view('fish.index', compact('fishes'));
    }

    // 2. Mostrar formulário de cadastro
    public function create()
    {
        $types = Type::all(); 
        return view('fish.create', compact('types'));
    }

    // 3. Salvar novo peixe no banco
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'type_id' => 'required|exists:types,id',
        ]);

        Fish::create($request->all());

        return redirect()->route('fish.index')->with('success', 'Peixe cadastrado com sucesso!');
    }

    // 4. Exibir detalhes de um peixe específico
    public function show(Fish $fish)
    {
        return view('fish.show', compact('fish'));
    }

    // 5. Mostrar formulário de edição
    public function edit(Fish $fish)
    {
        $types = Type::all();
        return view('fish.edit', compact('fish', 'types'));
    }

    // 6. Atualizar peixe no banco
    public function update(Request $request, Fish $fish)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'type_id' => 'required|exists:types,id',
        ]);

        $fish->update($request->all());

        return redirect()->route('fish.index')->with('success', 'Peixe atualizado com sucesso!');
    }

    // 7. Excluir o peixe
    public function destroy(Fish $fish)
    {
        $fish->delete();
        return redirect()->route('fish.index')->with('success', 'Peixe excluído com sucesso!');
    }
}