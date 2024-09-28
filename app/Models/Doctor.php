<?php

namespace App\Models;

use App\Models\Dosaje;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    use HasFactory;

    protected $table = 'Doctores'; 

    protected $primaryKey = 'idDoctor'; 
    
    public $incrementing = false;
    
    protected $fillable = [
        'idDoctor', 'nombre_Doctor', 'apellido_Doctor', 'celular_Doctor',
    ];

    public function Dosaje() {
        return $this->hasMany(Dosaje::class, 'idDosaje', 'idDosaje');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'idDoctor', 'idDoctor');
    }
}
