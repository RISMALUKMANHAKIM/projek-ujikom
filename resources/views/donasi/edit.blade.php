@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Donasi</div>
                    <div class="card-body">
                        <form action="{{ route('donasi.update', $donasi->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Masukan Nama </label>
                                <input type="text" name="nama" value="{{ $donasi->nama }}"
                                    class="form-control @error('nama') is-invalid @enderror">
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Email</label>
                                <input type="email" name="email" value="{{ $donasi->email }}"
                                    class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Nomer Telepon</label>
                                <input type="text" name="no_tlpn" value="{{ $donasi->no_tlpn }}"
                                    class="form-control @error('no_tlpn') is-invalid @enderror">
                                @error('no_tlpn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            <div class="form-group">
                                <label for="">Masukan Pesan</label>
                                <input type="text" name="ket" value="{{ $donasi->ket }}"
                                    class="form-control @error('ket') is-invalid @enderror">
                                @error('ket')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Nominal</label>
                                <input type="text" name="nominal" value="{{ $donasi->nominal }}"
                                    class="form-control @error('nominal') is-invalid @enderror">
                                @error('nominal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Bukti Transfer</label>
                                <br>
                                <img src="{{ $donasi->image() }}" height="75" style="padding:10px;" />
                                <input type="file" name="bukti" class="form-control">
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
