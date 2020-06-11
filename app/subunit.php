<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subunit extends Model
{
    protected $table = "subunit";
    protected $fillable = ["nama_subunit","unit_id"];

    public function pemda()
    {
        return $this->hasMany(pemda::class);
    }
}
