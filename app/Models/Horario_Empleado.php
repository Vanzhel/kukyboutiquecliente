<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario_Empleado extends Model
{
    use HasFactory;
    protected $fillable = [
        'empleado_id',
        'horario_id'
    ];
}
