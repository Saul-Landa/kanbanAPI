<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubtipoEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtipo_estado', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('descripcion', 45);
            $table->foreignId('tipo_estado_id')->constrained('tipo_estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subtipo_estado');
    }
}
