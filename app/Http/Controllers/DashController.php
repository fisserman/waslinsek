<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class DashController extends Controller
{
    public function page()
    {
        $bpkp = \App\bpkp::all();
        return view ('/layout/master', ['bpkp'=>$bpkp]);
    }
    public function home()
    {
        $objek = \App\perenc_pelaksanaan::where('bpkp_id', auth()->user()->bpkp_id)->get();
        $count = \App\perenc_pelaksanaan::where('bpkp_id', auth()->user()->bpkp_id)->get();
        $user = \App\User::all();
        return view ('/dashboard', ['user' => $user, 'count' => $count, 'objek'=>$objek]);
    }
    public function edit($id)
    {
        $bpkp = \App\bpkp::find($id);
        return view('/profile/edit',['bpkp'=> $bpkp]);
    }
    public function update(Request $request,$id)
    {
        $bpkp = \App\bpkp::find($id);
        $bpkp -> update($request->all());
        return redirect('/dashboard') -> with('sukses', 'Date Berhasil Dirubah');
    }
    public function index2()
    {
        return view('/layout2/index');
    }
    public function index()
    {
        return view('/index');
    }
}
