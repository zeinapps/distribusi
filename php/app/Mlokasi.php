<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mlokasi extends Model {

    protected $table = 'm_lokasi';
    protected $fillable = ['l_kd', 'l_nama'];
    protected $primaryKey = 'l_kd';
    public $timestamps = false;

}
