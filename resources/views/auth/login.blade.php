@extends('auth_layout')

@section('title', 'login')

@section('content')
    <div class="row d-flex justify-content-center align-items-center h-100" style="background-color: rgb(219,219,219);">
        <div class="col-lg-6 col-md-8 col-sm-12 border-dark rounded-4 bg-white shadow-lg">
            <div class="border-bottom mb-3">
                <h1 class="text-center py-3"> Form Login </h1>
            </div>
            @if (session()->has('error_message'))
                <div class="alert alert-danger">
                    {{ session('error_message') }}
                </div>
            @endif
            <form action="{{ route('login.authenticate') }}" method="POST">
                @csrf
                <!-- Bagian tampilan input data -->
                <div class="mx-3 mx-4">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    {{-- Bagian input --}}
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary w-50">Login</button>
                    </div>

                </div>
                <p class="text-center d-block py-3"> Belum punya akun? <a href="{{ route('register') }}">Sign Up</a></p>
            </form>
        </div>
    </div>
@endsection
