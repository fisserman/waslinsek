<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemilihanController extends Controller
{
    public function index()
    {
        $tugas = \App\perenc_pelaksanaan::where('bpkp_id', auth()->user()->bpkp_id)->get();
        $st = \App\perenc_st::all();
        $bpkp = \App\bpkp::all();
        return view ('/pemilihan/index',['team'=>$tugas, 'st'=>$st,'bpkp'=>$bpkp]);
    }
    public function make(Request $request)
    {
        $tim = new \App\perenc_pelaksanaan;
        $tim->pelaksana_tim = $request->pelaksana_tim;
        $tim->objek = $request->objek;
        $tim->tujuan = $request->tujuan;
        $tim->progres = $request->progres;
        $tim->no_st = $request->no_st;
        $tim->bpkp_id = auth()->user()->bpkp_id; 
        $tim->save();
        return redirect('/pemilihan/index') -> with('sukses1', 'Data Berhasil Ditambahkan'); 
    }
    public function update(Request $request,$id)
    {
        $tim = \App\perenc_pelaksanaan::find($id);
        $tim->update($request->all());
        return redirect('/pemilihan/index')->with('sukses', 'Data Berhasil Dirubah');
    }
    public function delete1($id)
    {
        $tim = \App\perenc_pelaksanaan::find($id);
        $tim->delete();
        return redirect('/pemilihan/index') -> with('sukses2', 'Data Berhasil Dihapus');
    }
}
