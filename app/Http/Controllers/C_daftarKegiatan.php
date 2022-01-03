<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Storage;
use DB;
class C_daftarKegiatan extends Controller
{
    public function index()
    {
        $tujuan_kegiatan = DB::table('tujuan_kegiatan')->get();
        $data = array(
            'menu' => 'tujuan_kegiatan',
            'tujuan_kegiatan' => $tujuan_kegiatan,
            'submenu' => '',
        );

        return view('/daftarKegiatan/view_tujuan',$data); 
    }

    public function insert_tujuan()
    {
        // $nama = Auth::user()->name;
        $tujuan_kegiatan = DB::table('tujuan_kegiatan')->get();

        $data = array(
            'menu' => 'tujuan_kegiatan',
            // 'nama' => $nama,
            'tujuan_kegiatan' => $tujuan_kegiatan,
            'submenu' => '',
        );

        return view('/tujuanSKPD/tambah_tujuan',$data); 
    }

    public function tambah_tujuan(Request $post)
    {  
        DB::table('tujuan_kegiatan')->insert([
            'TAHUN_ANGGARAN' => $post->TAHUN_ANGGARAN,
            'TUJUAN_SKPD' => $post->TUJUAN_SKPD,
            'SASARAN_SKPD' => $post->SASARAN_SKPD,
            'NAMA_KEGIATAN' => $post->NAMA_KEGIATAN,
            'TUJUAN_KEGIATAN' => $post->TUJUAN_KEGIATAN,
        ]);

        return redirect('/daftarKegiatan/tambah_tujuan'.$post->ID_TUJUAN_KEGIATAN);
    }
}
