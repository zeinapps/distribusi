<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'email', 'password','aktivasi_token','is_verify','member_tipe', 'kode_sponsor'
        , 'poin', 'kode_pos', 'id_kel', 'id_kec', 'id_kab', 'id_prov'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public $timestamps = false;
}
