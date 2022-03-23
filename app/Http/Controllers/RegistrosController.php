<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;

class RegistrosController extends Controller
{
    public function index()
    {
        $registros = Registro::all();
        return view('registros.index', ['registros' => $registros]); //Todo
    }

    public function store()
    {
        $cliente = curl_init();
        curl_setopt($cliente, CURLOPT_URL, "http://192.168.1.93/");
        curl_setopt($cliente, CURLOPT_HEADER, 0);
        $contenido = json_decode( curl_exec($cliente));
        curl_close($cliente);

        

        $registro = new Registro();
        $registro->lugar_toma = "oficina 1";
        $registro->nivel_de_co2 = '10';
        $registro->temperatura = 18.5;
        $registro->save();

        return redirect()->route('registros')->with('success', 'Registro guardado correctamente');
    }
   
}
