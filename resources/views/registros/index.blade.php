@extends('app')

@section('content')

<div class="container py-5">
    <div class='row align-items-center justify-content-center' >

        @if (session('success'))
            <h6 class="alert alert-success">{{ session('success')}}</h6>
        @endif

        @error('title')
        <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror

        <table class="table table-bordered">
            <tr>
                <th>Lugar de la toma</th>
                <th>Nivel de Co2</th>
                <th>Temperatura</th>
                <th>Fecha y hora de la toma</th>
            </tr>
            @foreach ($registros as $registro )
                <tr>
                    <td>{{  $registro->lugar_toma  }}</td>
                    <td>{{  $registro->nivel_de_co2  }}</td>
                    <td>{{  $registro->temperatura  }}</td>
                    <td>{{  $registro->created_at  }}</td>
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
</div>
<br><br><br>
<div class="container py-5"></div>
@endsection