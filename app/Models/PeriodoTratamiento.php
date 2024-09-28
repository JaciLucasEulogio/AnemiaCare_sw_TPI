<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeriodoTratamiento extends Model
{
    use HasFactory;

    protected $table = 'PeriodosTratamientos'; 

    protected $primaryKey = 'idPeriodoTratamiento'; 

    public $incrementing = false;

    protected $fillable = [
        'idPeriodoTratamiento', 'DNI_Hijo', 'fechaDiagnosticoAnemia_PeriodoTratamiento',
        'fechaFin_PeriodoTratamiento',
    ];

    public function MicroRed() {
        return $this->belongsTo('App\Models\Hijo');
    }
}
