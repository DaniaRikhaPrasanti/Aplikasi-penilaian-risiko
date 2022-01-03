<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Storage;
use DB;


class C_daftarResiko extends Controller
{
    public function index()
    {
        $daftar_resiko = DB::table('daftar_resiko')->get();
        $data = array(
            'menu' => 'daftar_resiko',
            'daftar_resiko' => $daftar_resiko,
            'submenu' => '',
        );

        return view('/daftarResiko/view_daftarResiko',$data); 
    }

    public function insert_daftarResiko()
    {
        // $nama = Auth::user()->name;
        $daftar_resiko = DB::table('daftar_resiko')->get();

        $data = array(
            'menu' => 'daftar_resiko',
            // 'nama' => $nama,
            'daftar_resiko' => $daftar_resiko,
            'submenu' => '',
        );

        return view('/daftarResiko/tambah_daftarResiko',$data); 
    }

    public function tambah_daftarResiko(Request $post)
    {  
        DB::table('daftar_resiko')->insert([
            'NAMA_KEGIATAN' => $post->NAMA_KEGIATAN,
            'TUJUAN_KEGIATAN' => $post->TUJUAN_KEGIATAN,
            'PERNYATAAN_RESIKO' => $post->PERNYATAAN_RESIKO,
            'DAMPAK' => $post->DAMPAK,
        ]);

        return redirect('/daftarResiko/tambah_daftarResiko'.$post->ID_RESIKO);
    }
}
