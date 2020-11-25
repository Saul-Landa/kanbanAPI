<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tablero', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dateTime('fecha_status', 0);
            $table->foreignId('equipo_id')->constrained('equipo');
            $table->foreignId('subtipo_estado_id')->constrained('subtipo_estado');
            $table->foreignId('funcionalidad_id')->constrained('funcionalidad');
            $table->foreignId('proyecto_id')->constrained('proyecto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tablero');
    }
}
