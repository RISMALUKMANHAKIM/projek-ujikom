@extends('adminlte::page')

@section('content_header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Data Kebutuhan</h1>
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

                        <a href="{{ route('kebutuhan.create') }}" class="btn btn-sm btn-primary float-right">Tambah
                            Kebutuhan</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="example">
                                <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Kebutuhan Harian</th>
                                    <th>Obat-Obatan</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $no=1; @endphp
                                @foreach ($kebutuhan as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{!! $data->kebutuhan_harian !!}</td>
                                        <td>{!! $data->kebutuhan_obat !!}</td>
                                        <td>
                                            <form action="{{ route('kebutuhan.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('kebutuhan.edit', $data->id) }}"
                                                    class="btn btn-info">Edit</a>
                                                <a href="{{ route('kebutuhan.show', $data->id) }}"
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


