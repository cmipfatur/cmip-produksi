@extends('layouts.app')

@section('title', 'Detail Produk - Admin BST')

@section('content')
<div class="container-fluid px-0">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-1" style="font-size: 12px;">
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">Master</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('product.index') }}" class="text-decoration-none text-muted">Produk</a></li>
                    <li class="breadcrumb-item active text-dark fw-semibold" aria-current="page">Detail</li>
                </ol>
            </nav>
            <h5 class="fw-bold mb-0 text-dark">Detail Spesifikasi Produk</h5>
        </div>
        <a href="{{ route('product.index') }}" class="btn btn-light border shadow-sm btn-sm px-3 rounded-3 fw-medium">
            <i class="bi bi-arrow-left me-1"></i> Kembali
        </a>
    </div>

    <div class="row g-4">
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm h-100" style="border-radius: 12px;">
                <div class="card-body p-4 d-flex flex-column align-items-center justify-content-center text-center">
                    <p class="text-uppercase text-muted fw-bold mb-3 w-100 text-start border-bottom pb-2" style="font-size: 11px; letter-spacing: 0.05em;">
                        PREVIEW DESAIN
                    </p>

                    @if($product->file_name)
                        @php
                            $ekstensi = pathinfo($product->file_name, PATHINFO_EXTENSION);
                        @endphp

                        @if(in_array(strtolower($ekstensi), ['jpg', 'jpeg', 'png']))
                            <img src="{{ asset('storage/produk/' . $product->file_name) }}"
                                 alt="{{ $product->name }}"
                                 class="img-fluid rounded-3 border shadow-sm mb-3"
                                 style="max-height: 250px; object-fit: cover;">
                        @else
                            <div class="bg-light rounded-3 p-4 border mb-3 d-flex align-items-center justify-content-center" style="width: 120px; height: 120px;">
                                <i class="bi bi-file-earmark-pdf text-danger" style="font-size: 4rem;"></i>
                            </div>
                        @endif

                        <span class="d-block text-truncate text-muted fw-medium mb-3" style="font-size: 13px; max-width: 240px;">
                            {{ $product->file_name }}
                        </span>

                        <a href="{{ asset('storage/produk/' . $product->file_name) }}" target="_blank" class="btn btn-sm btn-outline-primary px-3 rounded-2">
                            <i class="bi bi-box-arrow-up-right me-1"></i> Buka File Asli
                        </a>
                    @else
                        <div class="text-muted py-5">
                            <i class="bi bi-image-alt fs-1 d-block mb-2 text-secondary"></i>
                            <small>Tidak ada file desain</small>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card border-0 shadow-sm h-100" style="border-radius: 12px;">
                <div class="card-body p-4">
                    <p class="text-uppercase text-muted fw-bold mb-4 pb-2 border-bottom" style="font-size: 11px; letter-spacing: 0.05em;">
                        DATA ATRIBUT DATABASE
                    </p>

                    <div class="row g-3">
                        <div class="col-sm-3 fw-bold text-secondary" style="font-size: 13px;">ID Record</div>
                        <div class="col-sm-9 text-dark fw-semibold" style="font-size: 13px;">#{{ $product->id }}</div>

                        <div class="col-sm-3 fw-bold text-secondary" style="font-size: 13px;">Nama Produk</div>
                        <div class="col-sm-9 text-dark fw-bold fs-6">{{ $product->name ?? '-' }}</div>

                        <div class="col-sm-3 fw-bold text-secondary" style="font-size: 13px;">Tipe / Kategori</div>
                        <div class="col-sm-9">
                            <span class="badge bg-warning text-dark rounded-pill px-3 fw-medium" style="font-size: 12px;">
                                {{ $product->type ?? 'Lainnya' }}
                            </span>
                        </div>

                        <div class="col-sm-3 fw-bold text-secondary" style="font-size: 13px;">Keterangan</div>
                        <div class="col-sm-9 text-muted" style="font-size: 13px; line-height: 1.6;">
                            {{ $product->keterangan ?? 'Tidak ada catatan tambahan untuk produk ini.' }}
                        </div>

                        <div class="col-12"><hr class="text-muted my-2"></div>

                        <div class="col-sm-3 fw-bold text-secondary" style="font-size: 13px;">Tanggal Input</div>
                        <div class="col-sm-9 text-dark" style="font-size: 13px;">
                            <i class="bi bi-calendar3 me-1 text-muted"></i>
                            {{ $product->created_at ? \Carbon\Carbon::parse($product->created_at)->format('d M Y, H:i') : '-' }} WIB
                        </div>

                        <div class="col-sm-3 fw-bold text-secondary" style="font-size: 13px;">Pembaruan Terakhir</div>
                        <div class="col-sm-9 text-dark" style="font-size: 13px;">
                            <i class="bi bi-clock-history me-1 text-muted"></i>
                            {{ $product->updated_at ? \Carbon\Carbon::parse($product->updated_at)->format('d M Y, H:i') : '-' }} WIB
                        </div>
                    </div>

                    <div class="mt-5 d-flex gap-2 justify-content-end">
                        <a href="#" class="btn btn-sm btn-light border text-primary fw-medium px-3">
                            <i class="bi bi-pencil-square me-1"></i> Edit Spesifikasi
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
