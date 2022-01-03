@extends('layout/mainlayout')

@section("page_title","Aplikasi Penilaian Resiko")

@section("title","RENCANA TINDAK PENGENDALIAN (RTP)")

@section("breadcrumb")
<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">Tambah Data Daftar Resiko</li>
@endsection

@section("custom_css")
<link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
@endsection

@section("content")
<div class="card">
    <div class="card-header">
        Tabel Rencana Tindak Pengendalian
    </div>
    <div class="card-body">
        <table class="table table-striped" id="table1">
            <thead>
                <tr>
                    <th style="text-align:center">Nama SKPD</th>
                    <th style="text-align:center">Nama Kegiatan</th>
                    <th style="text-align:center">Uraian Risiko</th>
                    <th style="text-align:center">Uraian Rencana Tindak Pengendalian</th>
                    <th style="text-align:center">Target Waktu</th>
                    <th style="text-align:center">Penanggung Jawab</th>
                    <th style="text-align:center">Keterangan</th>
                    <th style="text-align:center">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($rencana_tindak_pengendalian as $data)
            <tr>
                    <td>{{ $data->NAMA_SKPD }}</td>
                    <td>{{ $data->NAMA_KEGIATAN }}</td>
                    <td>{{ $data->PERNYATAAN_RESIKO }}</td>
                    <td>{{ $data->URAIAN_RENCANA_PENGENDALIAN }}</td>
                    <td>{{ $data->TARGET_WAKTU }}</td>
                    <td>{{ $data->PENANGGUNG_JAWAB }}</td>
                    <td>{{ $data->KETERANGAN_RTP}}</td>
            </tr> 
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection 

@section("scripts")
<script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>
@endsection   