<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rekalkulasi_ats extends Model
{
    protected $table = "rekalkulasi_ats";
    protected $fillable = ['sasaran','indikator','usia','target','jumlah_ats','perenc_st_id'];

    public function surat_tugas()
    {
        return $this->belongsTo(perenc_st::class);
    }

}

