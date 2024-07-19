@extends('layout')

@section('title', 'Barang')

@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            {{-- card header --}}
            <div class="card-header">
                <h3 class="card-title">Data Product</h3>
            </div>
            {{-- card body --}}
            <div class="card-body">
                <a href="{{ route('barang.create') }}"><button class="btn btn-primary my-2"> Tambah </button></a>
                {{-- table --}}
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Jenis Barang</th>
                            <th scope="col">Jumlah Barang</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barangs as $barang)
                            <tr class="align-middle">
                                {{-- <th scope="row">1</th> --}}
                                <th scope="row">{{ ($barangs->currentPage() - 1) * $barangs->perPage() + $loop->iteration }}</th>
                                <td>{{ $barang->nama_barang }}</td>
                                <td>{{ $barang->ruangan->lokasi }}</td>
                                <td>{{ $barang->jenis_barang }}</td>
                                <td>{{ $barang->jumlah_barang }}</td>
                                <td>{{ $barang->keterangan }}</td>
                                <td>
                                    <a href="{{ route('barang.show', $barang->id) }}"><button
                                            class="btn btn-success"> Selengkapnya </button></a>
                                    <a href="{{ route('barang.edit', $barang->id) }}"><button
                                            class="btn btn-warning ms-2"> Edit </button></a>
                                    <!-- Delete button -->
                                    <form action="{{ route('barang.destroy', $barang->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger ms-2" onclick="return confirm('Are you sure you want to delete this barang?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                </table>
                {{-- End table --}}
                <div class="d-flex pt-3">
                    {{ $barangs->links() }}
                </div>
            </div>
            {{-- End card body --}}
        </div>
    </div>
</div>

@endsection