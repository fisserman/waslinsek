<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fungsi extends Model
{
    protected $table = "fungsi";
    protected $fillable = ["nama_fungsi"];

    public function pemda()
    {
        return $this->hasMany(pemda::class);
    }
}
