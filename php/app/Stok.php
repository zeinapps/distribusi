<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stok extends Model {

    protected $table = 'stok';
    protected $fillable = ['id', 'barang_id','user_id','stok'];
    protected $primaryKey = 'id';
    public $timestamps = false;

}
