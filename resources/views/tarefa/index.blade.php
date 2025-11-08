@extends('layouts.main')

@section('content')


    <div class="border-bottom d-flex justify-content-between align-items-center">
        <h2>Listagem de Tarefas</h2>
        <div class="d-flex justify-content-start gap-2">
            <a href="{{route('tarefas.create')}}" class="btn btn-primary">Cadastrar</a>
            <form method="GET" action="{{ route('tarefas.index') }}" class=>
                <div class="input-group">
                    <select name="status_filtro" class="form-control">
                        <option value="">Mostrar Todos</option>
                        <option value="0" {{ request('status_filtro') === '0' ? 'selected' : '' }}>Pendente
                        </option>
                        <option value="1" {{ request('status_filtro') === '1' ? 'selected' : '' }}>Concluído
                        </option>
                    </select>
                    <button type="submit" class="btn btn-primary">Filtrar</button>
                </div>
            </form>
        </div>
    </div>

    <table class="table table-hover table-striped mt-2">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Descrição</th>
                <th>Status</th>
                <th>Data de criação</th>
                <th>Data de alteração</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tarefas as $tarefa)
                <tr>
                    <td>{{$tarefa->titulo}}</td>
                    <td>{{$tarefa->descricao}}</td>
                    <td>{{ $tarefa->status == 1 ? 'Concluído' : 'Pendente' }}</td>
                    <td>{{$tarefa->created_at}}</td>
                    <td>{{$tarefa->updated_at}}</td>
                    <td class="d-flex justify-content-start gap-2">
                        <a href="{{ route('tarefas.edit', $tarefa->id) }}" class="btn btn-success">editar</a>
                        <button class="btn btn-danger btn-delete-task" data-bs-toggle="modal"
                            data-bs-target="#confirmDeleteModal" data-task-route="{{ route('tarefas.destroy', $tarefa->id) }}">
                            Excluir
                        </button>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <form id="restoreForm" method="POST" action="{{route('tarefas.restoreAll')}}">
        @csrf
        <button type="submit" class="btn btn-primary">Restaurar todos as tarefas</button>
    </form>


    @include('components.confirmDeleteModal')
@endsection

@section('scripts')
    @include('components.deleteModalScript')
@endsection