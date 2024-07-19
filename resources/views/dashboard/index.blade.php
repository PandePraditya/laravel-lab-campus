@extends('layout')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card card-custom">
                <div class="card-body">
                    <div>
                        <h1 class="info">{{ $countBarang }}</h1>
                        <p>Total Barang</p>
                    </div>
                    <i class="bi bi-box-seam icon-right"></i>
                </div>
                <div class="card-footer link">
                    <a href="{{ route('barang.index') }}" class="text-white text-decoration-none">More info <i
                            class="bi bi-arrow-right-circle"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card card-custom bg-danger">
                <div class="card-body">
                    <div>
                        <h1 class="info">{{ $countRuangan }}</h1>
                        <p>Total Ruangan</p>
                    </div>
                    <i class="bi bi-building icon-right"></i>
                </div>
                <div class="card-footer link">
                    <a href="{{ route('ruangan.index') }}" class="text-white text-decoration-none">More info <i
                            class="bi bi-arrow-right-circle"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
