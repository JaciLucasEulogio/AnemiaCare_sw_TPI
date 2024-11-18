<?php

namespace App\Models;

use App\Models\Dosaje;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prediccion extends Model
{
    use HasFactory;

    protected $table = 'Predicciones'; 

    protected $primaryKey = 'idProvincia'; 

    public $incrementing = false;

    protected $fillable = [
        'idPrediccion', 
        'idDosaje', 
        'fechaHora_Prediccion', 
        'valorHemoglobinaEstimado1_Prediccion', 
        'valorHemoglobinaEstimado3_Prediccion',
        'valorHemoglobinaEstimado6_Prediccion',
        'precisionHemoglobina1',
        'precisionHemoglobina3',
        'precisionHemoglobina6',
        'fechaRecuperacionEstimada_Prediccion',
        'diasRecuperacion_Prediccion',
        'intervencionAdicionalPorcentaje_Prediccion',
        'intervencionAdicionalMensaje_Prediccion',
    ];
    
    public function Dosaje() {
        return $this->hasOne(Dosaje::class, 'idDosaje', 'idDosaje');
    }
}
