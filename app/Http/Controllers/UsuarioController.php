<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuario = Usuario::all();
        return $usuario;
    }
    public function show($id)
    {
        $usuario = Usuario::find($id);
        return $usuario;
    }
}
