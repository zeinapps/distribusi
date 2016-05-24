<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Msetting extends Model {

    protected $table = 'm_setting';
    protected $fillable = ['s_kd', 's_nama', 's_value', 's_ket'];
    protected $primaryKey = 's_kd';
    public $timestamps = false;

}
