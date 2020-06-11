<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelaksanaanController extends Controller
{
    public function index()
    {

        return view('/pelaksanaan/index');
    }
    public function index_pendidikan(Request $request)
    {

        return view('/pelaksanaan/pendidikan');
    }
}
