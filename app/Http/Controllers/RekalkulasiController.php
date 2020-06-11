<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\idk_sasaran_kp;
use \App\idk_sasaran_pp;
use \App\program_pp;
use \App\sasaran_pp;

class RekalkulasiController extends Controller
{
    public function index()
    {
        $st = \App\perenc_st::where('bpkp_id', auth()->user()->bpkp_id)->where("objek_pengawasan_id", 22)->get();
        $program_pp = program_pp::where('bpkp_id', auth()->user()->bpkp_id)->where('objek_pengawasan_id', 22)->get();
        $sasaran_pp = sasaran_pp::where('objek_pengawasan_id', 22)->pluck('nama_sasaran_pp','id');
        $sasaran = sasaran_pp::where('objek_pengawasan_id', 22)->get();
        $indikator = idk_sasaran_pp::where('sasaran_pp_id', 9)->get();
        $idk = idk_sasaran_pp::where('sasaran_pp_id', 10)->get();
        $data = compact("st","program_pp","sasaran_pp","sasaran","indikator","idk");
        return view('/pelaksanaan/pendidikan/tracing', $data);
    }
    public function getUsia($id){

        //GET THE ACCOUNT BASED ON TYPE
        
        $usia = idk_sasaran_pp::where('id', $id)->pluck("ktr_idk_pp","id");
  
              return json_encode($usia);
    }
    public function getTarget($id){

        //GET THE ACCOUNT BASED ON TYPE
        
        $target = idk_sasaran_pp::where('id', $id)->pluck("tgt_idk_pp","id");
  
              return json_encode($target);
    }
    public function getIndikator($id){

        //GET THE ACCOUNT BASED ON TYPE
        
        $indikator = idk_sasaran_pp::where('sasaran_pp_id',"$id")->pluck("nama_idk_pp","id");
  
              return json_encode($indikator);
    }
    public function create(Request $request)
    {
        dd($request->all());
    }
}
