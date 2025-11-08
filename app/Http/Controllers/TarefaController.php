<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TarefaRequest;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $query = Tarefa::query();
        if ($request->filled('status_filtro')) {

            $status_value = (int) $request->status_filtro;
            $query->where('status', $status_value);
        }

        $tarefas = $query->get();
        return view('tarefa.index', compact('tarefas', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tarefa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TarefaRequest $request)
    {
        $tarefa = Tarefa::create([
            'titulo' => $request['titulo'],
            'descricao' => $request['descricao'],
            'status' => $request['status']
        ]);

        if ($tarefa) {
            return redirect()->route('tarefas.index')->with('success', 'tarefa Cadastrado com sucesso');
        } else {
            return redirect()->route('tarefas.create')->with('error', 'Erro ao cadastar o tarefa');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Tarefa $tarefa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tarefa $tarefa)
    {
        return view('tarefa.update', ['tarefa' => $tarefa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tarefa $tarefa)
    {
        $tarefaAtualizada = $tarefa->update([
            'titulo' => $request['titulo'],
            'descricao' => $request['descricao'],
            'status' => $request['status']
        ]);

        if ($tarefaAtualizada) {
            return redirect()->route('tarefas.index')->with('success', 'Tarefa atualizado com sucesso');
        } else {
            return redirect()->route('tarefas.edit')->with('error', 'Erro ao Atualisar o tarefa');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarefa $tarefa)
    {
        $deletou = $tarefa->delete();

        if ($deletou) {
            return redirect()->route('tarefas.index')->with('success', 'Tarefa Removido com sucesso com sucesso');
        } else {
            return redirect()->route('tarefas.index')->with('error', 'Erro ao Remover o tarefa');
        }
    }
    public function restoreAll()
    {
        Tarefa::onlyTrashed()->restore();

        return redirect()->route('tarefas.index')->with('success', 'Restauração feita com sucesso');
    }
}
