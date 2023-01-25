@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <center>
                            <h2>Selamat Datang di YAYASAN PONDOK YATIM </h2>
                        </center>
                    </div>
                    <br>
                    <div>
                        <center>
                            <img src="http://127.0.0.1:8000/assets/img/download.jpg" class="img-circle elevation-2"
                                alt="User Image" width="500px" height="400px">

                        </center>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1"><i
                                        class="fas fa-hand-holding-heart"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Data Donasi</span>
                                    <span class="info-box-number">
                                        <h3><b>{{ DB::table('donasis')->count() }}</b></h3>
                                    </span>
                                    <span class="info-box-content">
                                        <a href="{{ route('donasi.index') }}" class="text-right">Lihat Detail</a>
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1"
                                    style="background-color: #5cb874!important;"><i class="fas fa-baby"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Data Anak Asuh</span>
                                    <span class="info-box-number">
                                        <h3><b>{{ DB::table('dataanaks')->count() }}</b></h3>
                                    </span>
                                    <span class="info-box-content">
                                        <a href="{{ route('dataanak.index') }}" class="text-right">Lihat Detail</a>
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1"
                                    style="background-color: orange!important;"><i class="far fa-folder-open"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Data Kebutuhan</span>
                                    <span class="info-box-number">
                                        <h3><b>{{ DB::table('kebutuhans')->count() }}</b></h3>
                                    </span>
                                    <span class="info-box-content">
                                        <a href="{{ route('kebutuhan.index') }}" class="text-right">Lihat Detail</a>
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1"
                                    style="background-color: #e74c3c!important;"><i class="fas fa-image"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kegiatan</span>
                                    <span class="info-box-number">
                                        <h3><b>{{ DB::table('kegiatans')->count() }}</b></h3>
                                    </span>
                                    <span class="info-box-content">
                                        <a href="{{ route('kegiatan.index') }}" class="text-right">Lihat Detail</a>
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
