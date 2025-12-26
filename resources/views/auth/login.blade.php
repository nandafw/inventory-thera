@extends('layouts.guest')

@section('content')

<style>
    :root {
        --tblr-primary: #f74f9d;
        --tblr-primary-rgb: 232, 62, 140;
    }

    /* Button */
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

    /* Checkbox */
    .form-check-input:checked {
        background-color: #5CB338;
        border-color: #5CB338;
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
                <div class="container-tight">
                    <div class="text-center mb-4">
                    </div>

                    <div class="card card-md">
                        <div class="card-body">
                            <h2 class="h2 text-center mb-4">Masuk ke Akun Anda</h2>

                            <form action="{{ route('login') }}" method="post">
                                @csrf

                                {{-- EMAIL --}}
                                <div class="mb-3">
                                    <label class="form-label">Alamat Email</label>
                                    <input type="email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Masukkan Email"
                                        required autofocus tabindex="1">

                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- PASSWORD --}}
                                <div class="mb-2">
                                    <label class="form-label">
                                        Password
                                        @if (Route::has('password.request'))
                                            <span class="form-label-description">
                                                <a href="{{ route('password.request') }}" tabindex="5">
                                                    Lupa Password?
                                                </a>
                                            </span>
                                        @endif
                                    </label>

                                    <input type="password"
                                        name="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Masukkan Password"
                                        required tabindex="2">

                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- REMEMBER ME --}}
                                <div class="mb-2">
                                    <label class="form-check">
                                        <input type="checkbox"
                                            class="form-check-input"
                                            name="remember"
                                            tabindex="3">
                                        <span class="form-check-label">
                                            Simpan Info Login
                                        </span>
                                    </label>
                                </div>

                                {{-- BUTTON --}}
                                <div class="form-footer">
                                    <button type="submit" class="btn btn-primary w-100">
                                        Masuk
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- REGISTER --}}
                    <div class="text-center text-secondary mt-3">
                        Belum punya akun?
                        <a href="{{ route('register') }}" tabindex="-1">
                            Daftar Akun
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg d-none d-lg-block">
                <img src="./dist/static/illustrations/theralogin.png"
                     height="400"
                     class="d-block mx-auto"
                     alt="Login Illustration">
            </div>

        </div>
    </div>
</div>

@endsection