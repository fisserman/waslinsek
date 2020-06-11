<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class idk_sasaran_pp extends Model
{
    protected $table = "idk_sasaran_pp";
    protected $fillable = ["nama_idk_pp","stn_idk_pp","tgt_idk_pp","sasaran_pp_id","sasaran_kp_id","ktr_idk_pp"];

    public function program_pp()
    {
        return $this->hasMany(program_pp::class);
    }
    public function sasaran_pp()
    {
        return $this->belongsTo(sasaran_pp::class);
    }
}
