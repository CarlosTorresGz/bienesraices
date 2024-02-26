<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropiedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedades', function (Blueprint $table) {
            $table->id('codigoPropiedad');
            $table->string('color', 30);
            $table->double('metros');
            $table->string('tipoPropiedad', 50);
            $table->double('costoxmtr', 12, 2)->default(100.00);
            $table->integer('codigoDuenio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('propiedades');
    }
}
