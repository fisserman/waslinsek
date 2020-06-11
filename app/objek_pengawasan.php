<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class objek_pengawasan extends Model
{
    protected $table = "objek_pengawasan";
    protected $fillable = ['id','nama_objek'];
}
