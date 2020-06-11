<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kabupaten extends Model
{
    protected $table = "kabupaten";
    protected $fillable = ["id","name","provinsi_id"] ;

    public function provinsi()
    {
        return $this->belongsTo(provinsi::class);
    }

    public function kecamatan()
    {
        return $this->hasMany(kecamatan::class);
    }
    public function pemda()
    {
        return $this->hasMany(pemda::class);
    }
}
