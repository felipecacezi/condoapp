<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsuariosSeeder extends Seeder
{
    
    public function run()
    {

        DB::table('usuarios')->insert([
            'usuario_email' => 'admin@gmail.com',
            'usuario_senha' => 'admin',            
            'usuario_ativo' => 's',
        ]);        
    }

}
