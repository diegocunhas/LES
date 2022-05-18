<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treinos', function (Blueprint $table) {
            $table->id('cd_treino');
            $table->string('nm_treino')->unique();
            $table->decimal('qt_repeticao_exercicio',3);
            $table->decimal('qt_carga_exercicio',3,2);
            $table->string('hr_duracao_exercicio',5);
            $table->timestamps();
            //-----------Criando chave Estrangeira-----------//
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treinos');
    }
}
