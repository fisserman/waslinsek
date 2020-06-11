<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kegpri extends Model
{
    protected $table = 'kegpri';
    protected $fillable = ['id','kd_kegpri','nama_kp','progpri_id'];

    public function progpri()
    {
        return $this->hasMany(progpri::class);
    }
    
    public function program_pp()
    {
        return $this->hasMany(program_pp::class);
    }
    public function program_kp()
    {
        return $this->hasMany(program_kp::class);
    }
    public function sasaran_kp()
    {
        return $this->belongsTo(sasaran_kp::class);
    }
    public function sasaran_pp()
    {
        return $this->belongsTo(sasaran_pp::class);
    }
}
