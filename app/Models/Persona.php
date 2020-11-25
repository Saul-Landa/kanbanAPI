<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','clave','apellido_paterno','apellido_materno'];

    public function genero()
    {
        return $this->belongsTo(Genero::class);
    }

    public function equipos()
    {
        return $this->hasMany(Equipo::class);
    }
}
