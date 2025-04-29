<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    
    protected $table = 'grupos';

    protected $fillable = [
        'programa_id',
        'docente_id',
        'cupo_maximo',
        'nivel',
    ];

    public function programa()
    {
        return $this->belongsTo(Programa::class, 'programa_id');
    }
    public function docente()
    {
        return $this->belongsTo(User::class, 'docente_id');
    }
}
