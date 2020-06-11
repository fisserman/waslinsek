<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\provinsi;
use App\kabupaten;

class InformasiController extends Controller
{
    public function index()
    {
        $st= \App\perenc_st::where('bpkp_id', auth()->user()->bpkp_id)->where("objek_pengawasan_id", 22)->get();
        $provinsi = provinsi::all()->pluck("name","id");;
        $data = compact("st","provinsi");
        return view("/pelaksanaan/pendidikan/informasi",$data);
    }
    public function getKabupaten($id){

        //GET THE ACCOUNT BASED ON TYPE
  
        $kabupaten = kabupaten::where('provinsi_id',$id)->pluck("name","id");
  
              return json_encode($kabupaten);
      }
    public function create(Request $request)
    {
        \App\informasi_umum::create($request->all());

        return redirect('/pelaksanaan/pendidikan') -> with('sukses', 'Data Berhasil Ditambahkan');
    }
}
