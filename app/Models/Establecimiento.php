<?php

namespace App\Models;

use App\Models\Dosaje;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Establecimiento extends Model
{
    use HasFactory;

    protected $table = 'Establecimientos'; 

    protected $primaryKey = 'idEstablecimiento'; 

    public $incrementing = false;

    protected $fillable = ['idEstablecimiento', 'nombreEstablecimiento', 'idMicroRed'];

    public function Dosaje() {
        return $this->hasMany(Dosaje::class, 'idDosaje', 'idDosaje');
    }

    public function Distrito() {
        return $this->belongsTo('App\Models\Distrito');
    }
}
