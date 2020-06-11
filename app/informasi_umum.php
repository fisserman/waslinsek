<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class informasi_umum extends Model
{
    protected $table = "informasi_umum";
    protected $fillable = ["kabupaten","opd","kepala_daerah","perenc_st_id","kepala_opd"];

    public function surat_tugas()
    {
        return $this->belongsTo(perenc_st::class);
    }
}
