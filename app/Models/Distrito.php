<?php

namespace App\Models;

use App\Models\Establecimiento;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Distrito extends Model
{
    use HasFactory;

    protected $table = 'Distritos'; 

    protected $primaryKey = 'idDistrito'; 

    public $incrementing = false;

    protected $fillable = ['idDistrito', 'nombreDistrito', 'idMicroRed'];

    public function Establecimiento() {
        return $this->hasMany(Red::class, 'idEstablecimiento', 'idEstablecimiento');
    }

    public function MicroRed() {
        return $this->belongsTo('App\Models\MicroRed');
    }
}
