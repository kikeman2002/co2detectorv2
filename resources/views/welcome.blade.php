@extends('app')
@section('content')
<head>
    <link href ="{{ asset('css/welcome.css') }}" rel="stylesheet">
</head>
<header class="bg-dark py-4">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2">Prevenir el es primer paso</h1>
                            <p class="lead text-white-50 mb-4">La presencia de CO2 en espacios cerrados afecta el rendimiento laboral y escolar, medir la concentración de este es el primer paso hacia la mejora de calidad del aire en espacios cerrados</p>
                        </div>
                    </div>
                </div>
            </div>
</header>
<!-- Datos del CO2-->
<section class="py-5 border-bottom" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"></div>
                        <h2 class="h4 fw-bolder">Efectos fisicos</h2>
                        <p>Físicamente una persona que esta expuesta a concentraciones de mas 800ppm de CO2 puede sentir dolor de cabeza, mareos, e incluso dificultad para respirar.</p>
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"></i></div>
                        <h2 class="h4 fw-bolder">Efectos cognitivos</h2>
                        <p>Las concentraciones altas de CO2 llegan a afetcar la velocidad de escritura e incluso la capacidad de tomar decisiones</p>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"></i></div>
                        <h2 class="h4 fw-bolder">¿Como actúa el CO2?</h2>
                        <p>El dióxido de carbono desplaza al oxígeno, es decir ocupa su volumen y disminuye la disponibilidad del mismo para respirar</p>
                    </div>
                </div>
            </div>
        </section>
@endsection