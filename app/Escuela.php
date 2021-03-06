<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    use SoftDeletes;
    protected $table = 'escuela';
    protected $primaryKey = 'idescuela';
    public $timestamps = false;
    protected $guarded = [];

    public function profesor(){
        return $this->hasMany('App\Profesor');
    }

    public function facultad(){
        return $this->belongsTo('App\Facultad', 'idfacultad', 'idfacultad');
    }

    public function carrera(){
        return $this->hasMany('App\Carrera');
    }
}
