@extends('layout/mainlayout')

@section("page_title","Aplikasi Penilaian Resiko")

@section("title","Data Tujuan Kegiatan")

@section("breadcrumb")
<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">Tambah Data Kegiatan</li>
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
        Tabel Daftar Kegiatan SKPD Kabupaten Sidoarjo
    </div>

    <a href="/namaSKPD_tambah_view_namaSKPD">
	<button type="button" class="btn btn-info float-right" style="float: right;"><i class="fas fa-plus"></i>  Tambah Data </button>
	</a>

    <div class="card-body">
        <table class="table table-striped" id="table1">
            <thead>
                <tr>
                    <th style="text-align:center">Tahun Anggaran</th>
                    <th style="text-align:center">Nama SKPD</th>
                    <th style="text-align:center">Tujuan SKPD</th>
                    <th style="text-align:center">Sasaran SKPD</th>
                    <th style="text-align:center">Kegiatan yang mendukung capaian Sasaran SKPD</th>
                    <th style="text-align:center">Tujuan Kegiatan</th>
                    <th style="text-align:center">Catatan</th>
                    <th style="text-align:center">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($tujuan_kegiatan as $data)
            <tr>
                    <td>{{ $data->TAHUN_ANGGARAN }}</td>
                    <td>{{ $data->ID_USER }}</td>
                    <td>{{ $data->TUJUAN_SKPD }}</td>
                    <td>{{ $data->SASARAN_SKPD }}</td>
                    <td>{{ $data->NAMA_KEGIATAN }}</td>
                    <td>{{ $data->TUJUAN_KEGIATAN }}</td>
                    <td>{{ $data->KETERANGAN_TUJUAN }}</td>
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