<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix('/css/theme.css')}}">
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>

    @include('app.svg')

    @if (session()->has('status'))
    <div class="toast-container position-absolute top-0 end-0 p-3 position-fixed" style="z-index: 999">
        <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header alert alert-success ">
                <strong class="me-auto"><i class="{{session()->get('icone')}}"></i> {{session()->get('notif')}}</strong>
                <small>{{date("Y-m-d h:i:sa")}}</small>
                <button type="button" class="btn-close ms-2 mb-1" data-bs-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
        <div class="toast-body">
            {{session()->get('status')}}
        </div>
      </div>        
    </div>

    @endif

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">M ~ AIDI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
      
            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('posts.index')}}">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('posts.create')}}">New Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('laravel')}}">Laravel</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

      <div class="container">
        @yield('content')
      </div>

    <script src="{{mix('/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{mix('/js/custom.js')}}"></script>
    <script src="{{mix('/js/jquery.min.js')}}"></script>
    <script src="{{mix('/js/prism.js')}}"></script>
</body>
</html>