<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mprovinsi extends Model {

    protected $table = 'm_provinsi';
    protected $fillable = ['id_prov', 'nama_prov'];
    protected $primaryKey = 'id_prov';
    public $timestamps = false;

}
