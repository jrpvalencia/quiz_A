<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soldado extends Model
{
    use HasFactory;
    public function servicios()
    {
        return $this->belongsToMany('App\Models\Servicio');
    }
}
