<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasiens';

    public function RumahSakit(){
        return $this->hasOne('App\Rumah_Sakit','id','rumah_sakit_id');
    }
}
