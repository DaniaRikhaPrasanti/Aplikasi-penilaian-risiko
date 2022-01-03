<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Storage;
use DB;

class C_namaSKPD extends Controller
{
    
    public function insert_namaSKPD() 
    {
        $tujuan_kegiatan = DB::table('tujuan_kegiatan')->get();
        $user = DB::table('user')->get();


        $data = array(
            'menu' => 'tujuan_kegiatan',
            // 'nama' => $nama,
            'tujuan_kegiatan' => $tujuan_kegiatan,
            'user' => $user,
            'submenu' => '',
           
        );
        return view('namaSKPD/tambah_view_namaSKPD',$data);
    }
}
