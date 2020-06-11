<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pemda extends Model
{
    protected $table = "pemda";
    protected $fillable = ["provinsi_id","kabupaten_id","kecamatan_id","urusan_id","fungsi_id","bidang_id","unit_id","subunit_id"];

    public function provinsi()
    {
        return $this->belongsTo(provinsi::class);
    }
    public function kabupaten()
    {
        return $this->belongsTo(kabupaten::class);
    }
    public function kecamatan()
    {
        return $this->belongsTo(kecamatan::class);
    }
    public function urusan()
    {
        return $this->belongsTo(urusan::class);
    }
    public function fungsi()
    {
        return $this->belongsTo(fungsi::class);
    }
    public function bidang()
    {
        return $this->belongsTo(bidang::class);
    }
    public function unit()
    {
        return $this->belongsTo(unit::class);
    }
    public function subunit()
    {
        return $this->belongsTo(subunit::class);
    }
    public function check_pemda()
    {
        return $this->belongsTo(check_pemda::class);
    }
}
