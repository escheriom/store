<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index()
    {
     return view('categorias.categorias');
    }

    public function criar()
    {
     return view('categorias.criar');
    }

    public function editar()
    {
     return view('categorias.editar');
    }
}
