@extends('layout')

@section('title', 'Ruangan')

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
                <a href="{{ route('ruangan.create') }}"><button class="btn btn-primary my-2"> Tambah </button></a>
                {{-- table --}}
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Kode Ruangan</th>
                            <th scope="col">Nama Ruangan</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ruangans as $ruangan)
                            <tr class="align-middle">
                                {{-- <th scope="row">1</th> --}}
                                <td>{{ $ruangan->id }}</td>
                                <td>{{ $ruangan->nama_ruangan }}</td>
                                <td>{{ $ruangan->lokasi }}</td>
                                <td>
                                    <a href="{{ route('ruangan.edit', $ruangan->id) }}">
                                        <button class="btn btn-warning ms-2"> Edit </button></a>
                                    <!-- Delete button -->
                                    <form action="{{ route('ruangan.destroy', $ruangan->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger ms-2" onclick="return confirm('Are you sure you want to delete this ruangan?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                </table>
                {{-- End table --}}
                <div class="d-flex pt-3">
                    {{ $ruangans->links() }}
                </div>
            </div>
            {{-- End card body --}}
        </div>
    </div>
</div>

@endsection