<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix('/css/theme.css')}}">
    <link rel="stylesheet" href="{{mix('/css/font-awesome.min.css')}}">
    <title>Document</title>
</head>
<body>

    @include('app.svg')

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