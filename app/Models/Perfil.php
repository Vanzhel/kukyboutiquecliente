<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_documento',
        'documento_id',
        'sexo',
        'fecha_nacimiento',
        'numero_celular',
        'pregunta_id',
        'respuesta'
    ];
}
