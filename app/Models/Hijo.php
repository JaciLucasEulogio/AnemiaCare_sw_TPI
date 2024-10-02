<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hijo extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'Hijos'; 

    protected $primaryKey = 'idHijo'; 

    public $incrementing = false;

    protected $fillable = [
        'idHijo', 'idApoderado', 'nombre_Hijo', 'apellido_Hijo', 'fechaNacimiento_Hijo',
        'sexo_Hijo', 'nombreSeguro_Hijo', 'file_uri',
    ];

    public function Apoderado() {
        return $this->belongsTo('App\Models\Apoderado');
    }

    public function PeriodoTratamiento() {
        return $this->hasMany(PeriodoTratamiento::class, 'idPeriodoTratamiento', 'idPeriodoTratamiento');
    }
}
