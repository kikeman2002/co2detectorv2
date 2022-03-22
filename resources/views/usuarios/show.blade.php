@extends('app')

@section('content')

<div class="container w-25 border p-4 mt-4">
    <form action="{{ route('usuarios-update',['id' => $usuario->id])}}" method="POST">
        @method('PATCH')
        @csrf

        @if (session('success'))
            <h6 class="alert alert-success">{{ session('success')}}</h6>
        @endif

        @error('title')
        <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror

        <div class="mb-3">
          <label for="title" class="form-label">Nombre del usuario</label>
          <input type="text" name="usuario" class="form-control" value="{{$usuario->usuario}}">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Password del usuario</label>
            <input type="password" name="password" class="form-control" value="{{$usuario->password}}">
        </div>
        
        <button type="submit" class="btn btn-primary">Actualizar informacion</button>
    </form>

    
</div>

@endsection