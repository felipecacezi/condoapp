<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuarios extends Migration
{
    
    public function up()
    {
        Schema::create('usuarios', function(Blueprint $table){
            $table->integer('usuario_id')->autoIncrement()->nullable($value=false);
            $table->string('usuario_email', 100)->nullable($value=false);
            $table->string('usuario_senha', 32)->nullable($value=false);
            $table->string('usuario_ativo', 1)->nullable($value=false);
        });
    }
   
    public function down()
    {
        Schema::drop('usuarios');
    }
}
