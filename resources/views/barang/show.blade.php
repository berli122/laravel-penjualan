@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Siswa
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nama Pembeli</label>
                            <input type="text" class="form-control " name="nama_pembeli" value="{{ $siswa->nama_pembeli }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Pembelian</label>
                            <input type="date" class="form-control " name="tgl_pembelian" value="{{ $siswa->tgl_pembelian }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Barang</label>
                            <input type="text" class="form-control " name="nama_barang" value="{{ $siswa->nama_barang }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga Satuan</label>
                            <input type="number" class="form-control " name="harga_satuan" value="{{ $siswa->harga_satuan}}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah Barang</label>
                            <input type="number" class="form-control" name="jumlah_barang" value="{{ $siswa->jumlah_barang }}"
                                readonly>

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <textarea class="form-control" name="alamat" readonly>{{ $siswa->alamat }}</textarea>

                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('siswa.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection