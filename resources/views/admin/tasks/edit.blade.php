@extends('layouts.app')
@section('title', 'Editar Tarefa')
@section('content')
<div class="col-12 mt-5">
    <div class="card"> 
        <div class="card-header">Editar Tarefa</div>
        <div class="card-body"> 
            <form action="{{ route('admin.tasks.update', $task->id) }}" method="POST">
                @method('PUT')
                @include('admin.tasks._partials.form')
                <hr>
                <div class="text-right">
                    <button class="btn btn-success">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
