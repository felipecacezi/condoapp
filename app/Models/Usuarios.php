<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
    protected $table = 'usuarios';

    private $email;
    private $senha;
    private $ativo;

    public function __contruct()
    {
        
    }

    public function setData($dados)
    {

        $this->email = isset($dados['email']) && !empty($dados['email']) ? $dados['email'] : null;
        $this->senha   = isset($dados['senha']) && !empty($dados['senha']) ? $dados['senha'] : null;        
        $this->ativo   = isset($dados['ativo']) && !empty($dados['ativo']) ? $dados['ativo'] : null;        

    }

    public function getData()
    {

        $arrayData = new \stdClass();

        $arrayData->email   = $this->email;
        $arrayData->senha   = $this->senha;
        $arrayData->ativo   = $this->ativo;

        return $arrayData;

    }

    public function autenticar($email, $senha)
    {

        $retorno = array();

        try {
            
            $resultado = Usuarios::where([
                                            ['usuario_email', 'like', $email],
                                            ['usuario_senha', 'like', $senha]
                                        ])->get()->toArray();

            if(isset($resultado) && !empty($resultado)){                
                $retorno['status']  = 'ok';                
                $retorno['message'] = 'Usuário autenticado com sucesso!';
                $retorno['hash']    = base64_encode($resultado[0]['usuario_email']);
            } else {
                $retorno['status']  = 'empty';
                $retorno['message'] = 'Atenção, usuário ou senha incorretos!';                
            }  
            
            return $retorno;

        } catch (Throwable $e) {
            
            $retorno['status']  = 'error';
            $retorno['message'] = 'Atenção, ocorreu um erro ao autenticar!';            
            return $retorno;

        }

    }
}
