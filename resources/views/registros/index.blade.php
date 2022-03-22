@extends('app')

@section('content')

    <div class='row align-items-center justify-content-center' >

        @if (session('success'))
            <h6 class="alert alert-success">{{ session('success')}}</h6>
        @endif

        @error('title')
        <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror

        <table class="col-sm-6 mt-5">
            <tr>
                <th>Lugar de la toma</th>
                <th>Nivel de Co2</th>
                <th>Temperatura</th>
                
                <th>fecha y hora de la toma</th>
            </tr>
            @foreach ($registros as $registro )
                <tr>
                    <th>{{  $registro->lugar_toma  }}</th>
                    <th>{{  $registro->nivel_de_co2  }}</th>
                    <th>{{  $registro->temperatura  }}</th>
                    <th>{{  $registro->created_at  }}</th>
                </tr>
                
            @endforeach
        </table>
        <form action="{{ route('registros')}}" method="POST">
            @csrf
            <div class="text-center mt-5">
                <button type="submit" class="btn btn-primary float-center">Tomar lectura</button>
            </div>
            
        </form>
        
    </div>

@endsection