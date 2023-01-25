@extends('adminlte::page')

@section('content_header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Data Anak</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('DataTables/datatables.min.css')}}">
@endsection

@section('js')
<script src="{{ asset('DataTables/datatables.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $('#example').DataTable();
    });
</script>
<script src="{{asset('js/sweetalert2.js')}}"></script>
<script src="{{asset('js/deleted.js')}}"></script>
@endsection


@section('content')
    @include('layouts._flash')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                        <a href="{{ route('dataanak.create') }}" class="btn btn-sm btn-primary float-right">Tambah
                            Data Anak</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="example">
                                <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama</th>
                                    <th>Umur</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Pendidikan</th>
                                    <th>Wali</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $no=1;
                                    $date = Carbon\Carbon::now();
                                    $date->toDateTimeString();
                                @endphp

                                @foreach ($dataanak as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{  Carbon\Carbon::parse($data->ttl)->diff(\Carbon\Carbon::now())->format("%y") }}</td>
                                        <td>{{ $data->tempat }}</td>
                                        <td>{{ $data->ttl }}</td>
                                        <td>{{ $data->pendidikan }}</td>
                                        <td>{{ $data->wali }}</td>
                                        <td>
                                            <form action="{{ route('dataanak.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('dataanak.edit', $data->id) }}"
                                                    class="btn btn-info">Edit</a>
                                                <a href="{{ route('dataanak.show', $data->id) }}"
                                                    class="btn btn-warning">Show</a>
                                                <button type="submit" class="btn btn-danger
                                                    delete-confirm">Delete</button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


