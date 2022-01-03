<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Storage;
use DB;

class C_celahPengendalian extends Controller
{
    public function index()
    {
        $identifikasi_celah_pengendalian = DB::table('identifikasi_celah_pengendalian')->get();
        $data = array(
            'menu' => 'identifikasi_celah_pengendalian',
            'identifikasi_celah_pengendalian' => $identifikasi_celah_pengendalian,
            'submenu' => '',
        );

        return view('/celahPengendalian/view_celahPengendalian',$data); 
    }
}
