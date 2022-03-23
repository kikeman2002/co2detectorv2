<?php

namespace App\Http\Controllers;

use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException as ValidationValidationException;

class LoginController extends Controller
{
    public function login(){
        $credentials = request()->validate([
            'email' => ['required', 'email', 'string'],
            'password' => ['required', 'string']]);
        
        if(Auth::attempt($credentials)){
            request()->session()->regenerate();
            return redirect()->route('index');  //->with('success', 'Registro guardado correctamente');
        }

        throw ValidationValidationException::withMessages([
            'email' => "Correo o password incorrecto"
        ]);

        return redirect('login');
    }

    public function logout(){

        Auth::logout();
        return redirect(route('index'));        
    }
}
