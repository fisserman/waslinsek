<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class program_kp extends Model
{
    protected $table = "program_kp";
    protected $fillable = ['prinas_id','progri_id','kegpri_id','sasaran_kp_id','idk_sasaran_kp_id','bpkp_id','objek_pengawasan_id'];

    public function prinas()
    {
        return $this->belongsTo(prinas::class);
    }
    public function progpri()
    {
        return $this->belongsTo(progpri::class);
    }
    public function kegpri()
    {
        return $this->belongsTo(kegpri::class);
    }
    public function sasaran_kp()
    {
        return $this->belongsTo(sasaran_kp::class);
    }
    public function idk_sasaran_kp()
    {
        return $this->belongsTo(idk_sasaran_kp::class);
    }
}
