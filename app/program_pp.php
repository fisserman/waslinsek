<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class program_pp extends Model
{
    protected $table = "program_pp";
    protected $fillable = ['prinas_id','progri_id','kegpri_id','sasaran_pp_id','idk_sasaran_pp_id','bpkp_id','objek_pengawasan_id'];

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
    public function sasaran_pp()
    {
        return $this->belongsTo(sasaran_pp::class);
    }
    public function idk_sasaran_pp()
    {
        return $this->belongsTo(idk_sasaran_pp::class);
    }
}
