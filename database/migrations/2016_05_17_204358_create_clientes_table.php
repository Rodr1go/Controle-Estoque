<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $t) {
            $t->increments('id');
            $t->string('nome', 60);
            $t->string('endereco', 255);
            $t->string('bairro', 100);
            $t->string('cidade', 50);
            $t->integer('telefone');
            $t->integer('celular');
            $t->string('email');
            $t->timestamps();
        });
    }
     
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clientes');
    }
}
