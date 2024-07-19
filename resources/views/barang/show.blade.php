@extends('layout')

@section('title', "Judul: $barangs->name")

@section('content')
    <div class="container mt-5">
        <article class="blog-post">
            <h2 class="display-5 link-body-emphasis mb-1">{{ $barangs->nama_barang }}</h2>
            <p class="blog-post-meta"> {{ date("d M Y H:i", strtotime($barangs->created_at)) }} </p>

            <p>{{ $barangs->keterangan }}</p>
        </article>
        <a href="{{ route("barang.index") }}"> <button class="btn btn-primary">Kembali</button></a>
    </div>
@endsection