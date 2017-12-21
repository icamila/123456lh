<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuarioController extends Controller
{
    public function index()
    {
        return view('usuarios.index', ['usuarios' => User::all()]);
    }
    public function editar()
    {
        return view('usuarios.perfil', ['usuario' => \Auth::user()]);
    }
    public function update(Request $request, User $usuario)
    {
        //
    }
}
