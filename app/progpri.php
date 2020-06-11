<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class progpri extends Model
{
    protected $table = 'progpri';
    protected $fillable = ['id','kd_progpri','nama_pp','prinas_id'];

    public function prinas()
    {
        return $this->hasMany(prinas::class);
    }

    public function program_pp()
    {
        return $this->hasMany(program_pp::class);
    }

    
    public function program_kp()
    {
        return $this->hasMany(program_pp::class);
    }

    public function kegpri()
    {
        return $this->belongsTo(kegpri::class);
    }
}
