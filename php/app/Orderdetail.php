<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model {

    protected $table = 'order_detail';
    protected $fillable = ['id', 'order_id','barang_id','jumlah','harga'];
    protected $primaryKey = 'id';
    public $timestamps = false;

}
