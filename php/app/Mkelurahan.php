<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mkelurahan extends Model {

    protected $table = 'm_kelurahan';
    protected $fillable = ['id_kel','id_kec', 'nama_kel'];
    protected $primaryKey = 'id_kel';
    public $timestamps = false;

}
