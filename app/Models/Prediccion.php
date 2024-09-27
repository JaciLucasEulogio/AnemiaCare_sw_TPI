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

    protected $fillable = [
        'idPrediccion', 'idDosaje', 'fecha_Prediccion', 
        'valorHemoglobinaEstimado_Prediccion', 'fechaRecuperacionEstimada_Prediccion',
        'intervencionAdicional_Prediccion'];
    
    public function Dosaje() {
        return $this->hasOne(Dosaje::class, 'idDosaje', 'idDosaje');
    }
}
