<?php

namespace App\Models;

use App\Models\Distrito;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MicroRed extends Model
{
    use HasFactory;

    protected $table = 'MicroRedes'; 

    protected $primaryKey = 'idMicroRed'; 

    public $incrementing = false;

    protected $fillable = ['idMicroRed', 'nombreMicroRed', 'idRed'];

    public function Distrito() {
        return $this->hasMany(Distrito::class, 'idDistrito', 'idDistrito');
    }

    public function MicroRed() {
        return $this->belongsTo('App\Models\Provincia_Red');
    }
}
