<?php

namespace App\Http\Controllers;

use App\Models\Teste;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class SiteController extends Controller
{

   

    public function index()
    {
        $usuarios = Usuarios::all();

        return view('pagina1', [
             'usuarios' => $usuarios
            ]);
    }
}