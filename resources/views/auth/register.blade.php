@extends('layouts.guest')

@section('content')

<style>
    :root {
        --tblr-primary: #f74f9d;
        --tblr-primary-rgb: 232, 62, 140;
    }

    /* Button primary */
    .btn-primary {
        background-color: #f74f9d;
        border-color: #f74f9d;
    }

    .btn-primary:hover {
        background-color: #d63384;
        border-color: #d63384;
    }

    /* Link */
    a {
        color: #f74f9d;
    }

    a:hover {
        color: #f74f9d;
    }
</style>

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<div class="page page-center">
    <div class="container container-normal py-4">
        <div class="row align-items-center g-4">

            {{-- LEFT --}}
            <div class="col-lg">
                <div class="container container-tight py-4">

                    <div class="text-center mb-4">
                    </div>

                    <form class="card card-md" action="{{ route('register') }}" method="post">
                        @csrf

                        <div class="card-body">
                            <h2 class="card-title text-center mb-4">
                                Buat Akun Baru
                            </h2>

                            {{-- NAMA --}}
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text"
                                    name="name"
                                    value="{{ old('name') }}"
                                    class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Masukkan Nama">

                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- EMAIL --}}
                            <div class="mb-3">
                                <label class="form-label">Alamat Email</label>
                                <input type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="Masukkan Email">

                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- PASSWORD --}}
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password"
                                    name="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    placeholder="Masukkan Password">

                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- KONFIRMASI PASSWORD --}}
                            <div class="mb-3">
                                <label class="form-label">Konfirmasi Password</label>
                                <input type="password"
                                    name="password_confirmation"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    placeholder="Masukkan Ulang Password">

                                @error('password_confirmation')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- BUTTON --}}
                            <div class="form-footer">
                                <button type="submit" class="btn btn-primary w-100">
                                    Buat Akun Baru
                                </button>
                            </div>
                        </div>
                    </form>

                    {{-- LOGIN LINK --}}
                    <div class="text-center text-secondary mt-3">
                        Sudah memiliki akun?
                        <a href="{{ route('login') }}" tabindex="-1">
                            Masuk
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg d-none d-lg-block">
                <img src="{{ asset('dist/static/illustrations/theraregister.png') }}"
                     height="650"
                     class="d-block mx-auto"
                     alt="Register Illustration">
            </div>

        </div>
    </div>
</div>

@endsection