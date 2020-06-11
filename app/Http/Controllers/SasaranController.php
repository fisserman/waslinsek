<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\sasaran_pp;
use \App\sasaran_kp;
use \App\idk_sasaran_pp;
use \App\idk_sasaran_kp;
use \App\program_pp;
use \App\program_kp;
use \App\prinas;
use \App\progpri;
use \App\kegpri;

class SasaranController extends Controller
{
    public function index(Request $request)
    {   
        if($request->has('cari')){
            
            $program_pp = \App\program_pp::where('bpkp_id', $request->cari)->get();
            $program_kp = \App\program_kp::where('bpkp_id', $request->cari)->get();
            $idk_sasaran_pp = idk_sasaran_pp::all();
            $idk_sasaran_kp = idk_sasaran_kp::all();
            $bpkp = \App\bpkp::all();
            
        } else {
        $program_pp = program_pp::where('bpkp_id', auth()->user()->bpkp_id)->get();
        $program_kp = program_kp::where('bpkp_id', auth()->user()->bpkp_id)->get();
        $idk_sasaran_pp = idk_sasaran_pp::all();
        $idk_sasaran_kp = idk_sasaran_kp::all();
        $bpkp = \App\bpkp::all();

        }
        return view('/sasaran/index', ['bpkp'=>$bpkp, "idk_sasaran_pp"=>$idk_sasaran_pp, "idk_sasaran_kp"=>$idk_sasaran_kp, "program"=>$program_pp, "program_kp"=>$program_kp ]);

    }
    public function create_sasaran_pp(Request $request)
    {
        if ($request->nama_sasaran_pp != null){
        $sasaran_pp = new sasaran_pp;
        $sasaran_pp->kegpri_id = $request->kegiatan;
        $sasaran_pp->nama_sasaran_pp = $request->nama_sasaran_pp;
        $sasaran_pp->save();
        }

        return redirect('/sasaran/create_pp')->with("sukses", "Data Berhasil Ditambahkan");
    }

    public function create_sasaran_kp(Request $request)
    {

        if ($request->nama_sasaran_kp != null){
        $sasaran_kp = new sasaran_kp;
        $sasaran_kp->kegpri_id = $request->kegiatan;
        $sasaran_kp->nama_sasaran_kp = $request->nama_sasaran_kp;
        $sasaran_kp->save();
        }
        
        return redirect('/sasaran/create_kp')->with("sukses", "Data Berhasil Ditambahkan");
    }

    public function create_pp(){
        $sasaran_pp = sasaran_pp::all()->pluck("nama_sasaran_pp","id");
        $prinas = prinas::all()->pluck("nama_pn","id");
        return view('/sasaran/create_pp', ["sasaran_pp"=>$sasaran_pp,"prinas"=>$prinas,"tasnas"=>$prinas]);
    }

    public function create_kp(){
        $sasaran_kp = sasaran_kp::all()->pluck("nama_sasaran_kp","id");
        $prinas = prinas::all()->pluck("nama_pn","id");
        return view('/sasaran/create_kp', ["prinas"=>$prinas,"sasaran_kp"=>$sasaran_kp,"tasnas"=>$prinas]);
    }

    public function make_kp(Request $request)
    {
        $idk_kp = new idk_sasaran_kp;
        $idk_kp->nama_idk_kp = $request->nama_idk_kp;
        $idk_kp->stn_idk_kp = $request->stn_idk_kp;
        $idk_kp->tgt_idk_kp = $request->tgt_idk_kp;
        $idk_kp->sasaran_kp_id = $request->sasaran_kp;
        $idk_kp->ktr_idk_kp = $request->ktr_idk_kp;
        $idk_kp->save();

        $program = new program_kp;
        $program->prinas_id = $request->prinas;
        $program->progpri_id = $request->program;
        $program->kegpri_id = $request->kegiatan;
        $program->sasaran_kp_id = $request->sasaran_kp;
        $program->idk_sasaran_kp_id = $idk_kp->id;
        $program->objek_pengawasan_id = $request->objek_pengawasan_id;
        $program->bpkp_id = auth()->user()->bpkp_id;
        $program->save();

        return redirect('/sasaran')->with("sukses", "Data Berhasil Ditambahkan");
    }

    public function make_pp(Request $request)
    {
        $idk_pp = new idk_sasaran_pp;
        $idk_pp->nama_idk_pp = $request->nama_idk_pp;
        $idk_pp->stn_idk_pp = $request->stn_idk_pp;
        $idk_pp->tgt_idk_pp = $request->tgt_idk_pp;
        $idk_pp->sasaran_pp_id = $request->sasaran_pp;
        $idk_pp->ktr_idk_pp = $request->ktr_idk_pp;
        $idk_pp->save();

        $program = new program_pp;
        $program->prinas_id = $request->prinas;
        $program->progpri_id = $request->program;
        $program->kegpri_id = $request->kegiatan;
        $program->sasaran_pp_id = $request->sasaran_pp;
        $program->idk_sasaran_pp_id = $idk_pp->id;
        $program->objek_pengawasan_id = $request->objek_pengawasan_id;
        $program->bpkp_id = auth()->user()->bpkp_id;
        $program->save();

        $sasaran_pp = sasaran_pp::find($request->sasaran_pp);
        $sasaran_pp->update(
            [$sasaran_pp->objek_pengawasan_id = $request->objek_pengawasan_id]);

        return redirect('/sasaran')->with("sukses", "Data Berhasil Ditambahkan");
    }

    public function getProgram($id)
    {
        $program = progpri::where("prinas_id",$id)->pluck("nama_pp","id");
        
            return json_encode($program);

    }
    public function getKegiatan($id)
    {

        //GET THE ACCOUNT BASED ON TYPE
  
        $kegiatan = kegpri::where('progpri_id',$id)->pluck("nama_kp","id");
  
              return json_encode($kegiatan);
    }
    public function getSasaranKegiatan($id)
    {

        //GET THE ACCOUNT BASED ON TYPE
  
        $sasaran_kp = sasaran_kp::where('kegpri_id',$id)->pluck("nama_sasaran_kp","id");
  
              return json_encode($sasaran_kp);
    }
    public function getSasaranProgram($id)
    {

        //GET THE ACCOUNT BASED ON TYPE
  
        $sasaran_pp = sasaran_pp::where('kegpri_id',$id)->pluck("nama_sasaran_pp","id");
  
              return json_encode($sasaran_pp);
    }
    
    public function update_idk_pp(Request $request)
    {
        $pp = idk_sasaran_pp::find($request->id);
        $pp->update($request->all());
        return redirect('sasaran/')->with('ubah', 'Data Berhasil Dirubah');
    }
    public function update_idk_kp(Request $request)
    {
        $kp = idk_sasaran_kp::find($request->id);
        $kp->update($request->all());
        return redirect('sasaran/')->with('ubah', 'Data Berhasil Dirubah');
    }
    public function delete_kp($id)
    {
        $program = program_kp::find($id);
        $program->delete();
        return redirect('sasaran/')->with('hapus', 'Data Berhasil Dihapus');
    }
    public function delete_pp($id)
    {
        $program = program_pp::find($id);
        $program->delete();
        return redirect('sasaran/')->with('hapus', 'Data Berhasil Dihapus');
    }

}
