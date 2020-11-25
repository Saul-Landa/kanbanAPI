<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;
    
    protected $fillable = ['fecha_registro','nombre','clave','fecha_inicio','fecha_fin','fecha_status'];

    public function tableros()
    {
        return $this->hasMany(Tablero::class);
    }

    public function equipos()
    {
        return $this->hasMany(Equipo::class);
    }

    public function subtipoEstado()
    {
        return $this->belongsTo(SubtipoEstado::class);
    }
}
