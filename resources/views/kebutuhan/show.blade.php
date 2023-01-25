@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Kebutuhan</div>
                    <div class="card-body">
                        <form action="{{ route('kebutuhan.update', $kebutuhan->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Masukan Kebutuhan Harian</label>
                                <textarea id="konten" name="kebutuhan_harian"
                                    class="form-control @error('kebutuhan_harian') is-invalid @enderror">{{ $kebutuhan->kebutuhan_harian }}</textarea>
                                @error('kebutuhan_harian')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           <div class="form-group">
                                <label for="">Masukan Kebutuhan Obat - Obatan</label>
                                <textarea id="konten2" name="kebutuhan_obat"
                                    class="form-control @error('kebutuhan_obat') is-invalid @enderror">{{ $kebutuhan->kebutuhan_obat }}</textarea>
                                @error('kebutuhan_obat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">

                                <a href="{{ route('kebutuhan.index') }}" class="btn btn-block btn-primary">Kembali</a>
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

   var konten2 = document.getElementById("konten2");
     CKEDITOR.replace(konten2,{
     language:'en-gb'
   });
   CKEDITOR.config.allowedContent = true;
</script>
@endsection
