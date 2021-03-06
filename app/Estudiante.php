<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use SoftDeletes;
    protected $table = 'estudiante';
    protected $primaryKey = 'idestudiante';
    public $timestamps = false;
    protected $guarded = [];

    public function practica(){
        return $this->hasMany('App\Practica');
    }

    public function carrera(){
        return $this->belongsTo('App\Carrera', 'idcarrera', 'idcarrera');
    }

}
