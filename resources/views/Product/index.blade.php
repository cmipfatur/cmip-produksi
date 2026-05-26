@extends('layouts.app')

@section('title', 'Data Produk - Admin BST')

@section('content')
<link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">

<div class="container-fluid px-0">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-1" style="font-size: 12px;">
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">Master</a></li>
                    <li class="breadcrumb-item active text-dark fw-semibold" aria-current="page">Produk</li>
                </ol>
            </nav>
            <h5 class="fw-bold mb-0 text-dark">Data Produk</h5>
        </div>
        <a href="{{ route('product.create') }}" class="btn btn-warning fw-bold text-dark btn-sm px-3 shadow-sm rounded-3">
            <i class="bi bi-plus-lg me-1"></i> Tambah Produk
        </a>
    </div>

    <div class="card border-0 shadow-sm" style="border-radius: 12px;">
        <div class="card-body p-4">

            <div class="table-responsive">
                <table id="tableProduk" class="table table-hover align-middle" style="width:100%; font-size: 13px;">
                    <thead class="table-light">
                        <tr>
                            <th width="5%" class="text-center">Nomer</th>
                            <th width="15%">Nama Produk</th>
                            <th width="20%">Nama File</th>
                            <th width="10%">Tipe</th>
                            <th width="25%">Keterangan</th>
                            <th width="15%">Tanggal Dibuat</th>
                            <th width="10%" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($produk as $index => $item) --}}
                        <tr>
                            <td class="text-center">2</td>
                            <td class="fw-semibold text-dark">Gelang Rantai Bambu</td>
                            <td>
                                <a href="#" class="text-decoration-none d-flex align-items-center gap-2">
                                    <div class="bg-light rounded p-1 border">
                                        <i class="bi bi-file-pdf text-danger"></i>
                                    </div>
                                    <span>grb_draft.pdf</span>
                                </a>
                            </td>
                            <td>
                                <span class="badge bg-success rounded-pill px-3 fw-medium">Gelang</span>
                            </td>
                            <td class="text-muted text-wrap">
                                Draft desain untuk gelang rantai model bambu ukuran M.
                            </td>
                            <td class="text-secondary">25 Mei 2026</td>
                            <td class="text-center">
                                <div class="btn-group shadow-sm">
                                    <a href="{{-- {{ route('product.show', $item->id) }} --}}" class="btn btn-sm btn-light text-dark border" title="Lihat Detail">
                                        <i class="bi bi-eye"></i>
                                    </a>

                                    <button class="btn btn-sm btn-light text-primary border" title="Edit Data">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button class="btn btn-sm btn-light text-danger border" title="Hapus Data">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#tableProduk').DataTable({
            "pageLength": 10,       // Menampilkan 10 data per halaman
            "ordering": true,       // Mengaktifkan fitur sorting
            "info": true,           // Menampilkan tulisan "Showing 1 to 10 of x entries"
            "autoWidth": false,     // Mencegah tabel berubah ukuran secara aneh
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.6/i18n/id.json" // Translate ke Bahasa Indonesia
            }
        });
    });
</script>
@endsection
