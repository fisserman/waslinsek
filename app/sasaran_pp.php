<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sasaran_pp extends Model
{
    protected $table = "sasaran_pp";
    protected $fillable = ["nama_sasaran_pp","kegpri_id"];

    public function program_pp()
    {
        return $this->hasMany(program_pp::class);
    }
    public function kegpri()
    {
        return $this->hasMany(kegpri::class);
    }
    public function idk_sasaran_pp()
    {
        return $this->hasMany(idk_sasaran_pp::class);
    }
}
