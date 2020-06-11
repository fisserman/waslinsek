<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use RealRashid\SweetAlert\Facades\Alert;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware(function($request, $next){
            if(session('ubah')){
                Alert::success('Success!!', session('ubah'));
            }
            if(session('sukses')){
                Alert::success('Success!!', session('sukses'));
            }
            if(session('hapus')){
                Alert::success('Success!!', session('hapus'));
            }
            return $next ($request);
        });
    }
}
