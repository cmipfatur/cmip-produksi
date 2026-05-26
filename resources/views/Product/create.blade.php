@extends('layouts.app')

@section('title', 'Tambah Produk - Admin BST')

@section('content')
<div class="container-fluid px-0">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-1" style="font-size: 12px;">
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">Master</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">Produk</a></li>
                    <li class="breadcrumb-item active text-dark fw-semibold" aria-current="page">Tambah Baru</li>
                </ol>
            </nav>
            <h5 class="fw-bold mb-0 text-dark">Tambah Data Produk</h5>
        </div>
        <a href="#" class="btn btn-light border shadow-sm btn-sm px-3 rounded-3 fw-medium">
            <i class="bi bi-arrow-left me-1"></i> Kembali
        </a>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm" style="border-radius: 12px;">
                <div class="card-body p-4">

                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h6 class="fw-bold text-muted mb-4 pb-2 border-bottom" style="font-size: 12px; letter-spacing: 0.05em;">
                            INFORMASI DASAR PRODUK
                        </h6>

                        <div class="row g-4">
                            <div class="col-md-6">
                                <label for="name" class="form-label fw-semibold text-dark" style="font-size: 13px;">
                                    Nama Produk <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="name" name="name"
                                    placeholder="" required>
                            </div>

                            <div class="col-md-6">
                                <label for="type" class="form-label fw-semibold text-dark" style="font-size: 13px;">
                                    Tipe Produk <span class="text-danger">*</span>
                                </label>
                                <select class="form-select form-select-sm" id="type" name="type" required>
                                    <option value="" selected disabled>-- Pilih Tipe --</option>
                                    <option value="Cincin">Cincin</option>
                                    <option value="Gelang">Gelang</option>
                                    <option value="Kalung">Kalung</option>
                                    <option value="Anting">Anting</option>
                                    <option value="Liontin">Liontin</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>

                            <div class="col-md-12">
                                <label for="file_name" class="form-label fw-semibold text-dark" style="font-size: 13px;">
                                    File / Gambar Desain <span class="text-danger">*</span>
                                </label>
                                <input class="form-control form-control-sm" type="file" id="file_name" name="file_name"
                                    accept=".jpg,.jpeg,.png,.pdf" required>
                                <div class="form-text" style="font-size: 11px;">
                                    Format yang diizinkan: JPG, PNG, atau PDF. Ukuran maksimal file 2MB.
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="keterangan" class="form-label fw-semibold text-dark" style="font-size: 13px;">
                                    Keterangan Tambahan
                                </label>
                                <textarea class="form-control form-control-sm" id="keterangan" name="keterangan"
                                    rows="4" placeholder="Tuliskan spesifikasi atau catatan tambahan terkait produk ini..."></textarea>
                            </div>
                        </div>

                        <hr class="my-4 text-muted">

                        <div class="d-flex justify-content-end gap-2">
                            <button type="reset" class="btn btn-light border btn-sm px-4 fw-medium text-secondary">
                                Reset Form
                            </button>
                            <button type="submit" class="btn btn-warning btn-sm px-4 fw-bold text-dark shadow-sm">
                                <i class="bi bi-save me-1"></i> Simpan Data
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-4 d-none d-lg-block">
            <div class="card border-0 shadow-sm bg-light" style="border-radius: 12px;">
                <div class="card-body p-4">
                    <h6 class="fw-bold text-dark" style="font-size: 13px;">
                        <i class="bi bi-info-circle text-primary me-1"></i> Panduan Pengisian
                    </h6>
                    <ul class="text-muted ps-3 mt-3 mb-0" style="font-size: 12px; line-height: 1.8;">
                        <li>Tanda bintang merah (<span class="text-danger">*</span>) artinya wajib diisi.</li>
                        <li>Pastikan <b>Nama Produk</b> belum pernah diinput sebelumnya (tidak ganda).</li>
                        <li>Gunakan foto desain yang jelas agar mempermudah tim produksi melihat model perhiasan.</li>
                        <li>Jika tipe produk tidak ada di pilihan, hubungi admin sistem untuk menambah master kategori.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
