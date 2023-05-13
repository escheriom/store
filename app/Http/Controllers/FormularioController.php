<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function enviar(Request $request)
    {
        $nome = $request->input('nome');
        $email = $request->input('email');
       

        Usuarios::create([
            'nome' => $nome,
            'email' => $email
            
        ]);

        $usuarios = Usuarios::all();
    
        return view('pagina1')->with([
            'nome' => $nome,
            'email' => $email,
            'usuarios' => $usuarios,


            
        ]);

        
    }
    public function destroy($id){
        Usuarios::findOrFail($id)->delete();
        return redirect("/")->with('msg', 'Evento excluido com sucesso');

    }


    

}
