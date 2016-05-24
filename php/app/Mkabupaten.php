<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mkabupaten extends Model {

    protected $table = 'm_kabupaten';
    protected $fillable = ['id_kab','id_prov', 'nama_kab'];
    protected $primaryKey = 'id_kab';
    public $timestamps = false;

}
