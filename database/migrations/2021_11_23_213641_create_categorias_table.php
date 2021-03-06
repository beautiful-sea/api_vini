<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('summa_categoriaatividadecomplementar', function (Blueprint $table) {
            $table->id();
            $table->string('macroatividade');
            $table->string('descricao');
            $table->unsignedBigInteger('atividade_complementar_id');
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
        Schema::dropIfExists('summa_categorias');
    }
}
