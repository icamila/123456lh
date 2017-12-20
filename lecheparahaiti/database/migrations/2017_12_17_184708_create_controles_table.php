<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateControlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('edad');
            $table->double('peso');
            $table->date('fecha');
            $table->double('talla');
            $table->string('pt');
            $table->string('rutf');
            $table->integer('ficha_id')->unsigned();
            $table->foreign('ficha_id')->references('id')->on('fichas');
            $table->integer('medicamento_id')->unsigned();
            $table->foreign('medicamento_id')->references('id')->on('medicamentos');
            $table->integer('enfermedad_id')->unsigned();
            $table->foreign('enfermedad_id')->references('id')->on('enfermedades');
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
        Schema::dropIfExists('controles');
    }
}
