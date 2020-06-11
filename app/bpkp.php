<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bpkp extends Model
{
    protected $table = 'bpkp';
    
    protected $fillable = ['nama_unit','alamat','email','telepon','website'];

    public function user()
    {
        return $this->hasMany(User::class);
    }
    public function perenc_objek()
    {
        return $this->hasOne(perenc_objek::class);
    }
}
