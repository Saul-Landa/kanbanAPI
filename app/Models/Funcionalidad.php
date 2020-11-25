<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionalidad extends Model
{
    use HasFactory;

    protected $fillable = ['descripcion'];

    public function claveFuncionalidad()
    {
        return $this->belongsTo('App\ClaveFuncionalidad');
    }

    public function subtipoEstado()
    {
        return $this->belongsTo(SubtipoEstado::class);
    }

    public function tableros()
    {
        return $this->hasMany(Tablero::class);
    }
}
