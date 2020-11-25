<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionalidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionalidad', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre', 150);
            $table->string('descripcion', 255);
            $table->foreignId('clave_funcionalidad_id')->constrained('clave_funcionalidad');
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
        Schema::dropIfExists('funcionalidad');
    }
}
