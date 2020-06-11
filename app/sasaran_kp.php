<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sasaran_kp extends Model
{
    protected $table = "sasaran_kp";
    protected $fillable = ["nama_sasaran_kp","sasaran_pp_id","kegpri_id"];

    public function program_kp()
    {
        return $this->hasMany(program_kp::class);
    }
    public function kegpri()
    {
        return $this->hasMany(kegpri::class);
    }
}
