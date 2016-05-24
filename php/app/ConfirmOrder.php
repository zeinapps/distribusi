<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfirmOrder extends Model {

    protected $table = 'confirm_order';
    protected $fillable = ['id', 'orderid','bank','nomer_rekening','nama_pemilik','jumlah','waktu'];
    protected $primaryKey = 'id';
    public $timestamps = false;

}
