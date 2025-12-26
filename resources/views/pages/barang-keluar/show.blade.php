@extends('layouts.app')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">Barang Keluar</div>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <!-- Print Button Pink -->
                        <button type="button" class="btn btn-pink" onclick="window.print();">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M17 17h2a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-14a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h2"></path>
                                <path d="M17 9v-4a2 2 0 0 0-2-2h-6a2 2 0 0 0-2 2v4"></path>
                                <path d="M7 13m0 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-6a2 2 0 0 1-2-2z"></path>
                            </svg>
                            Print
                        </button>

                        <!-- Edit Button Pink -->
                        <a href="{{ route('barang-keluar.edit', $barangKeluar) }}" class="btn btn-pink d-none d-sm-inline-block">
                            <i class="ti ti-edit icon me-2"></i> Edit
                        </a>

                        <!-- Delete Button Merah -->
                        <a href="#" class="btn btn-danger d-none d-sm-inline-block"
                            onclick="handleDelete(`{{ route('barang-keluar.destroy', $barangKeluar->id) }}`)">
                            <i class="ti ti-trash icon me-2"></i> Hapus
                        </a>

                        <!-- Create Button Pink untuk mobile -->
                        <a href="{{ route('barang-keluar.create') }}" class="btn btn-pink d-sm-none btn-icon"
                            data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <x-alert-error />

            <div class="row">
                <div class="col-12">
                    <div class="card card-lg">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <p class="h2">Thera Art Space</p>
                                </div>
                                <div class="col-12 my-5">
                                    <div class="fs-2">{{ $barangKeluar->no_transaksi }}</div>
                                    <div>{{ \Carbon\Carbon::parse($barangKeluar->tgl_keluar)->format('d M Y') }}</div>
                                </div>
                            </div>

                            <table class="table table-transparent table-responsive">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width:1%"></th>
                                        <th>Barang</th>
                                        <th class="text-center" style="width:1%">Satuan</th>
                                        <th class="text-center" style="width:1%">Jumlah</th>
                                        <th class="text-end" style="width:1%">Harga</th>
                                        <th class="text-end" style="width:1%">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($barangKeluar->barangKeluarDetails as $item)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>
                                                <p class="strong mb-1">{{ $item->barang->nama_barang }}</p>
                                                <div class="text-secondary">{{ $item->barang->kode }}</div>
                                            </td>
                                            <td class="text-center">{{ $item->barang->satuan->nama_satuan }}</td>
                                            <td class="text-center">{{ $item->qty }}</td>
                                            <td class="text-end text-nowrap">Rp. {{ number_format($item->harga) }}</td>
                                            <td class="text-end text-nowrap">Rp. {{ number_format($item->total_harga) }}</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="5" class="font-weight-bold text-uppercase text-end">Total</td>
                                        <td class="font-weight-bold text-end text-nowrap">Rp. {{ number_format($barangKeluar->total_harga) }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Delete -->
    <div class="modal modal-blur fade" id="modal-danger" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <form action="" method="POST" id="deleteForm">
                @csrf
                @method('DELETE')
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-status bg-danger"></div>
                    <div class="modal-body text-center py-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z"/>
                            <path d="M12 9v4"/>
                            <path d="M12 17h.01"/>
                        </svg>
                        <h3>Are you sure?</h3>
                        <div class="text-secondary">Do you really want to remove this data? What you've done cannot be undone.</div>
                    </div>
                    <div class="modal-footer">
                        <div class="w-100">
                            <div class="row">
                                <div class="col"><a href="#" class="btn w-100 btn-light" data-bs-dismiss="modal">Cancel</a></div>
                                <div class="col"><button type="submit" class="btn btn-danger w-100">Yes, Delete</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('custom_script')
<script>
    function handleDelete(route) {
        let form = document.getElementById('deleteForm');
        form.action = route;
        var modalConfirm = new bootstrap.Modal(document.getElementById('modal-danger'));
        modalConfirm.show();
    }

    @if(session()->has('success'))
        toastr["success"]("{{ session()->get('success') }}", "Success")
    @endif
</script>
@endpush

@push('custom_style')
<style>
    .btn-pink {
        background-color: #f74f9d;
        color: #fff;
        border-color: #f74f9d;
    }
    .btn-pink:hover, .btn-pink:focus, .btn-pink:active {
        background-color: #e03c8a;
        border-color: #e03c8a;
        color: #fff;
    }
</style>
@endpush