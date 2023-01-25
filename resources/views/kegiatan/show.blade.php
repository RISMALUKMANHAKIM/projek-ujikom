@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Kegiatan</div>
                    <div class="card-body">
                        <form action="{{ route('kegiatan.update', $kegiatan->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Judul</label>
                                <input type="text" name="judul" value="{{ $kegiatan->judul }}"
                                    class="form-control @error('judul') is-invalid @enderror">
                                @error('judul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Isi</label>
                                <textarea id="konten" name="isi"
                                    class="form-control @error('isi') is-invalid @enderror">{{ $kegiatan->isi }}</textarea>
                                @error('isi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                             <div class="form-group">
                                <label for="">Gambar Kegiatan</label>
                                <br>
                                <img src="{{ $kegiatan->image() }}" height="75" style="padding:10px;" />
                                <input type="file" name="gambar" class="form-control">
                            </div>
                            <div class="form-group">
                                 <a href="{{ route('kegiatan.index') }}" class="btn btn-block btn-primary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
<script>
   var konten = document.getElementById("konten");
     CKEDITOR.replace(konten,{
     language:'en-gb'
   });
   CKEDITOR.config.allowedContent = true;
</script>
@endsection

