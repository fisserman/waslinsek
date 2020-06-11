<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perenc_st extends Model
{
    protected $table = 'perenc_st';
    protected $fillable = ['no_st','tgl_st','hari_penugasan','tgl_mulai','tgl_selesai','tugas','file','objek_pengawasan_id','unit_pelaksana','updated_by','objek_pengawasan_id'];

    public function objek()
    {
        return $this->belongsTo(perenc_objek::class);
    }
    public function tahap()
    {
        return $this->hasMany(perenc_pelaksanaan::class);
    }
    public function informasi()
    {
        return $this->hasMany(informasi_umum::class);
    }
    public function rekalkulasi()
    {
        return $this->hasMany(rekalkulasi_ats::class);
    }
}