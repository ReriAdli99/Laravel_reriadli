<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rumah_Sakit extends Model
{
    protected $table = 'rumah__sakit';

    public function pasien(){
        return $this->hasMany('App\Pasien','rumah_sakit_id','id');
    }
}
