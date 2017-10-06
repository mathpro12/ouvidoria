<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaseStructure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cpf', 14);
            $table->string('email');
            $table->string('rua');
            $table->string('numero');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->string('senha');

            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');

            $table->timestamps();
        });

        Schema::create('secretarias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('responsavel');

            $table->timestamps();
        });

        Schema::create('tipos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('descricao');

            $table->timestamps();
        });

        Schema::create('solicitacoes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pessoa')->unsigned();
            $table->integer('tipo')->unsigned();
            $table->integer('secretaria')->unsigned();
            $table->integer('status')->unsigned();
            $table->string('descricao');

            $table->timestamps();

            $table->foreign('pessoa')->references('id')->on('pessoas');
            $table->foreign('tipo')->references('id')->on('tipos');
            $table->foreign('secretaria')->references('id')->on('secretarias');
            $table->foreign('status')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('solicitacoes');
        Schema::drop('pessoas');
        Schema::drop('statuses');
        Schema::drop('secretarias');
        Schema::drop('tipos');
    }
}
