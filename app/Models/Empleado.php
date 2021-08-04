<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellidos',
        'direccion',
        'localidad',
        'codigo_postal',
        'no_documento',
        'documento_id',
        'provincia_id'
    ];

    public function provincia() {
        return $this->belongsTo(Provincia::class);
    }
    public function documento() {
        return $this->belongsTo(Documento::class);
    }
}
