<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        return view('usuarios.index', ['usuarios' => $usuarios]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'usuario' => 'required|min:1',
            'email' => 'required|min:1',
            'password' => 'required|min:1',

        ]);

        $usuario = new User();
        $usuario->name = $request->usuario;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->save();

        return redirect()->route('usuarios')->with('success', 'Usuario creada correctamente');
    }

    public function show($id)
    {
        $usuario = User::find($id);
        return view('usuarios\show', ['usuario' => $usuario]);
    }

    public function update(Request $request, $id)
    {
        $usuario = User::find($id);
        $usuario->usuario = $request->usuario;
        $usuario->password = $request->password;
        $usuario->save();
        //return view('todos.index', ['todos' => $todos]);
        return redirect()->route('usuarios')->with('success', 'Usuario actualizada!');
    }

    public function destroy($id)
    {
        $usuario = User::find($id);
        $usuario->delete();
        return redirect()->route('usuarios')->with('success', 'El usuario ha sido eliminado!');
    }
}

