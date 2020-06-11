<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = 'post';
    public function user()
    {
        // disini kita katakan bahwa setiap post hanya akan dimiliki oleh 1 user
        // keterangan: itu UserModel sesuaikan dengan nama MODEL USER yang agan gunakan
        return $this->belongsTo(User::class);
     }
}
