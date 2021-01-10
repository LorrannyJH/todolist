@extends('layouts.auth')
@section('content')

<div class="mx-auto">
    <div class="card shadow auth-card">
        <div class="card-body">
            <h5 class="text-center">Login</h5 >
            <form action="{{ route('auth.login.login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="email" placeholder="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="senha" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-block">Entrar</button>
                </div>
                <div>
                    <a href="{{route('auth.register.index')}}">Criar nova conta</a>
                </div>
            </form>
        </div>
    </div>
</div>

@stop
