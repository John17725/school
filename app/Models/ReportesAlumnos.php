<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportesAlumnos extends Model
{
    use HasFactory;
    protected $table = 'reports_alumnos';
    protected $fillable = [
        'alumno_id',
        'nombre_profesor',
        'materia',
        'observaciones'
    ];

    public function alumno(){
        return $this->belongsTo(\App\Models\Alumnos::class);
    }
}
