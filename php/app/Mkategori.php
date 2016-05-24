<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mkategori extends Model {

    protected $table = 'm_kategori';
    protected $fillable = ['k_id', 'k_nama'];
    protected $primaryKey = 'k_id';
    public $timestamps = false;

}
