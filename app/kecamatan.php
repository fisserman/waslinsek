<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kecamatan extends Model
{
    protected $table = "kecamatan" ;
    protected $fillable = ["id","name","kabupaten_id"] ;

    public function kabupaten()
    {
        return $this->belongsTo(kabupaten::class);
    }
    public function pemda()
    {
        return $this->hasMany(pemda::class);
    }
}
