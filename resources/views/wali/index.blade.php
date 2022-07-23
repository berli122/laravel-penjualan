@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card border-secondary">
            <div class="card-header">Data Wali
                <a href="{{ route('wali.create')}}" class="btn btn-sm btn-outline-primary" style="float: right">
                    Tambah Data
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="dataTable">
                        <thead>
                            <th>No</th>
                            <th>Nama Wali</th>
                            <th>Foto</th>
                            <th>Nama Siswa</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>    
                            @php $no = 1; @endphp 
                            @foreach($wali as $data)
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>
                                    <img src="{{ $data->image() }}" style="width: 150px;" alt="">
                                </td>
                                <td>{{ $data->siswa->nama }}</td>
                                <td>Aksi</td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection