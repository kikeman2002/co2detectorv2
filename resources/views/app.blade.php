<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monitor de Aire</title>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
        .color-container{
            width: 16px;
            height: 16px;
            display: inline-block;
            border-radius: 4px;
        }
        a{
            text-decoration: none;
        }
        th,tr{
            border: solid;
            text-align: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <a>
            <img src="https://www.pngall.com/wp-content/uploads/12/Blue-PNG-Images.png" width="50" height="40">
        </a>
        <a class="navbar-brand" href="{{route('index')}}">Co2Detector</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('usuarios')}}">Usuarios</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('registros')}}">Lecturas de Co2</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-current="page">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Lecturas de Co2</a>
                    </li>
                @endif

              
              
            </ul>
           
          </div>
            @auth
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary float-right">Cerrar Sesion</button>
                </form>
            @else
            <form action="{{route('login')}}">
                <button type="submit" class="btn btn-primary float-right " >Iniciar Sesion</button>    
            </form>
            
            @endauth
          
        </div>
      </nav>
      <div></div>

      @yield('content')

        
      <div class="container fixed-bottom">
        <footer class="py-3 my-4">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Inicio</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Acerca de nosotros</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Contactanos</a></li>

          </ul>
          <p class="text-center text-muted">© 2022 Co2 Detector, Inc</p>
        </footer>
      </div>
    
</body>
</html>