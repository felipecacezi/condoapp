<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Condominios extends Migration
{
    
    public function up()
    {
        
        Schema::create('condominios', function(Blueprint $table){
            $table->integer('condominio_id')->autoIncrement()->nullable($value=false);
            $table->integer('usuario_id')->nullable($value=false);
            $table->string('condominio_nome', 100)->nullable($value=false);
            $table->string('condominio_cnpj', 20)->nullable($value=false);
            $table->string('condominio_rua', 500)->nullable($value=false);
            $table->string('condominio_cep', 10)->nullable($value=false);
            $table->string('condominio_cidade', 500)->nullable($value=false);
            $table->string('condominio_estado', 500)->nullable($value=false);
            $table->string('condominio_pais', 500)->nullable($value=false);
            $table->string('condominio_email', 100)->nullable($value=false);            
            $table->string('condominio_ativo', 1)->nullable($value=false);
        });

    }
    
    public function down()
    {
        Schema::drop('condominios');
    }

}
