@extends('layouts.main')

@section('content')

    <div class="border-bottom d-flex justify-content-between align-items-center">
        <h2>Cadastro de Tarefas</h2>
        <a href="{{route('tarefas.index')}}" class="btn btn-primary">Voltar</a>
    </div>

    <form action="{{route('tarefas.store')}}" method="Post" class="mt-3">
        @csrf
        <div class="form-group col-5">
            <label for="titulo">Titulo*:</label>
            <input type="text" id="titulo" name="titulo" class="form-control">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" class="form-control"></textarea>
        </div>
        <div class="form-group col-5">
            <label for="status">Status:</label>

            <select id="status" name="status" class="form-control">

                <option value=0>Pendente</option>

                <option value=1>Concluído</option>

            </select>

        </div>
        <div class="form-group mt-5">
            <button class="btn btn-primary">Cadastrar</button>
        </div>
    </form>

@endsection