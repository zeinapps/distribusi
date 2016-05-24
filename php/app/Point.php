<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model {

    protected $table = 'point';
    protected $fillable = ['id', 'user_id','nilai_beli','point'];
    protected $primaryKey = 'id';
    public $timestamps = false;

}
