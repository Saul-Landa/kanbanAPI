<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubtipoEstado extends Model
{
    use HasFactory;

    protected $fillable = ['descripcion'];

    public function funcionalidades()
    {
        return $this->hasMany(Funcionalidad::class);
    }

    public function tableros()
    {
        return $this->hasMany(Tablero::class);
    }

    public function proyectos()
    {
        return $this->hasMany(Proyecto::class);
    }

    public function tipoEstado()
    {
        return $this->belongsTo(TipoEstado::class);
    }
}
