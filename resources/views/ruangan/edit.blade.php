@extends('layout')

@section('title', 'Edit Ruangan')
    
@section('content')
    <h1> Ubah Ruangan {{ $ruangans->nama_ruangan }} </h1>
    <form action="{{ route('ruangan.update', $ruangans->id) }}" method="POST" class="form-control p-3">
    @method('PATCH')
    @csrf
        {{-- ID Ruangan --}}
        <div class="mb-3 w-25">
            <label for="id" class="form-label">Kode Ruangan</label>
            <input type="number" class="form-control" id="id" name="id" value="{{ $ruangans->id }}" disabled>
        </div>

        {{-- Nama & Lokasi Ruangan --}}
        <div class="d-flex justify-content-between mt-2">
            <div class="mb-3 me-3 w-50">
                <label for="nama_ruangan" class="form-label">Nama Ruangan</label>
                <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan" value="{{ $ruangans->nama_ruangan }}">
            </div>
            <div class="mb-3 w-50">
                <label for="lokasi" class="form-label">Lokasi</label>
                <input  type="text" class="form-control" id="lokasi" name="lokasi" value="{{ $ruangans->lokasi }}">
            </div>
        </div>

        <button type="submit" class="btn btn-success me-3">Simpan</button>
    </form>
    <div class="mt-4">
        <a href="{{ route("ruangan.index") }}"> 
            <button class="btn btn-primary">Kembali</button> 
        </a>
    </div>
@endsection