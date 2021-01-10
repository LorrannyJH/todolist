@extends('layouts.auth')
@section('content')

<div class="mx-auto">
    <div class="card shadow auth-card">
        <div class="card-body">
            <h5 class="text-center">Cadastro</h5 >
            <form action="{{route('auth.register.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="file" class="form-control" name="photo">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="usuário" class="form-control" name="username" value="{{old('username','')}}">
                </div>
                <div class="form-group">
                    <input type="email" placeholder="email" class="form-control" name="email" value="{{old('email','')}}">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="senha" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="confirmar senha" class="form-control" name="password_confirmation">
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-block">Confirmar</button>
                </div>
                <div>
                    <a href="{{route('auth.login.index')}}">Já tenho uma conta</a>
                </div>
            </form>
        </div>
    </div>
</div>

@stop
