<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitante', function (Blueprint $table){
            $table->increments('id');
            $table->string('nome', 150);
            $table->string('sexo', 1);
            $table->string('email', 60);
            $table->string('telefone_celular', 15);
            $table->date('data_nascimento');
            $table->string('logradouro', 100);
            $table->integer('numero');
            $table->string('complemento',100);            
            $table->string('bairro', 40);
            $table->string('cidade', 30); 
            $table->string('uf', 2);
            $table->string('cep', 9);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('visitante');
    }
}
