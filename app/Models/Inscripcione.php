<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscripcione extends Model
{
    protected $table = 'inscripciones';

    protected $fillable = [
        'user_id',
        'grupo_id',
        'fecha_inscripcion',
        'estado',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function grupo()
    {
        return $this->belongsTo(Grupo::class, 'grupo_id');
    }

}
