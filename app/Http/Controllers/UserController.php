<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function admin()
    {
        $user = \App\User::all()->sortBy('role');
        $bpkp = \App\bpkp::all();
        return view('/administrator/user_admin',['user'=>$user, 'bpkp'=>$bpkp]);
    }
    public function create(Request $request)
    {
        $user = new \App\User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = Str::random(60);
        $user->role = $request->role;
        $user->bpkp_id = $request->bpkp_id; 
        $user->save();
        return redirect('/administrator/user_admin')->with('sukses', 'Data Berhasil Ditambah');
    }
    public function edit(Request $request, $id)
    {
        $user = \App\User::find($id);
        $bpkp = \App\bpkp::all();
        return view('/administrator/edit_admin', ['user' => $user, 'bpkp'=>$bpkp]);
    }
    public function update(Request $request,$id)
    {
        $user = \App\User::find($id);
        $user -> update([
        $user->nama = $request->nama,
        $user->npm = $request->npm,    
        $user->name = $request->name,
        $user->email = $request->email,
        $user->password = bcrypt($request->password),
        $user->role = $request->role,
        $user->bpkp_id = $request->bpkp_id]);

        if($request->password != null){
            $user -> update([
            $user->password = bcrypt($request->password)]);
        }

        return redirect('/administrator/user_admin')->with('sukses', 'Data Berhasil Dirubah');
    }
    public function delete(Request $request,$id)
    {
        $user = \App\User::find($id);
        $user -> delete();
        return redirect('/administrator/user_admin')->with('sukses', 'Data Berhasil Dihapus');
    }
    
}
