<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use SoftDeletes;
    protected $table = 'carrera';
    protected $primaryKey = 'idcarrera';
    public $timestamps = false;
    protected $guarded = [];

    public function escuela(){
        return $this->belongsTo('App\Escuela', 'idescuela', 'idescuela');
    }
    public function estudiante(){
        return $this->hasMany('App\Estudiante');
    }

    public function coordinador(){
        return $this->hasOne('App\Coordinador');
    }
}
