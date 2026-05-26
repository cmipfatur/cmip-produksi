@extends('layouts.app')

@section('content')
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <div class="container-fluid px-0">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-1" style="font-size: 12px;">
                        <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">Transaksi</a>
                        </li>
                        <li class="breadcrumb-item active text-dark fw-semibold" aria-current="page">Pre Proses</li>
                    </ol>
                </nav>
                <h5 class="fw-bold mb-0 text-dark">Data Pre Proses</h5>
            </div>
            <a href="" class="btn btn-warning fw-bold text-dark btn-sm px-3 shadow-sm rounded-3">
                <i class="bi bi-plus-lg me-1"></i> Tambah Pre Proses
            </a>
        </div>

        <div class="card border-0 shadow-sm" style="border-radius: 12px;">
            <div class="card-body p-4">

                <div class="table-responsive">
                    <table id="tablePreProcess" class="table table-hover align-middle" style="width:100%; font-size: 13px;">
                        <table id="tablePreProcess" class="table table-hover align-middle"
                            style="width:100%; font-size: 13px;">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Bukti Pre Proses</th>
                                    <th>Tanggal Pre Proses</th>
                                    <th>Bukti Lama</th>
                                    <th>Notes</th>
                                    <th>Periode</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1.</td>
                                    <td class="fw-semibold text-dark">RK99/01/2026</td>
                                    <td class="fw-semibold text-dark">14-01-2026</td>
                                    <td class="fw-semibold text-dark"></td>
                                    <td class="fw-semibold text-dark"></td>
                                    <td class="fw-semibold text-dark">01/2026</td>
                                    <td class="text-center">
                                        <div class="btn-group shadow-sm">
                                            <a href="" class="btn btn-sm btn-light text-dark border"
                                                title="Print Data">
                                                <i class="bi bi-printer"></i>
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
                    $('#tablePreProcess').DataTable({
                        $('#tablePreProcess').DataTable({
                            "pageLength": 10,
                            "ordering": true,
                            "info": true,
                            "autoWidth": false,
                            "language": {
                                "url": "//cdn.datatables.net/plug-ins/1.13.6/i18n/id.json" // Translate ke Bahasa Indonesia
                            }
                        });
                    });
    </script>
@endsection
