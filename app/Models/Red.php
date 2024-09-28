<?php

namespace App\Models;

use App\Models\Provincia_Red;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Red extends Model
{
    use HasFactory;

    protected $table = 'Redes'; 

    protected $primaryKey = 'idRed'; 

    public $incrementing = false;

    protected $fillable = ['idRed', 'nombreRed', 'idProvincia'];

    public function Provincia_Red() {
        return $this->hasMany(Provincia_Red::class, 'idRed', 'idRed');
    }
}
