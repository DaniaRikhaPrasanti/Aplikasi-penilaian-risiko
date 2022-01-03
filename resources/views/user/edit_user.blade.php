@extends('layout.mainlayout')

@section('page_title', 'Aplikasi Penilaian Risiko')

@section('custom_css')

@endsection

@section('content')

            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
<!-- 
            <div class="page-heading">
                <h3>Profile Statistics</h3>
            </div> -->
            <div class="page-content">
                <div class="row match-height">
                    <div class="col-md-20 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Input Data User</h4>
                            </div>
                        <form action="/user_update_user" method="post" enctype="multipart/form-data">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">   
                        <div class="card-content">
                                <div class="card-body">
                                    <form class="form form-horizontal">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>ID USER</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="text" id="id_user" class="form-control"
                                                        name="id_user" value="{{$user[0]->id_user}}" readonly>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>NAMA SKPD</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="text" id="nama_skpd" class="form-control"
                                                        name="nama_skpd" value="{{$user[0]->nama_skpd}}">
                                                </div>
                                                <div class="col-md-4">
                                                    <label>USERNAME</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="text" id="username" class="form-control"
                                                        name="username" value="{{$user[0]->username}}">
                                                </div>
                                                <div class="col-md-4">
                                                    <label>PASSWORD</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="password" id="password" class="form-control"
                                                        name="password" value="{{$user[0]->password}}">
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Kepala SKPD</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="text" id="kepala_skpd" class="form-control"
                                                        name="kepala_skpd" value="{{$user[0]->kepala_skpd}}">
                                                </div>
                                                <div class="col-md-4">
                                                    <label>NIP Kepala SKPD</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="text" id="NIP_kepala" class="form-control"
                                                        name="NIP_kepala" value="{{$user[0]->NIP_kepala}}">
                                                </div>
                                                <div class="col-md-4">
                                                    <label>ROLE</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                <select class="form-control select2" name="id_role">
                                                @foreach ($role as $datarole)
                                                <option value="{{ $datarole->ID_ROLE}}">{{ $datarole->NAMA_ROLE}}</option>
                                                @endforeach
                                                </select>
                                                <br>
                                                </div>
                                                <div class="col-sm-12 d-flex justify-content-end">
                                                    <button type="submit"
                                                        class="btn btn-primary me-1 mb-1">Update</button>
                                                    <button type="reset"
                                                        class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection


@section('custom_script')
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
@endsection