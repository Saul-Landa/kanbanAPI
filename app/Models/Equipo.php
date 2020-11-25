<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = ['fecha_registro'];

    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }

    public function rol()
    {
        return $this->belongsTo(Rol::class);
    }

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class);
    }

    public function tableros()
    {
        return $this->hasMany(Tablero::class);
    }
}
