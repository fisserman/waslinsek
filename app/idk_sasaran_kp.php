<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class idk_sasaran_kp extends Model
{
    protected $table = "idk_sasaran_kp";
    protected $fillable = ["nama_idk_kp","stn_idk_kp","tgt_idk_kp","sasaran_pp_id","sasaran_kp_id","ktr_idk_kp"];

    public function program_kp()
    {
        return $this->hasMany(program_kp::class);
    }
}
