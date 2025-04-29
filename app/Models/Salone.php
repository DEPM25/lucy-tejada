<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salone extends Model
{
    protected $table = 'salones';

    protected $fillable = [
        'nombre',
        'capacidad',
        'equipamiento',
    ];
}
