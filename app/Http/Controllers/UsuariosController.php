<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    
    public function autenticar(Request $request)
    {
        $headers  = getallheaders();

        $usuarios = new Usuarios();
        
        $usuarios->setData($headers);

        $dados = $usuarios->getData();

        $autenticacao = $usuarios->autenticar($dados->email, $dados->senha);

        return response($autenticacao, 200)
                ->header('Content-Type', 'application/json');

    }

}
