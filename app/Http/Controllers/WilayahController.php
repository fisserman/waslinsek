<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kecamatan;
use App\provinsi;
use App\kabupaten;
use App\pemda;
use App\fungsi;
use App\bidang;
use App\urusan;
use App\unit;
use App\subunit;
use App\check_pemda;

class WilayahController extends Controller
{
  public function index(Request $request){

    if($request->has('cari')){
            
      $pemda = \App\pemda::where('bpkp_id', $request->cari)->get();
      $provinsi = provinsi::all()->pluck("name","id");
      $urusan = urusan::all()->pluck("nama_urusan","id");
      $fungsi = fungsi::all()->pluck("nama_fungsi","id");
      $bpkp = \App\bpkp::all();
      
  } else {

    $provinsi = provinsi::all()->pluck("name","id");
    $urusan = urusan::all()->pluck("nama_urusan","id");
    $fungsi = fungsi::all()->pluck("nama_fungsi","id");
    $bpkp = \App\bpkp::all();
    $pemda = pemda::where('bpkp_id', auth()->user()->bpkp_id)->get();
  }
    return view('/wilayah/index', ['provinsi'=>$provinsi, 'pemda'=>$pemda,'bpkp'=>$bpkp, 'fungsi'=>$fungsi, 'urusan'=>$urusan]);

  }


  public function getKabupaten($id){

      //GET THE ACCOUNT BASED ON TYPE

      $kabupaten = kabupaten::where('provinsi_id',$id)->pluck("name","id");

            return json_encode($kabupaten);


    }


    public function getKecamatan($id){

      //GET THE ACCOUNT BASED ON TYPE

      $kecamatan = kecamatan::where('kabupaten_id',$id)->pluck("name","id");

      return json_encode($kecamatan);

    }

    public function getBidang($id){

      //GET THE ACCOUNT BASED ON TYPE

      $bidang = bidang::where('urusan_id',$id)->pluck("nama_bidang","id");

      return json_encode($bidang);

    }

    public function getUnit($id){

      //GET THE ACCOUNT BASED ON TYPE

      $unit = unit::where('bidang_id',$id)->pluck("nama_unit","id");

      return json_encode($unit);

    }

    public function getSubunit($id){

      //GET THE ACCOUNT BASED ON TYPE

      $subunit = subunit::where('unit_id',$id)->pluck("nama_subunit","id");

      return json_encode($subunit);

    }

    public function create(Request $request)
    {
        $pemda = new pemda;
        $pemda->provinsi_id = $request->provinsi;
        $pemda->kabupaten_id = $request->kabupaten;
        $pemda->kecamatan_id = $request->kecamatan;
        $pemda->urusan_id = $request->urusan;
        $pemda->fungsi_id = $request->fungsi;
        $pemda->bidang_id = $request->bidang;
        $pemda->unit_id = $request->unit;
        $pemda->subunit_id = $request->subunit;
        $pemda->check_pemda_id = "0" ;
        $pemda->bpkp_id = auth()->user()->bpkp_id;
        $pemda->save();
        return redirect('wilayah/') -> with ('sukses', 'Data Berhasil Ditambahkan');
    }
    public function check($id)
    {
      $pemda = pemda::find($id);
      return view('wilayah/check', ["pemda"=>$pemda]);
    }
    public function post(Request $request)
    {
      $check = new check_pemda;
      $check->kriteria = $request->kriteria;
      $check->pertimbangan = $request->pertimbangan;
      $check->kesimpulan = $request->kesimpulan;
      $check->pemda_id = $request->id;
      $check->save();

      $pemda = pemda::find($request->id);
      $pemda->check_pemda_id = $check->id;
      $pemda->save();
      return redirect('wilayah/') -> with ('sukses', 'Data Berhasil Ditambahkan');
    }


}

