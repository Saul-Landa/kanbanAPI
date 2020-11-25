<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre', 100);
            $table->string('clave', 10)->unique();
            $table->string('apellido_paterno', 100);
            $table->string('apellido_materno', 100);
            $table->foreignId('genero_id')->constrained('genero');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona');
    }
}
