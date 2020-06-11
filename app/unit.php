<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class unit extends Model
{
    protected $table = "unit";
    protected $fillable = ["nama_unit"];

    public function pemda()
    {
        return $this->hasMany(pemda::class);
    }
}
