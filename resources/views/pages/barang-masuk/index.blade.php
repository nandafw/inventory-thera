@extends('layouts.app')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none ">
        <div class="container-xl ">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">Transaksi</div>
                    <h2 class="page-title">Barang Masuk</h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('barang-masuk.create') }}" class="btn d-none d-sm-inline-block" style="background-color: #f74f9d; color: #fff;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                            Transaksi Baru
                        </a>
                        <a href="{{ route('barang-masuk.create') }}" class="btn d-sm-none btn-icon" style="background-color: #f74f9d; color: #fff;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <x-alert-error />

            <div class="row">
                <div class="col-12 col-lg-3">
                    <form action="" method="get">
                        <div class="input-icon mb-3">
                            <input type="search" value="{{ request()->query('keyword') }}" class="form-control w-100"
                                name="keyword" placeholder="Search…">
                            <span class="input-icon-addon">
                                <i class="icon ti ti-search"></i>
                            </span>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-vcenter table-mobile-md card-table">
                                <thead>
                                    <tr>
                                        <th class="w-1">No</th>
                                        <th>Tgl Transaksi</th>
                                        <th>No. Transaksi</th>
                                        <th class="text-center">Total qty</th>
                                        <th class="text-end">Total Harga</th>
                                        <th class="w-1"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($barangMasuks as $row)
                                        <tr>
                                            <td class="text-secondary align-text-top" data-label="No">
                                                {{ $loop->iteration + $barangMasuks->firstItem() - 1 }}
                                            </td>
                                            <td class="align-text-top" data-label="Tanggal">{{ $row->tgl_masuk }}</td>
                                            <td class="align-text-top" data-label="No. Transaksi">
                                                <a href="{{ route('barang-masuk.show', $row->id) }}">{{ $row->no_transaksi }}</a>
                                            </td>
                                            <td class="align-text-top text-center" data-label="Total Qty">{{ $row->total_qty }}</td>
                                            <td class="align-text-top text-end" data-label="Total Harga">Rp. {{ number_format($row->total_harga) }}</td>
                                            <td class="align-text-top">
                                                <a href="#" class="link-underline link-underline-opacity-0"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots icon"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="{{ route('barang-masuk.edit', $row->id) }}">
                                                        <i class="ti ti-edit icon text-pink me-2"></i>Edit
                                                    </a>
                                                    <a class="dropdown-item" href="#" style="color: #f74f9d;"
                                                        onclick="handleDelete(`{{ route('barang-masuk.destroy', $row->id) }}`)">
                                                        <i class="ti ti-trash icon me-2 opacity-50"></i>Delete
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">No data found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer d-flex justify-content-center align-items-center">
                            {{ $barangMasuks->onEachSide(1)->withQueryString()->withPath(request()->fullUrl())->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-blur fade" id="modal-danger" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <form action="" method="POST" id="deleteForm">
                @csrf
                @method('DELETE')
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-status" style="background-color: #f74f9d;"></div>
                    <div class="modal-body text-center py-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-pink icon-lg" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z" />
                            <path d="M12 9v4" />
                            <path d="M12 17h.01" />
                        </svg>
                        <h3>Are you sure?</h3>
                        <div class="text-secondary">Do you really want to remove this data? What you've done cannot be undone.</div>
                    </div>
                    <div class="modal-footer">
                        <div class="w-100">
                            <div class="row">
                                <div class="col"><a href="#" class="btn w-100" data-bs-dismiss="modal">Cancel</a></div>
                                <div class="col"><button type="submit" class="btn w-100" style="background-color: #f74f9d; color: #fff;">Yes, Delete</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('custom_script')
@if (session()->has('success'))
    <script>
        toastr["success"]("{{ session()->get('success') }}", "Success")
    </script>
@endif
<script>
    function handleDelete(route) {
        let form = document.getElementById('deleteForm')
        form.action = route
        var modalConfirm = new bootstrap.Modal(document.getElementById('modal-danger'));
        modalConfirm.show();
    }
</script>
@endpush