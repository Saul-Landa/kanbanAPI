<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dateTime('fecha_registro', 0);
            $table->foreignId('persona_id')->constrained('persona');
            $table->foreignId('rol_id')->constrained('rol');
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
        Schema::dropIfExists('equipo');
    }
}
