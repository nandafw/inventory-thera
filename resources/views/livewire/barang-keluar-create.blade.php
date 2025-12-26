<div class="row">
    <div class="col-12 col-lg-8">
        <div class="card card-md">
            <div class="card-header d-flex justify-content-between">
                <span>Item</span>
                <div wire:loading>
                    <div class="spinner-border spinner-border-sm" role="status" style="border-top-color: #f74f9d;">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>

            <div class="card-body">
                @foreach ($inputs as $key => $input)
                    <div class="row align-items-center mb-2">
                        <div class="col-4">
                            <label class="form-label required">Barang</label>
                            <select class="form-select" wire:model.defer="inputs.{{ $key }}.barang_id"
                                wire:change="change({{ $key }})">
                                <option selected>Pilih Barang</option>
                                @foreach ($this->barangs as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_barang }}</option>
                                @endforeach
                            </select>
                            @error('inputs.' . $key . '.barang_id')
                                <span class="text-danger error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-2">
                            <label class="form-label">Harga</label>
                            <input type="text" wire:model.defer="inputs.{{ $key }}.harga" class="form-control" readonly>
                        </div>

                        <div class="col-2">
                            <label class="form-label">Qty</label>
                            <input type="number" min="1" wire:model.defer="inputs.{{ $key }}.qty"
                                wire:change="change({{ $key }})" class="form-control">
                            @error('inputs.' . $key . '.qty')
                                <div class="text-danger error">{{ $message }}, Stok Saat ini {{ $inputs[$key]['stok'] }}</div>
                            @enderror
                        </div>

                        <div class="col-3">
                            <label class="form-label">Total Harga</label>
                            <input type="text" wire:model.defer="inputs.{{ $key }}.total_harga" class="form-control" readonly>
                        </div>

                        <div class="col-1">
                            <a href="#" class="text-danger" wire:click="removeInput({{ $key }})">
                                <i class="ti ti-trash-x icon"></i>
                            </a>
                        </div>
                    </div>
                @endforeach

                <div class="mt-3">
                    <button class="btn btn-outline-secondary w-100" wire:click="addInput">Add Item</button>
                </div>
            </div>

            <div class="card-footer text-end">
                <span class="me-4">Total</span>
                <br>
                <span class="h3 me-4">{{ number_format($grandTotal) }}</span>
            </div>
        </div>
    </div>

    <div class="col-12 col-lg-4">
        <div class="card card-md sticky">
            <div class="card-header">Transaksi Info</div>
            <div class="card-stamp card-stamp-lg">
                <div class="card-stamp card-stamp-lg">
                    <div class="card-stamp-icon" style="background-color: #f74f9d;">
                        <i class="ti ti-clipboard-text"></i>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="noTransaksi" readonly style="border-color: #f74f9d;">
                    <label>No. Transaksi</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="date" class="form-control" wire:model.defer="tglKeluar" style="border-color: #f74f9d;">
                    <label>Tanggal Transaksi</label>
                </div>
            </div>

            <div class="card-footer">
                <button class="btn btn-primary w-100" wire:click.prevent="submit">Simpan</button>
            </div>
        </div>
    </div>
</div>

@push('custom_script')
<style>
    .btn-primary {
        background-color: #f74f9d;
        border-color: #f74f9d;
        color: #fff;
    }
    .btn-primary:hover {
        background-color: #e03b88;
        border-color: #e03b88;
    }

    .btn-outline-secondary {
        color: #f74f9d;
        border-color: #f74f9d;
    }
    .btn-outline-secondary:hover {
        background-color: #f74f9d;
        color: #fff;
    }

    .spinner-border {
        border-top-color: #f74f9d !important;
    }

    a.text-danger:hover i {
        color: #f74f9d;
    }
</style>
@endpush