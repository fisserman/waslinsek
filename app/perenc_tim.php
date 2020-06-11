<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perenc_tim extends Model
{
    protected $table = 'perenc_tim';
    protected $fillable = ['nip','nama_pegawai','kedudukan','jabatan','kode_tim'];
}
