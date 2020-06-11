<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class provinsi extends Model
{
    protected $table = "provinsi" ;
    protected $fillabel = ["id","name"] ;

    public function kabupaten()
    {
        return $this->hasMany(kabupaten::class);
    }
    public function pemda()
    {
        return $this->hasMany(pemda::class);
    }
}
