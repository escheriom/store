<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function index()
    {
     return view('pedidos.pedidos');
    }

    public function detalhes()
    {
     return view('pedidos.detalhes');
    }

}
