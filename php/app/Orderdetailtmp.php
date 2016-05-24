<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdetailtmp extends Model {

    protected $table = 'order_detail_tmp';
    protected $fillable = ['id','barang_id','jumlah','harga','user_id'];
    protected $primaryKey = 'id';
    public $timestamps = false;

}
