<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use SoftDeletes;
    protected $table = 'actividad';
    protected $primaryKey = 'idactividad';
    public $timestamps = false;
    protected $guarded = [];

    public function practica(){
        return $this->belongsTo('App\Practica', 'idpractica', 'idpractica');
    }
}
