<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CondominiosSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('condominios')->insert([
            'condominio_nome' => 'condominio estrela',
            'condominio_cnpj' => '12345678901234',
            'condominio_rua' => 'avenida sao jeronimo',
            'condominio_cep' => '13474000',
            'condominio_cidade' => 'Americana',
            'condominio_estado' => 'SP',
            'condominio_pais' => 'Brasil',
            'condominio_email' => 'condominioestrela@contato.com',            
            'usuario_id' => 1,
            'condominio_ativo' => 's',
        ]);        
    }

}
