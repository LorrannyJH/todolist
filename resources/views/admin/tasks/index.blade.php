@extends('layouts.app')
@section('title', 'Tarefas')
@section('content')
<div class="col-12 mt-5">
    <div class="card"> 
        <div class="card-header d-flex justify-content-between align-items-center">
            Tarefas
            <a href="{{ route('admin.tasks.create') }}" class="btn btn-success">Nova Tarefa</a>
        </div>
        <div class="card-body"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Status</th>
                        <th colspan="100%">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data['tasks'] as $task)
                        <tr>
                            <td>{{ $task->name }}</td>
                            <td>{{ $task->done ? 'Realizado' : 'Não realizado' }}</td>
                            <td class="d-flex">
                                <a
                                    class="btn btn-warning"
                                    href="{{ route('admin.tasks.edit', $task->id) }}"
                                >
                                    Editar
                                </a>
                                <form action="{{ route('admin.tasks.destroy', $task->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger ml-2">Deletar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop
