<div class="row">
    <div class="col-12 col-lg-8">
        <div class="card card-md">
            <div class="card-header d-flex justify-content-between">
                <span>Item</span>
                <div wire:loading>
                    <div class="spinner-border spinner-border-sm" role="status" style="color: #f74f9d;">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>

            <div class="card-body">
                @foreach ($inputs as $key => $input)
                    <div class="row align-items-center mb-2">
                        <div class="col-4">
                            <label class="form-label required">Barang</label>
                            <select class="form-select" aria-label="Default select example"
                                wire:model.defer="inputs.{{ $key }}.barang_id"
                                wire:change="change({{ $key }})" id="inputs.{{ $key }}.barang_id">
                                <option selected>Pilih Barang</option>
                                @foreach ($this->barangs as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_barang }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-2">
                            <label class="form-label">Harga</label>
                            <input type="text" name="harga" wire:model.defer="inputs.{{ $key }}.harga"
                                id="inputs.{{ $key }}.harga" class="form-control" placeholder="" readonly>
                        </div>

                        <div class="col-2">
                            <label class="form-label">Qty</label>
                            <input type="number" min="1" wire:model.defer="inputs.{{ $key }}.qty"
                                wire:change="change({{ $key }})" id="inputs.{{ $key }}.qty" class="form-control"
                                placeholder="">
                        </div>

                        <div class="col-3">
                            <label class="form-label">Total Harga</label>
                            <input type="text" wire:model.defer="inputs.{{ $key }}.total_harga"
                                id="inputs.{{ $key }}.total_harga" class="form-control" placeholder="" readonly>
                        </div>

                        <div class="col">
                            <a href="#" class="text-danger link-underline link-underline-opacity-0"
                                wire:click="removeInput({{ $key }})" style="color: #f74f9d;">
                                <i class="ti ti-trash-x icon"></i>
                            </a>
                        </div>
                    </div>

                    <div class="mb-3">
                        @error('inputs.' . $key . '.barang_id')
                            <span class="text-danger error">{{ $message }}</span>
                        @enderror
                        @error('inputs.' . $key . '.qty')
                            <div class="text-danger error">{{ $message }}, Stok Saat ini {{ $inputs[$key]['stok'] }}
                            </div>
                        @enderror
                    </div>
                @endforeach

                <div class="mt-3">
                    <button class="btn btn-outline-secondary w-100" wire:click="addInput">Add Item</button>
                </div>
            </div>
            <div class="card-footer text-end">
                <span class="me-4">Total</span>
                <br>
                <span class="h3 me-4" style="color: #f74f9d;">{{ number_format($grandTotal) }}</span>
            </div>
        </div>
    </div>

    <div class="col-12 col-lg-4">
        <div class="card card-md sticky">
            <form action="{{ route('kategori.store') }}" method="POST">
                @csrf
                <div class="card-header">
                    Transaksi Info
                </div>
                <div class="card-stamp card-stamp-lg">
                    <div class="card-stamp-icon" style="background-color: #f74f9d;">
                        <i class="ti ti-clipboard-text"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="mb-3">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="no_transaksi"
                                        wire:model.defer="noTransaksi" placeholder="name@example.com" readonly
                                        style="border-color: #f74f9d;">
                                    <label for="no_transaksi">No. Transaksi</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="tgl_transaksi"
                                        wire:model.defer="tglMasuk" placeholder="name@example.com"
                                        style="border-color: #f74f9d;">
                                    <label for="tgl_transaksi">Tanggal Transaksi</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="d-grid">
                        <button class="btn" style="background-color: #f74f9d; border-color: #f74f9d; color: white;"
                            wire:click.prevent="submit">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@push('custom_script')
<style>
 .btn-outline-secondary {
        color: #f74f9d;
        border-color: #f74f9d;
    }
    .btn-outline-secondary:hover {
        background-color: #f74f9d;
        color: #fff;
    }
</style>
@endpush