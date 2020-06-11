<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perenc_pelaksanaan extends Model
{
    protected $table = 'perenc_pelaksanaan';
    protected $fillable = ['pelaksana_tim','objek','tujuan','output','no_st','progres'];

    public function surat_tugas()
    {
        return $this->belongsTo(perenc_st::class);
    }
}
