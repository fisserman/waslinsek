<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerencanaanController extends Controller
{
    public function index()
    {
        $objek = \App\perenc_objek::where('bpkp_id', auth()->user()->bpkp_id)->get();
        $pelaksanaan = \App\perenc_pelaksanaan::all();
        $st = \App\perenc_st::all();
        $bpkp = \App\bpkp::all();
        $pegawai = \App\perenc_tim::all();

        return view ('/perencanaan/index',['objek'=>$objek,'bpkp'=>$bpkp, 'pelaksanaan'=>$pelaksanaan, 'st'=>$st, 'pegawai'=>$pegawai]);
    }
    public function index2()
    {
        return view ('/perencanaan/index2');
    }
    public function index_PRKP()
    {
        return view ('/perencanaan/PRKP');
    }
    public function create(Request $request)
    {
        \App\perenc_objek::create($request->all());
        return redirect('/perencanaan/index') -> with('sukses', 'Data Berhasil Ditambahkan'); 
    }
    public function update(Request $request,$id)
    {
        $objek = \App\perenc_objek::find($id);
        $objek->update($request->all());
        return redirect('/perencanaan/index')->with('sukses', 'Data Berhasil Dirubah');
    }
    public function delete2($id)
    {
        $objek = \App\perenc_objek::find($id);
        $objek->delete();
        return redirect('/perencanaan/index') -> with('sukses', 'Data Berhasil Dihapus');
    }

}   
