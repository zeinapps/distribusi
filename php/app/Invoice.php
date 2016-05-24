<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model {

    protected $table = 'invoice';
    protected $fillable = ['id', 'user_id', 'time', 'nominal', 'bank', 'bukti_bayar'];
    protected $primaryKey = 'id';
    public $timestamps = false;

}
