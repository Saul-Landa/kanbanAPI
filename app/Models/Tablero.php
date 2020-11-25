<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tablero extends Model
{
    use HasFactory;

    protected $fillable = ['fecha_registro'];

    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }

    public function funcionalidad()
    {
        return $this->belongsTo(Funcionalidad::class);
    }

    public function subtipoEstado()
    {
        return $this->belongsTo(SubtipoEstado::class);
    }

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class);
    }
}
