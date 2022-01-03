<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Storage;
use DB;

class C_analisisResiko extends Controller
{
    public function index()
    {
        $analisis_resiko = DB::table('analisis_resiko')->get();
        $data = array(
            'menu' => 'analisis_resiko',
            'analisis_resiko' => $analisis_resiko,
            'submenu' => '',
        );

        return view('/analisisResiko/view_analisisResiko',$data); 
    }

    public function insert_analisisResiko()
    {
        // $nama = Auth::user()->name;
        $analisis_resiko = DB::table('analisis_resiko')->get();

        $data = array(
            'menu' => 'analisis_resiko',
            // 'nama' => $nama,
            'analisis_resiko' => $analisis_resiko,
            'submenu' => '',
        );

        return view('/analisisResiko/tambah_analisisResiko',$data); 
    }

    public function tambah_analisisResiko(Request $post)
    {  
        DB::table('analisis_resiko')->insert([
            'NAMA_KEGIATAN' => $post->NAMA_KEGIATAN,
            'TUJUAN_KEGIATAN' => $post->TUJUAN_KEGIATAN,
            'PERNYATAAN_RESIKO' => $post->PERNYATAAN_RESIKO,
            'SKALA_KEMUNGKINAN' => $post->SKALA_KEMUNGKINAN,
            'SKALA_DAMPAK' => $post->SKALA_DAMPAK,
            'SKOR_STATUS' => $post->SKOR_STATUS,
        ]);

        return redirect('/analisisResiko/tambah_analisisResiko'.$post->ID_URAIAN);
    }
}
