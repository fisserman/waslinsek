<?php

namespace App\Http\Controllers;


use App\perenc_tim;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index(Request $request)
    {

        if($request->has('cari')){
            
            $data_pegawai = \App\perenc_tim::where('kode_tim', $request->cari) 
            ->where('bpkp_id', auth()->user()->bpkp->id)->get();
            $bpkp = \App\bpkp::all();
            
        } else{
            $data_pegawai = \App\perenc_tim::where('bpkp_id', auth()->user()->bpkp_id)->get()->SortBy('kode_tim');
            $bpkp = \App\bpkp::all();
        }
    	return view('/data_tim/index',['data_pegawai' => $data_pegawai, 'bpkp'=>$bpkp]);
    }

    public function create(Request $request)
    {
        $data_pegawai = new \App\perenc_tim;
        $data_pegawai->nip = $request->nip;
        $data_pegawai->nama_pegawai = $request->nama_pegawai;
        $data_pegawai->jabatan = $request->jabatan;
        $data_pegawai->kedudukan = $request->kedudukan;
        $data_pegawai->kode_tim = $request->kode_tim;
        $data_pegawai->bpkp_id = auth()->user()->bpkp_id;
        $data_pegawai->save();
        return redirect('/data_tim/index')->with('sukses', 'Data Berhasil Ditambahkan');
    }
    public function edit($id)
    {
        $pegawai = \App\perenc_tim::find($id); 
        return view('site.edit', compact($pegawai));
    }
    public function update(Request $request)
    {
        $tim = perenc_tim::find($request->id);
        $tim->update($request->all());     
        return redirect('/data_tim/index')->with('ubah', 'Data Berhasil Dirubah');
    }
    public function delete($id)
    {
        $data_pegawai = \App\perenc_tim::find($id);
        $data_pegawai->delete();
        return redirect('/data_tim/index')->with('hapus', 'Data Berhasil Dihapus');
    }
  
} 
