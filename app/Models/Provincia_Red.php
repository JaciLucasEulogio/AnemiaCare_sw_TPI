<?php

namespace App\Models;

use App\Models\MicroRed;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia_Red extends Model
{
    use HasFactory;

    // Definimos la tabla asociada
    protected $table = 'Provincias_Redes';

    protected $primaryKey = 'idProvinciaRed';

    public $incrementing = false;

    // Definimos los campos que se pueden asignar masivamente
    protected $fillable = [
        'idProvinciaRed',
        'idRed',
        'idProvincia',
    ];

    // Si deseas definir relaciones específicas, puedes hacerlo aquí.
    public function Provincia()
    {
        return $this->belongsTo(Provincia::class, 'idProvincia', 'idProvincia');
    }

    public function Red()
    {
        return $this->belongsTo(Red::class, 'idRed', 'idRed');
    }

    public function MicroRed() {
        return $this->hasMany(MicroRed::class, 'idMicroRed', 'idMicroRed');
    }
}
