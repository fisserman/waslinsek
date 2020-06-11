<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class urusan extends Model
{
    protected $table = "urusan";
    protected $fillable = ["nama_urusan"];

    public function pemda()
    {
        return $this->hasMany(pemda::class);
    }
}
