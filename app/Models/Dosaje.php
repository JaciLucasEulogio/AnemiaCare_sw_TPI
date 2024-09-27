<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosaje extends Model
{
    use HasFactory;

    protected $table = 'Dosajes'; 

    protected $primaryKey = 'idDosaje'; 

    protected $fillable = [
        'idDosaje', 'idHijo', 'idDoctor', 'fecha_Dosaje', 'valorHemoglobina_Dosaje',
        'nivelAnemia_Dosaje', 'peso_Dosaje', 'talla_Dosaje', 'edadMeses_Dosaje', 'nivelHierro_Dosaje',
        'estadoRecuperacion_Dosaje', 'fechaRecuperacionReal',
    ];

    public function Doctor() {
        return $this->belongsTo('App\Models\Doctor');
    }

    public function Hijo() {
        return $this->belongsTo('App\Models\Hijo');
    }

    public function Establecimiento() {
        return $this->belongsTo('App\Models\Establecimiento');
    }
    
    public function Prediccion()
    {
        return $this->belongsTo(Prediccion::class, 'idDosaje', 'idDosaje');
    }
}
