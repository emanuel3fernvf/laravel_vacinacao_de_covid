<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacina', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_paciente');
            $table->foreign('id_paciente')->references('id')->on('paciente')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_lote');
            $table->foreign('id_lote')->references('id')->on('lote');
            $table->timestamp('data_da_vacina');
            $table->string('dose');
            $table->string('vacinador');
            $table->string('unidade_de_vacinacao');
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
        Schema::dropIfExists('vacina');
    }
};
