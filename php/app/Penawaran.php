<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penawaran extends Model {

    protected $table = 'penawaran';
    protected $fillable = ['id', 'pemberi','penerima','status','member_tipe'];
    protected $primaryKey = 'id';
    public $timestamps = false;

}
