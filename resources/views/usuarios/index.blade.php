@extends('app')

@section('content')

<div class="container w-25 border p-4 mt-4">
    <form action="{{ route('usuarios')}}" method="POST">
        @csrf

        @if (session('success'))
            <h6 class="alert alert-success">{{ session('success')}}</h6>
        @endif

        @error('title')
        <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror

        <div class="mb-3">
          <label for="title" class="form-label">Nombre de usuario</label>
          <input type="text" name="usuario" class="form-control">
        </div>

          <label for="title" class="form-label">Email</label>
          <input type="text" name="email" class="form-control">
        

        <div class="mb-3">
            <label for="title" class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        
        <button type="submit" class="btn btn-primary">Crear nuevo usuario</button>
    </form>
</div>
<br>
<div class="container py-4">
        <table class="table table-bordered">
            <thead class="thead-light" >
                <tr>
                    <th scope="col">Nombre de usuario</th>
                    <th scope="col">Email</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>
                    <a href="{{ route('usuarios-edit', ['id' => $usuario->id]) }}">{{ $usuario->name }}</a>
                </td>
                <td>{{$usuario->email}}</td>
                <td style="text-align:center">
                    <form action="{{ route('usuarios-destroy', [$usuario->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
</div>

@endsection