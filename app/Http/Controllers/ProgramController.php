<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\program;
use \App\prinas;
use \App\progpri;
use \App\kegpri;

class ProgramController extends Controller
{
    public function index()
    {
        $program = program::all();
        $prinas = prinas::all()->pluck("nama_pn","id");
        $bpkp = \App\bpkp::all();

        return view('/program/index',['program'=>$program,'bpkp'=>$bpkp, 'prinas'=>$prinas]);
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
    public function create(Request $request)
    {
        $program = new program;
        $program->update($request->all());
        return redirect('program/') -> with ('sukses', 'Data Berhasil Ditambahkan');
    }
    public function update(Request $request,$id)
    {
        $program = program::find($id);
        $program->update($request->all());
        return redirect('program/')->with('sukses', 'Data Berhasil Dirubah');
    }
    public function delete($id)
    {
        $program = program::find($id);
        $program->delete();
        return redirect('program/')->with('sukses', 'Data Berhasil Dihapus');
    }

}