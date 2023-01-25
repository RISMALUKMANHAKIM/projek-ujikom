@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Anak</div>
                    <div class="card-body">
                        <form action="{{ route('dataanak.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Masukan Nama Anak</label>
                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror">
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <div class="form-group">
                                <label for="">Masukan Umur</label>
                                <input type="text" name="umur" class="form-control @error('umur') is-invalid @enderror">
                                @error('umur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
                            <div class="form-group">
                                <label for="">Masukan Tempat lahir</label>
                                <input type="text" name="tempat" class="form-control @error('tempat') is-invalid @enderror">
                                @error('tempat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Tanggal lahir</label>
                                <input type="date" name="ttl" class="form-control @error('ttl') is-invalid @enderror">
                                @error('ttl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Pendidikan</label>
                                <select name="pendidikan" class="form-control @error('pendidikan') is-invalid @enderror">
                                    <option value="-">-</option>
                                    <option value="tidak sekolah">tidak sekolah</option>
                                    <option value="Pendidikan Anak Usia Dini">Pendidikan Anak Usia Dini</option>
                                    <option value="Taman Kanak-kanak">Taman Kanak-kanak</option>
                                    <option value="Sekolah Dasar">Sekolah Dasar</option>
                                    <option value="Sekolah Menengah">Sekolah Menengah</option>
                                </select>
                                @error('pendidikan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Nama Wali</label>
                                <input type="text" name="wali" class="form-control @error('wali') is-invalid @enderror">
                                @error('wali')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-primary">Simpan</button>
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
