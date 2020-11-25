<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEstado extends Model
{
    use HasFactory;

    protected $fillable = ['descripcion'];

    public function subtipoEstado()
    {
        return $this->belongsTo(SubtipoEstado::class);
    }
}
