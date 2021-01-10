<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List | @yield('title', '')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <style>
        body{
            background: rgb(0,255,252);
            background: linear-gradient(90deg, rgba(0,255,252,1) 0%, rgba(220,83,250,1) 52%, rgba(0,212,255,1) 100%);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('admin.tasks.index') }}">Todo List</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="mt-1">
                        <img class="rounded-circle" width="35px" height="35px" src="{{ auth()->user()->getPhotoUrl() }}">
                        <span>{{ auth()->user()->username }}<span>
                    </div>
                </li>
                <li class="nav-item ml-2">
                    <a class="nav-link" href="{{ route('auth.login.logout') }}">Sair</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container"> 
        @if($errors->any())
            <div class="row mt-5">
                <div class="col-12">
                    <div class="alert alert-danger">   
                        <ul>       
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif
        @if(session()->has('msg_success'))
            <div class="row mt-5">
                <div class="col-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{ session()->get('msg_success') }}
                    </div>
                </div>
            </div>
        @endif

        @if(session()->has('msg_error'))
            <div class="row mt-5">
                <div class="col-12">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{ session()->get('msg_error') }}
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            @yield('content')
        </div>
    </div>

    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>