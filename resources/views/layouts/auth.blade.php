<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
            background: rgb(0,255,252);
            background: linear-gradient(90deg, rgba(0,255,252,1) 0%, rgba(220,83,250,1) 52%, rgba(0,212,255,1) 100%);
        }

        .auth-card {
            width: 450px;
        }
    </style>
</head>
<body>

    <div class="container"> 
        <div class="row">
            <div class="col-12">
                @if($errors->any())
                    <div class="row mb-2">
                        <div class="col-12">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif

                @if(session()->has('msg_success'))
                    <div class="row mb-2">
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
                    <div class="row mb-2">
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
            </div>
        </div>
        <div class="row">
            @yield('content')
        </div>
    </div>

    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>