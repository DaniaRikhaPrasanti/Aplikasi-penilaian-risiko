<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_dashboard;
use App\Http\Controllers\C_user;
use App\Http\Controllers\C_skalaKemungkinan;
use App\Http\Controllers\C_skalaDampak;
use App\Http\Controllers\C_daftarKegiatan;
use App\Http\Controllers\C_namaSKPD;
use App\Http\Controllers\C_tujuanSKPD;
use App\Http\Controllers\C_daftarResiko;
use App\Http\Controllers\C_analisisResiko;
use App\Http\Controllers\C_RTP;
use App\Http\Controllers\C_realisasiRTP;
use App\Http\Controllers\C_celahPengendalian;

;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = array(
        'menu' => 'dashboard',
        // 'nama' => $nama,
        'submenu' => ''
    );

    return view('dashboard',$data);
});

Route::get('/user', [C_user::class, 'index']);
Route::get('/user_insert_user', [C_user::class, 'insert_user']);
Route::post('/user_tambah_user', [C_user::class, 'tambah_user']);
Route::get('/user_edit_user_{id_user}', [C_user::class, 'edit_user']);
Route::post('/user_update_user', [C_user::class, 'update_user']);
Route::get('/user_hapus_{id_user}', [C_user::class, 'hapus']);

Route::get('/view_skala_kemungkinan', [C_skalaKemungkinan::class, 'index']);
Route::get('/view_skala_dampak', [C_skalaDampak::class, 'index']);

Route::get('/daftarKegiatan', [C_daftarKegiatan::class, 'index']);

Route::get('/namaSKPD_tambah_view_namaSKPD', [C_namaSKPD::class, 'insert_namaSKPD']);
Route::get('/tujuanSKPD_tambah_view_tujuanSKPD', [C_tujuanSKPD::class, 'insert_tujuanSKPD']);


Route::get('/daftarResiko', [C_daftarResiko::class, 'index']);
Route::get('daftarResiko_insert_daftarResiko', [C_daftarResiko::class, 'insert_daftarResiko']);

Route::get('/analisisResiko', [C_analisisResiko::class, 'index']);
Route::get('analisisResiko_insert_analisisResiko', [C_analisisResiko::class, 'insert_analisisResiko']);

Route::get('/RTP', [C_RTP::class, 'index']);
Route::get('RTP_insert_RTP', [C_RTP::class, 'insert_RTP']);

Route::get('/realisasiRTP', [C_realisasiRTP::class, 'index']);
Route::get('realisasiRTP_insert_realisasiRTP', [C_realisasiRTP::class, 'insert_realisasiRTP']);

Route::get('/celahPengendalian', [C_celahPengendalian::class, 'index']);
Route::get('celahPengendalian_insert_celahPengendalian', [C_celahPengendalian::class, 'insert_celahPengendalian']);


