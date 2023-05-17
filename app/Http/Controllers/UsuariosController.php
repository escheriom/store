<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    
        public function index()
        {
         return view('usuarios.usuarios');
        }

        public function cadastrar()
        {
         return view('usuarios.cadastrar');
        }
        public function alterar()
        {
         return view('usuarios.alterar');
        }
     
     
}
