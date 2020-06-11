<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class SuratTugasController extends Controller
{
    public function index_pendidikan()
    {
        $surat_tugas= \App\perenc_st::where('bpkp_id', auth()->user()->bpkp_id)->where("objek_pengawasan_id", 22)->get();
        $objek = \App\perenc_objek::all();
        $bpkp = \App\bpkp::all();
        return view ('/surat_tugas/pendidikan',['surat_tugas'=>$surat_tugas,'bpkp'=>$bpkp, 'objek'=>$objek]);
    }
    public function index_kependudukan()
    {
        $surat_tugas= \App\perenc_st::where('bpkp_id', auth()->user()->bpkp_id)->where("objek_pengawasan_id", 21)->get();
        $objek = \App\perenc_objek::all();
        $bpkp = \App\bpkp::all();
        return view ('/surat_tugas/kependudukan',['surat_tugas'=>$surat_tugas,'bpkp'=>$bpkp, 'objek'=>$objek]);
    }
    public function index_kesehatan()
    {
        $surat_tugas= \App\perenc_st::where('bpkp_id', auth()->user()->bpkp_id)->where("objek_pengawasan_id", 23)->get();
        $objek = \App\perenc_objek::all();
        $bpkp = \App\bpkp::all();
        return view ('/surat_tugas/kesehatan',['surat_tugas'=>$surat_tugas,'bpkp'=>$bpkp, 'objek'=>$objek]);
    }
    public function create_pendidikan(Request $request)
    {
        // dd($request->all());
        $st = new \App\perenc_st;
        $st->no_st = $request->no_st;
        $st->tgl_st = $request->tgl_st;
        $st->hari_penugasan = $request->hari_penugasan;
        $st->tgl_mulai = $request->tgl_mulai;
        $st->tgl_selesai = $request->tgl_selesai;
        $st->tugas = $request->tugas;
        $st->bpkp_id = auth()->user()->bpkp_id;
        $st->unit_pelaksana = auth()->user()->bpkp->nama_unit;
        $st->updated_by = auth()->user()->nama;
        $st->objek_pengawasan_id = 22;
        if($request -> hasFile('file')){
            $request -> file('file')->move('surat_tugas/',$request->file('file')->getClientOriginalName());
            $st->file = $request->file('file')->getClientOriginalName();
        }
        $st->save();
        return redirect('/surat_tugas/pendidikan') -> with ('sukses', 'Data Berhasil Ditambahkan');
    }
    public function update_pendidikan(Request $request)
    {
        // dd($request->all());
        $st = \App\perenc_st::find($request->id);

        $st -> update ([
            $st->no_st = $request->no_st,
            $st->tgl_st = $request->tgl_st,
            $st->hari_penugasan = $request->hari_penugasan,
            $st->tgl_mulai = $request->tgl_mulai,
            $st->tgl_selesai = $request->tgl_selesai,
            $st->tugas = $request->tugas,
            $st->unit_pelaksana = auth()->user()->bpkp->nama_unit,
            $st->updated_by = auth()->user()->nama,
            $st->objek_pengawasan_id = 22,
            ]);

            if($request -> hasFile('file')){
            $st -> update ([
                $request -> file('file')->move('surat_tugas/',$request->file('file')->getClientOriginalName()),
                $st->file = $request->file('file')->getClientOriginalName(),
            ]);
        }
        return redirect('/surat_tugas/pendidikan')->with('ubah', 'Data Berhasil Dirubah');
    }
    public function create_kependudukan(Request $request)
    {
        // dd($request->all());
        $st = new \App\perenc_st;
        $st->no_st = $request->no_st;
        $st->tgl_st = $request->tgl_st;
        $st->hari_penugasan = $request->hari_penugasan;
        $st->tgl_mulai = $request->tgl_mulai;
        $st->tgl_selesai = $request->tgl_selesai;
        $st->tugas = $request->tugas;
        $st->bpkp_id = auth()->user()->bpkp_id;
        $st->unit_pelaksana = auth()->user()->bpkp->nama_unit;
        $st->updated_by = auth()->user()->nama;
        $st->objek_pengawasan_id = 21;
        if($request -> hasFile('file')){
            $request -> file('file')->move('surat_tugas/',$request->file('file')->getClientOriginalName());
            $st->file = $request->file('file')->getClientOriginalName();
        }
        $st->save();
        return redirect('/surat_tugas/kependudukan') -> with ('sukses', 'Data Berhasil Ditambahkan');
    }
    public function update_kependudukan(Request $request)
    {
        // dd($request->all());
        $st = \App\perenc_st::find($request->id);

        $st -> update ([
            $st->no_st = $request->no_st,
            $st->tgl_st = $request->tgl_st,
            $st->hari_penugasan = $request->hari_penugasan,
            $st->tgl_mulai = $request->tgl_mulai,
            $st->tgl_selesai = $request->tgl_selesai,
            $st->tugas = $request->tugas,
            $st->unit_pelaksana = auth()->user()->bpkp->nama_unit,
            $st->updated_by = auth()->user()->nama,
            $st->objek_pengawasan_id = 21,
            ]);

            if($request -> hasFile('file')){
            $st -> update ([
                $request -> file('file')->move('surat_tugas/',$request->file('file')->getClientOriginalName()),
                $st->file = $request->file('file')->getClientOriginalName(),
            ]);
        }
        return redirect('/surat_tugas/kependudukan')->with('ubah', 'Data Berhasil Dirubah');
    }
    public function create_kesehatan(Request $request)
    {
        // dd($request->all());
        $st = new \App\perenc_st;
        $st->no_st = $request->no_st;
        $st->tgl_st = $request->tgl_st;
        $st->hari_penugasan = $request->hari_penugasan;
        $st->tgl_mulai = $request->tgl_mulai;
        $st->tgl_selesai = $request->tgl_selesai;
        $st->tugas = $request->tugas;
        $st->bpkp_id = auth()->user()->bpkp_id;
        $st->unit_pelaksana = auth()->user()->bpkp->nama_unit;
        $st->updated_by = auth()->user()->nama;
        $st->objek_pengawasan_id = 23;
        if($request -> hasFile('file')){
            $request -> file('file')->move('surat_tugas/',$request->file('file')->getClientOriginalName());
            $st->file = $request->file('file')->getClientOriginalName();
        }
        $st->save();
        return redirect('/surat_tugas/kesehatan') -> with ('sukses', 'Data Berhasil Ditambahkan');
    }
    public function update_kesehatan(Request $request)
    {
        // dd($request->all());
        $st = \App\perenc_st::find($request->id);

        $st -> update ([
            $st->no_st = $request->no_st,
            $st->tgl_st = $request->tgl_st,
            $st->hari_penugasan = $request->hari_penugasan,
            $st->tgl_mulai = $request->tgl_mulai,
            $st->tgl_selesai = $request->tgl_selesai,
            $st->tugas = $request->tugas,
            $st->unit_pelaksana = auth()->user()->bpkp->nama_unit,
            $st->updated_by = auth()->user()->nama,
            $st->objek_pengawasan_id = 23,
            ]);

            if($request -> hasFile('file')){
            $st -> update ([
                $request -> file('file')->move('surat_tugas/',$request->file('file')->getClientOriginalName()),
                $st->file = $request->file('file')->getClientOriginalName(),
            ]);
        }
        return redirect('/surat_tugas/kesehatan')->with('ubah', 'Data Berhasil Dirubah');
    }
    public function delete($id)
    {
        $surat_tugas = \App\perenc_st::find($id);
        $surat_tugas->delete();
        return redirect('/surat_tugas/index')->with('hapus', 'Data Berhasil Dihapus');
    }
    public function unduh($id)
    {
        $st = \App\perenc_st::find($id);
        return Response::download('surat_tugas/'.$st->file);
    }
}
