<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bidang extends Model
{
    protected $table = "bidang";
    protected $fillable = ["nama_bidang","fungsi_id","urusan_id"];

    public function pemda()
    {
        return $this->hasMany(pemda::class);
    }
}
