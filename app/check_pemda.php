<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class check_pemda extends Model
{
    protected $table = "check_pemda";
    protected $fillable = ["kriteria","pertimbagnan","kesimpulan","pemda_id"];

    public function pemda()
    {
        return $this->hasMany(pemda::class);
    }
}
