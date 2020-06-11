<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perenc_objek extends Model
{
    protected $table = 'perenc_objek';
    
    protected $fillable = ['obj_pengawasan_1','obj_pengawasan_2','obj_pengawasan_3','obj_pengawasan_4','obj_pengawasan_5'];

    public function bpkp()
    {
        return $this->belongsTo(bpkp::class);

    }
    public function perenc_st()
    {
        return $this->hasMany(perenc_st::class);
    }
}
