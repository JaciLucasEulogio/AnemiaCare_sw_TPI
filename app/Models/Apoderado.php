<?php

namespace App\Models;

use App\Models\Hijo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Apoderado extends Authenticatable
{   
    use HasFactory;

    protected $table = 'Apoderados'; 

    protected $primaryKey = 'idApoderado'; 

    protected $fillable = [
        'idApoderado', 'password', 'nombre_Apoderado', 'apellido_Apoderado', 
        'sexo_Apoderado', 'nombreSeguro_Apoderado', 'celular_Apoderado',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'idApoderado' => 'string',
        'nombre_Apoderado' => 'string',
        'apellido_Apoderado' => 'string',
        'celular_Apoderado' => 'string',
    ];
    
    public function getAuthPassword()
    {
        return $this->password; // Devuelve el campo correcto de contraseña
    }

    public function Hijo() {
        return $this->hasMany(Hijo::class, 'idHijo', 'idHijo');
    }
}
