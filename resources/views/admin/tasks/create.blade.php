@extends('layouts.app')
@section('title', 'Nova Tarefa')
@section('content')
<div class="col-12 mt-5">
    <div class="card"> 
        <div class="card-header">Nova Tarefa</div>
        <div class="card-body"> 
            <form action="{{ route('admin.tasks.store') }}" method="POST">
                @include('admin.tasks._partials.form')
                <hr>
                <div class="text-right">
                    <button class="btn btn-success">Criar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
