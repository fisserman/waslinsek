<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class prinas extends Model
{
    protected $table = "prinas";
    protected $fillable = ['id','kd_prinas','nama_pn'];

    public function program_pp()
    {
        return $this->hasMany(program_pp::class);
    }

    public function program_kp()
    {
        return $this->hasMany(program_kp::class);
    }

    public function progpri()
    {
        return $this->belongsTo(progpri::class);
    }
}
