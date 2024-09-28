<?php

namespace App\Models;

use App\Models\Provincia_Red;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Provincia extends Model
{
    use HasFactory;

    protected $table = 'Provincias';

    protected $primaryKey = 'idProvincia';

    public $incrementing = false;

    // Definimos los campos que se pueden asignar masivamente
    protected $fillable = [
        'idProvincia',
        'nombreProvincia',
        'alturaProvincia',
    ];

    public function Provincia_Red() {
        return $this->hasMany(Provincia_Red::class, 'idProvincia', 'idProvincia');
    }
}
