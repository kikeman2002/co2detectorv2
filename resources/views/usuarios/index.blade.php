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

    <div>
        @foreach ($usuarios as $usuario)
        
            <div class="row py-1">
                <div class="col-md-9 d-flex align-items-center">
                    <a href="{{ route('usuarios-edit', ['id' => $usuario->id]) }}">{{ $usuario->name }}</a>
                </div>

                <div class="col-md-3 d-flex justify-content-end">
                    <form action="{{ route('usuarios-destroy', [$usuario->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </div>
            </div>
            
        @endforeach
    </div>
</div>

@endsection