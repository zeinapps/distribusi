<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model {

    protected $table = 'barang';
    protected $fillable = ['id', 'nama', 'kategori', 'satuan', 'harga', 'PF', 'PV', 'created_at', 'updated_at'];
    protected $primaryKey = 'id';
    public $timestamps = false;

}
