@extends('app')

@section('content')
    <div class="container">
        <form action="{{  route('login')  }}" method="POST">
            @csrf
            <h1>Iniciar sesion</h1>
            <div class="mb-3">
                <label for="title" class="form-label">Nombre de usuario</label>
                <input type="text" name="usuario" class="form-control">
              </div>
      
              <div class="mb-3">
                  <label for="title" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control">
              </div>
            
            <div class="text-center mt-5">
                <button type="submit" class="btn btn-primary float-center">Iniciar sesion</button>
            </div>
        </form>
    </div>


@endsection