@extends('layouts.master')

@section('content')
    <div class="text-center">
        <div class="info">
            <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Rekening :</h4>
                <p>123-00-0222098-0</p>
                <p>a/n : Yayasan pondok yatim</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Donasi</div>
                    <div class="card-body">
                        <form action="{{ route('storeDonasi') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Masukan Nama</label>
                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror">
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Nama Wajib Diisi </strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Email</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Email Wajib Diisi</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Nomer telepon</label>
                                <input type="number" name="no_tlpn"
                                    class="form-control @error('no_tlpn') is-invalid @enderror">
                                @error('no_tlpn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Nomer telepon ini Wajib diisi</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="date" name="tanggal"
                                    class="form-control @error('tanggal') is-invalid @enderror">
                                @error('tanggal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Masukan Pesan</label>
                                <textarea name="ket" class="form-control @error('ket') is-invalid @enderror"></textarea>
                                @error('ket')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Pesan Wajib Diisi </strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Nominal</label>
                                <input type="number" name="nominal"
                                    class="form-control @error('nominal') is-invalid @enderror">
                                @error('nominal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Nominal ini wajib diisi</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Bukti Transfer </label>
                                <input type="file" name="bukti" class="form-control @error('bukti') is-invalid @enderror">
                                @error('bukti')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Wajib Diisi Gambar</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-outline-primary"
                                    style="background:#5cb874; border-color: #5cb874; color: white;"> D O N A S I </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')

@endsection

@section('js')

@endsection
