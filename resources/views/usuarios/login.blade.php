@extends('app')

@section('content')
    <div class="container py-4">
        <form action="{{  route('login')  }}" method="POST">
            @csrf
            @foreach ($errors->all() as $error)
                <h6 class="alert alert-danger ">{{ $error }}</h6>     
            @endforeach
                <br><br>
            <h1>Iniciar sesion</h1>
                <div class="mb-3">
                    <label for="title" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control">
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
    <div class="container py-4"></div>
    @yield('content')

@endsection