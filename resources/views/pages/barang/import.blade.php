@extends('layouts.app')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">Barang</div>
                    <h2 class="page-title">Import Barang</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <!-- Alert -->
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <x-alert-success />
                    <x-alert-error />
                </div>
            </div>

            <div class="row row-deck row-cards">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="card card-md">
                        <form action="{{ route('barang.import.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-stamp card-stamp-lg">
                                <div class="card-stamp-icon bg-primary">
                                    <i class="ti ti-table-import"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="mb-5">
                                            <a href="{{ asset('dist/contoh/contoh.xlsx') }}">Example Format File</a>
                                        </div>

                                        <div class="mb-4">
                                            <label class="form-label required">Import Barang</label>
                                            <input type="file" name="file"
                                                class="form-control @error('file') is-invalid @enderror" autofocus tabindex="1">
                                            @error('file')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mt-4">
                                            <a href="{{ route('barang.index') }}" class="btn btn-outline-secondary w-25">Batal</a>
                                            <button type="submit" class="btn" style="background-color:#f74f9d; color:white; width:25%; margin-left:12px;">Import</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom_script')
@endpush