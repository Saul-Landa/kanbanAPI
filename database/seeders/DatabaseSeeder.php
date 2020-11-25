<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    static $generos = [
        'Femenino',
        'Masculino'
    ];

    static $roles = [
        'Scrum Master',
        'Product Owner',
        'Development'
    ];

    static $claves = [
        'F01','F02','F03',
        'F04','F05','F06',
        'F07','F08','F09',
        'F11','F11','F12'
    ];

    static $tipos = [
        'Tablero',
        'Funcionalidad'
    ];

    static $subtipos = [
        'Pendiente',
        'Seleccionado',
        'Proceso',
        'Terminado'
    ];

    static $prioridades = [
        'Alta',
        'Media',
        'Baja'
    ];
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$generos as $genero) {
            DB::table('genero')->insert([
                'descripcion' => $genero
            ]);
        }

        foreach (self::$roles as $rol) {
            DB::table('rol')->insert([
                'descripcion' => $rol
            ]);
        }

        foreach (self::$claves as $clave) {
            DB::table('clave_funcionalidad')->insert([
                'descripcion' => $clave
            ]);
        }

        foreach (self::$tipos as $tipo) {
            DB::table('tipo_estado')->insert([
                'descripcion' => $tipo
            ]);
        }

        foreach (self::$subtipos as $subtipo) {
            DB::table('subtipo_estado')->insert([
                'descripcion' => $subtipo,
                'tipo_estado_id' => 1
            ]);
        }

        foreach (self::$prioridades as $prioridad) {
            DB::table('subtipo_estado')->insert([
                'descripcion' => $prioridad,
                'tipo_estado_id' => 2
            ]);
        }
    }
}
