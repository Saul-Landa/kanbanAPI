<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dateTime('fecha_registro', 0);
            $table->string('nombre', 150);
            $table->string('clave', 45);
            $table->dateTime('fecha_inicio', 0);
            $table->dateTime('fecha_fin', 0);
            $table->dateTime('fecha_status', 0);
            $table->foreignId('subtipo_estado_id')->constrained('subtipo_estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyecto');
    }
}
