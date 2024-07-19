@extends('layout')

@section('title', 'Create Barang')
    
@section('content')
    <h1> Buat Barang Baru </h1>
    <form action="{{ route('barang.store') }}" method="POST" class="form-control p-3">
    @csrf
    {{-- Nama & Jenis barang --}}
        <div class="d-flex justify-content-between mt-2">
            <div class="mb-3 me-3 w-50">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang">
            </div>
            <div class="mb-3 w-50">
                <label for="jenis_barang" class="form-label">Jenis Barang</label>
                <input  type="text" class="form-control" id="jenis_barang" rows="3" name="jenis_barang">
            </div>
        </div>

        <div class="d-flex justify-content-between mt-2">
            <div class="mb-3 me-3 w-50">
                <label for="kode_ruangan" class="form-label">Ruangan</label>
                <select class="form-select" id="kode_ruangan" name="kode_ruangan">
                    @foreach ($ruangans as $ruangan)
                        <option value="{{ $ruangan->id }}">{{ $ruangan->nama_ruangan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3 w-50">
                <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
                <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang">
            </div>
        </div>
        {{-- Jumlah Barang --}}

        {{-- Keterangan --}}
        <div class="mb-3 w-25">
            <label for="keterangan" class="form-label">Keterangan</label>
            <textarea class="form-control" id="keterangan" rows="3" name="keterangan"></textarea>
        </div>

        <button type="submit" class="btn btn-success me-3">Simpan</button>
    </form>
    <div class="mt-4">
        <a href="{{ route("barang.index") }}"> 
            <button class="btn btn-primary">Kembali</button> 
        </a>
    </div>
@endsection