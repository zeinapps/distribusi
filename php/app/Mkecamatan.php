<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mkecamatan extends Model {

    protected $table = 'm_kecamatan';
    protected $fillable = ['id_kec','id_kab', 'nama_kec'];
    protected $primaryKey = 'id_kec';
    public $timestamps = false;

}
