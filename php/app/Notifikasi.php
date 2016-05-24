<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model {

    protected $table = 'notifikasi';
    protected $fillable = ['id', 'user_id','notifikasi','status'];
    protected $primaryKey = 'id';
    public $timestamps = false;

}
