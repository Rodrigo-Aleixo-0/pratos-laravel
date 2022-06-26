<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>

<nav class="navbar navbar-expand bg-dark" style="border-bottom: 1px solid #000;">

    <div class="container-fluid">

        <a class="navbar-brand" href="/" style="margin-left: 110px;">
        <svg style="color: #fff;" xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
        </svg>
        </a>

        <ul class="navbar-nav" style="margin-right: 110px;">
            <li class="nav-item">
                <a class="nav-link" href="{{route('pratos-lista')}}" style="text-decoration: none; color: #fff;">Administrativo</a>
            </li>
        </ul>

    </div>    
        
</nav>

<body>
    @yield('content')
</body>
</html>