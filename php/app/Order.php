<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    protected $table = 'order';
    protected $fillable = ['id', 'user_order','user_agen','time','status_id','nilai'];
    protected $primaryKey = 'id';
    public $timestamps = false;

}
