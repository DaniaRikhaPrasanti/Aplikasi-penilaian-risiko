<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Storage;
use DB;

class C_RTP extends Controller
{
    public function index()
    {
        $rencana_tindak_pengendalian = DB::table('rencana_tindak_pengendalian')->get();
        $data = array(
            'menu' => 'rencana_tindak_pengendalian',
            'rencana_tindak_pengendalian' => $rencana_tindak_pengendalian,
            'submenu' => '',
        );

        return view('/RTP/view_RTP',$data); 
    }
}
