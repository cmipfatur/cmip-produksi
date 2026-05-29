@extends('layouts.app')

@section('content')
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://npmcdn.com/flatpickr/dist/flatpickr.min.css" rel="stylesheet">

    <style>
        .page-header-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.25rem;
            flex-wrap: wrap;
            gap: 10px;
        }

        .table-card {
            background: #fff;
            border: none;
            border-radius: 12px;
            box-shadow: 0 1px 6px rgba(0, 0, 0, .08);
        }

        .mobile-list {
            display: none;
        }

        /* ── Modal ── */
        .modal-head-warning {
            background: #E8A020;
            padding: 12px 18px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-radius: 12px 12px 0 0;
        }

        .modal-head-warning .modal-title-text {
            font-size: 14px;
            font-weight: 700;
            color: #fff;
        }

        .btn-close-white {
            background: rgba(255, 255, 255, .25);
            border: none;
            color: #fff;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background .15s;
        }

        .btn-close-white:hover {
            background: rgba(255, 255, 255, .45);
        }

        /* ── Form Modal ── */
        .lbl {
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            color: #555;
            margin-bottom: 3px;
            display: block;
        }

        .inp {
            width: 100%;
            height: 32px;
            padding: 0 8px;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            border: 1px solid #d0d0d0;
            border-radius: 6px;
            background: #fff;
            color: #1a1a1a;
        }

        .inp:focus {
            outline: none;
            border-color: #E8A020;
            box-shadow: 0 0 0 2px rgba(232, 160, 32, .2);
        }

        .inp[readonly] {
            background: #f5f5f3;
            color: #888;
        }

        .sec-div {
            font-size: 11px;
            font-weight: 700;
            color: #E8A020;
            text-transform: uppercase;
            letter-spacing: .5px;
            border-bottom: 1.5px solid #E8A020;
            padding-bottom: 3px;
            margin: 14px 0 10px;
        }

        /* ── Detail Table ── */
        .detail-table th {
            font-size: 10px;
            color: #444;
            text-align: center;
            background: #f5f5f3;
            white-space: nowrap;
            padding: 4px !important;
        }

        .detail-table td {
            font-size: 10px;
            padding: 2px 3px !important;
            vertical-align: middle;
        }

        .detail-table .fc {
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            padding: 2px 5px;
            height: 26px;
            border-radius: 4px;
            border: 1px solid #d0d0d0;
            width: 100%;
        }

        .detail-table .fc:focus {
            outline: none;
            border-color: #E8A020;
        }

        .detail-table .fc[readonly] {
            background: #f5f5f3;
        }

        /* ── Summary ── */
        .sum-box {
            background: #f5f5f3;
            border-radius: 8px;
            padding: 10px 12px;
        }

        .sum-box .sum-lbl {
            font-size: 11px;
            font-weight: 700;
            color: #555;
            display: block;
            margin-bottom: 4px;
        }

        .sum-box .sum-val {
            font-size: 15px;
            font-weight: 700;
            color: #185FA5;
            border: none;
            background: transparent;
            width: 100%;
            text-align: right;
        }

        .sum-box .sum-val.danger {
            color: #A32D2D;
        }

        .sum-box small {
            font-size: 10px;
            color: #aaa;
        }

        /* ── Sub-overlay ── */
        .sub-overlay {
            display: none;
            position: absolute;
            inset: 0;
            z-index: 10;
            background: rgba(0, 0, 0, .35);
            align-items: flex-start;
            justify-content: center;
            padding-top: 40px;
            border-radius: 12px;
        }

        .sub-overlay.active {
            display: flex;
        }

        .sub-box {
            background: #fff;
            border: 0.5px solid #e0e0e0;
            border-radius: 10px;
            width: 540px;
            max-width: 95%;
            max-height: 70vh;
            display: flex;
            flex-direction: column;
            box-shadow: 0 8px 32px rgba(0, 0, 0, .18);
        }

        .sub-box.wide {
            width: 780px;
        }

        .sub-head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 14px;
            background: #f5f5f3;
            border-bottom: 0.5px solid #e0e0e0;
            border-radius: 10px 10px 0 0;
            flex-shrink: 0;
        }

        .sub-head h6 {
            font-size: 13px;
            font-weight: 700;
            color: #1a1a1a;
            margin: 0;
        }

        .sub-body {
            overflow-y: auto;
            padding: 12px 14px;
            flex: 1;
        }

        .lookup-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 7px 8px;
            border-bottom: 0.5px solid #f0f0f0;
            cursor: pointer;
            border-radius: 6px;
            transition: background .1s;
        }

        .lookup-row:last-child {
            border-bottom: none;
        }

        .lookup-row:hover {
            background: #fef8ec;
        }

        .lookup-id {
            font-size: 12px;
            font-weight: 700;
            color: #1a1a1a;
        }

        .lookup-sub {
            font-size: 11px;
            color: #888;
            margin-top: 1px;
        }

        /* ── Mobile ── */
        @media (max-width: 767.98px) {
            .desktop-table {
                display: none !important;
            }

            .mobile-list {
                display: block;
            }

            .page-header-row {
                flex-wrap: nowrap;
                align-items: flex-start;
            }

            .mobile-search-bar {
                display: flex;
                gap: 8px;
                margin-bottom: 12px;
            }

            .mobile-search-bar .input-group {
                flex: 1;
            }

            .mobile-search-bar .input-group input {
                border-radius: 8px !important;
                font-size: 13px;
                border-color: #e0e0e0;
            }

            .mobile-search-bar .input-group-text {
                background: #fff;
                border-color: #e0e0e0;
                border-radius: 8px 0 0 8px !important;
                color: #888;
            }

            .btn-filter {
                width: 38px;
                height: 38px;
                border: 1px solid #e0e0e0;
                border-radius: 8px;
                background: #fff;
                display: flex;
                align-items: center;
                justify-content: center;
                color: #666;
                flex-shrink: 0;
            }

            .mobile-stats {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 8px;
                margin-bottom: 14px;
            }

            .mobile-stat {
                background: #f5f5f3;
                border-radius: 8px;
                padding: 10px 12px;
            }

            .mobile-stat .stat-label {
                font-size: 11px;
                color: #888;
                margin-bottom: 3px;
            }

            .mobile-stat .stat-value {
                font-size: 18px;
                font-weight: 600;
                color: #1a1a1a;
                line-height: 1.2;
            }

            .mobile-stat .stat-sub {
                font-size: 11px;
                color: #aaa;
                margin-top: 2px;
            }

            .mobile-section-label {
                font-size: 11px;
                font-weight: 600;
                color: #999;
                text-transform: uppercase;
                letter-spacing: .5px;
                margin-bottom: 8px;
            }

            .preproses-card {
                background: #fff;
                border: 0.5px solid #e8e8e8;
                border-radius: 12px;
                padding: 14px;
                margin-bottom: 8px;
            }

            .preproses-card .card-top {
                display: flex;
                align-items: flex-start;
                justify-content: space-between;
                margin-bottom: 10px;
            }

            .preproses-card .card-no {
                font-size: 11px;
                color: #aaa;
                margin-bottom: 2px;
            }

            .preproses-card .card-id {
                font-size: 15px;
                font-weight: 600;
                color: #1a1a1a;
            }

            .status-badge {
                font-size: 11px;
                font-weight: 600;
                background: #EAF3DE;
                color: #3B6D11;
                border-radius: 20px;
                padding: 3px 10px;
                white-space: nowrap;
            }

            .card-meta-grid {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 8px;
                margin-bottom: 12px;
            }

            .meta-key {
                font-size: 11px;
                color: #999;
                margin-bottom: 2px;
            }

            .meta-val {
                font-size: 13px;
                font-weight: 500;
                color: #1a1a1a;
            }

            .meta-val.empty {
                color: #bbb;
                font-style: italic;
                font-weight: 400;
            }

            .card-divider {
                border: none;
                border-top: 0.5px solid #f0f0f0;
                margin: 0 0 10px;
            }

            .card-actions {
                display: flex;
                gap: 8px;
                justify-content: flex-end;
            }

            .card-action-btn {
                display: flex;
                align-items: center;
                gap: 5px;
                padding: 6px 12px;
                border-radius: 8px;
                font-size: 12px;
                font-weight: 500;
                cursor: pointer;
                border: 1px solid #e0e0e0;
                background: #fff;
                color: #666;
                text-decoration: none;
            }

            .card-action-btn.btn-edit {
                color: #185FA5;
                border-color: #B5D4F4;
                background: #E6F1FB;
            }

            .card-action-btn.btn-del {
                color: #A32D2D;
                border-color: #F7C1C1;
                background: #FCEBEB;
            }

            #modal-add-pre-process .modal-dialog {
                margin: 0;
                max-width: 100%;
            }

            #modal-add-pre-process .modal-content {
                border-radius: 0;
                min-height: 100vh;
            }

            .detail-table {
                min-width: 860px;
            }

            .sub-box {
                width: 96vw !important;
            }
        }
    </style>

    <div class="container-fluid px-0">

        {{-- ── Page Header ── --}}
        <div class="page-header-row">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-1" style="font-size:12px;">
                        <li class="breadcrumb-item">
                            <a href="#" class="text-decoration-none text-muted">Transaksi</a>
                        </li>
                        <li class="breadcrumb-item active text-dark fw-semibold" aria-current="page">Pre Proses</li>
                    </ol>
                </nav>
                <h5 class="fw-bold mb-0 text-dark">Data Pre Proses</h5>
            </div>
            <button type="button"
                class="btn btn-warning fw-bold text-dark btn-sm px-3 shadow-sm rounded-3 d-flex align-items-center gap-1"
                data-bs-toggle="modal" data-bs-target="#modal-add-pre-process" style="white-space:nowrap;">
                <i class="bi bi-plus-lg"></i>
                <span class="d-none d-sm-inline">Tambah Pre Proses</span>
                <span class="d-inline d-sm-none">Tambah</span>
            </button>
        </div>

        {{-- ── Alert ── --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- ── Desktop Table ── --}}
        <div class="table-card desktop-table">
            <div class="card-body p-4">

                <form method="GET" action="{{ route('PreProcessTransaction.index') }}" class="mb-3">
                    <div class="row g-2 align-items-end">
                        <div class="col-5">
                            <label class="form-label fw-semibold small mb-1">Dari Tanggal</label>
                            <input type="date" name="date_from" class="form-control form-control-sm"
                                value="{{ request('date_from') }}">
                        </div>
                        <div class="col-5">
                            <label class="form-label fw-semibold small mb-1">Sampai Tanggal</label>
                            <input type="date" name="date_to" class="form-control form-control-sm"
                                value="{{ request('date_to') }}">
                        </div>
                        <div class="col">
                            <button type="submit"
                                class="btn btn-warning btn-sm fw-bold w-100 d-flex align-items-center justify-content-center gap-1">
                                <i class="bi bi-funnel"></i> Filter
                            </button>
                        </div>
                        <div class="col">
                            <a href="{{ route('PreProcessTransaction.index') }}"
                                class="btn btn-secondary btn-sm w-100 d-flex align-items-center justify-content-center gap-1">
                                <i class="bi bi-arrow-clockwise"></i> Reset
                            </a>
                        </div>
                    </div>
                </form>

                @if (count($data) == 0)
                    @if (empty($date_from) && empty($date_to))
                        <div class="alert alert-info border shadow-sm">
                            <h6 class="mb-1"><i class="bi bi-calendar-range"></i> Belum Ada Filter Tanggal</h6>
                            <p class="mb-0">Silakan pilih <strong>Dari Tanggal</strong> dan <strong>Sampai
                                    Tanggal</strong> untuk menampilkan data.</p>
                        </div>
                    @else
                        <div class="alert alert-warning border shadow-sm">
                            <h6 class="mb-1"><i class="bi bi-inbox"></i> Data Tidak Ditemukan</h6>
                            <p class="mb-0">Tidak ada transaksi Pre Proses pada rentang tanggal yang dipilih.</p>
                        </div>
                    @endif
                @endif

                <div class="table-responsive">
                    <table id="table-pre-process" class="table table-hover align-middle" style="width:100%;font-size:13px;">
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
                            @foreach ($data as $index => $item)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}.</td>
                                    <td class="fw-semibold text-dark">{{ $item->BUKTI_PREPROSES }}</td>
                                    <td class="fw-semibold text-dark">
                                        {{ \Carbon\Carbon::parse($item->TGL_PREPROSES)->format('d-m-Y') }}</td>
                                    <td class="fw-semibold text-dark">{{ $item->BUKTI_PREPROSES_LAMA ?: '—' }}</td>
                                    <td class="fw-semibold text-dark">{{ $item->NOTES ?: '—' }}</td>
                                    <td class="fw-semibold text-dark">{{ $item->PER }}</td>
                                    <td class="text-center">
                                        <div class="btn-group shadow-sm">
                                            <a href="#" class="btn btn-sm btn-light text-dark border" title="Print">
                                                <i class="bi bi-printer"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-light text-primary border"
                                                title="Edit">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <button type="button" class="btn btn-sm btn-light text-danger border"
                                                title="Hapus" onclick="confirmDelete({{ $item->NO_ID }})">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

        {{-- ── Mobile Card List ── --}}
        <div class="mobile-list">
            <div class="mobile-search-bar">
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-search"></i></span>
                    <input type="text" id="input-mobile-search" class="form-control" placeholder="Cari bukti, periode…">
                </div>
                <button class="btn-filter" title="Filter"><i class="bi bi-sliders2"></i></button>
            </div>
            <div class="mobile-stats">
                <div class="mobile-stat">
                    <div class="stat-label">Total Data</div>
                    <div class="stat-value">{{ count($data) }}</div>
                    <div class="stat-sub">Pre proses</div>
                </div>
                <div class="mobile-stat">
                    <div class="stat-label">Periode Aktif</div>
                    <div class="stat-value">{{ count($data) > 0 ? $data[0]->PER : '—' }}</div>
                    <div class="stat-sub">Berjalan</div>
                </div>
            </div>
            <div class="mobile-section-label">Daftar Pre Proses</div>
            <div id="mobile-card-list">
                @foreach ($data as $index => $item)
                    <div class="preproses-card"
                        data-search="{{ strtolower($item->BUKTI_PREPROSES . ' ' . $item->PER . ' ' . $item->NOTES) }}">
                        <div class="card-top">
                            <div>
                                <div class="card-no">#{{ $index + 1 }}</div>
                                <div class="card-id">{{ $item->BUKTI_PREPROSES }}</div>
                            </div>
                            <span class="status-badge">Aktif</span>
                        </div>
                        <div class="card-meta-grid">
                            <div>
                                <div class="meta-key">Tanggal Pre Proses</div>
                                <div class="meta-val">{{ \Carbon\Carbon::parse($item->TGL_PREPROSES)->format('d-m-Y') }}
                                </div>
                            </div>
                            <div>
                                <div class="meta-key">Periode</div>
                                <div class="meta-val">{{ $item->PER }}</div>
                            </div>
                            <div>
                                <div class="meta-key">Bukti Lama</div>
                                <div class="meta-val {{ $item->BUKTI_PREPROSES_LAMA ? '' : 'empty' }}">
                                    {{ $item->BUKTI_PREPROSES_LAMA ?: '—' }}
                                </div>
                            </div>
                            <div>
                                <div class="meta-key">Notes</div>
                                <div class="meta-val {{ $item->NOTES ? '' : 'empty' }}">
                                    {{ $item->NOTES ?: '—' }}
                                </div>
                            </div>
                        </div>
                        <hr class="card-divider">
                        <div class="card-actions">
                            <a href="#" class="card-action-btn"><i class="bi bi-printer"></i> Cetak</a>
                            <a href="#" class="card-action-btn btn-edit"><i class="bi bi-pencil-square"></i>
                                Edit</a>
                            <button class="card-action-btn btn-del" onclick="confirmDelete({{ $item->NO_ID }})">
                                <i class="bi bi-trash"></i> Hapus
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>{{-- /container-fluid --}}


    {{-- ══════════════════════════════════════════════════
     MODAL TAMBAH PRE PROSES
    ══════════════════════════════════════════════════ --}}
    <div class="modal fade" id="modal-add-pre-process" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content" style="border-radius:12px;border:none;position:relative;overflow:visible;">

                <div class="modal-head-warning">
                    <span class="modal-title-text">
                        <i class="bi bi-plus-circle me-2"></i>Input Transaksi Pre Proses
                    </span>
                    <button type="button" class="btn-close-white" data-bs-dismiss="modal">
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>

                <div class="modal-body p-3 p-md-4" style="position:relative;">
                    <form id="form-pre-process" action="{{ route('PreProcessTransaction.store') }}" method="POST">
                        @csrf

                        {{-- Section 1 --}}
                        <div class="sec-div">Informasi Pre Proses</div>
                        <div class="row g-2">
                            <div class="col-6 col-md-3">
                                <label class="lbl">Bukti Pre Proses</label>
                                <input type="text" id="input-voucher-code" name="voucher_code" class="inp"
                                    placeholder="RK99/01/2026" required>
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="lbl">Tgl Pre Proses</label>
                                <input type="text" id="input-process-date" name="process_date" class="inp fp-date"
                                    placeholder="dd-mm-yyyy" value="{{ date('d-m-Y') }}" required>
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="lbl">Bukti Pre Proses Lama</label>
                                <input type="text" id="input-old-voucher" name="old_voucher" class="inp" readonly
                                    placeholder="—">
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="lbl">Periode</label>
                                <select id="input-period" name="period" class="inp" style="height:32px;" required>
                                    <option value="">-- Pilih --</option>
                                    @foreach (['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'] as $m)
                                        <option value="{{ $m }}/2026">{{ $m }}/2026</option>
                                    @endforeach
                                    <option value="11/2025">11/2025</option>
                                    <option value="12/2025">12/2025</option>
                                </select>
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="lbl">Admin</label>
                                <input type="text" id="input-admin" name="admin" class="inp"
                                    value="{{ auth()->user()->name ?? 'Admin' }}" readonly>
                            </div>
                            <div class="col-12 col-md-5">
                                <label class="lbl">Notes</label>
                                <input type="text" id="input-notes" name="notes" class="inp"
                                    placeholder="Keterangan tambahan…">
                            </div>
                            <div class="col-6 col-md-2 d-flex align-items-end">
                                <button type="button" class="btn btn-info btn-sm fw-bold text-white w-100"
                                    onclick="openSubOverlay('sub-list-pre-process')">
                                    <i class="bi bi-search me-1"></i>Daftar Pre Proses
                                </button>
                            </div>
                        </div>

                        {{-- Section 2 --}}
                        <div class="sec-div">Detail Bon Bahan</div>
                        <div class="d-flex gap-2 mb-2 flex-wrap">
                            <button type="button" class="btn btn-info btn-sm fw-bold text-white"
                                onclick="openSubOverlay('sub-add-bon')">
                                <i class="bi bi-plus-circle me-1"></i>Tambah Bon
                            </button>
                            <button type="button" class="btn btn-outline-secondary btn-sm" onclick="addDetailRow()">
                                <i class="bi bi-plus me-1"></i>Tambah Baris
                            </button>
                        </div>

                        <div class="table-responsive">
                            <table id="detail-table" class="table table-bordered table-sm detail-table">
                                <thead>
                                    <tr>
                                        <th style="width:36px">REC</th>
                                        <th style="width:110px">Bukti Proses</th>
                                        <th style="width:110px">Proses Selanjutnya</th>
                                        <th style="width:80px">Kadar</th>
                                        <th style="width:96px">Tgl Proses</th>
                                        <th style="width:76px">Operator 1</th>
                                        <th style="width:76px">Operator 2</th>
                                        <th style="width:80px">Rincian A</th>
                                        <th style="width:80px">Rincian B</th>
                                        <th style="width:80px">Berat (GR)</th>
                                        <th style="width:90px">Produk</th>
                                        <th style="width:76px">Notes</th>
                                        <th style="width:34px"></th>
                                    </tr>
                                </thead>
                                <tbody id="detail-body">
                                    <tr>
                                        <td><input name="rec[]" type="text" value="1" class="fc fc-rec"
                                                readonly></td>
                                        <td><input name="process_voucher[]" type="text" class="fc fc-process-voucher"
                                                readonly></td>
                                        <td>
                                            <select name="next_process[]" class="fc fc-next-process" required>
                                                <option value="BOL">BOLA</option>
                                                <option value="COR">COR</option>
                                                <option value="GLN">GILING</option>
                                                <option value="HLL">HOLLOW</option>
                                                <option value="PPL">PATRI PLAT</option>
                                                <option value="PIP">PIPA</option>
                                                <option value="STM">STAMPING</option>
                                                <option value="TRK">TARIK</option>
                                                <option value="SRT">SORTIR</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select name="karat[]" class="fc" required>
                                                <option value="">— Karat —</option>
                                            </select>
                                        </td>
                                        <td><input name="process_date_detail[]" type="text" class="fc fp-date"
                                                value="{{ date('d-m-Y') }}" required></td>
                                        <td><input name="operator_a[]" type="text" class="fc"></td>
                                        <td><input name="operator_b[]" type="text" class="fc"></td>
                                        <td>
                                            <input name="gram_a[]" type="text" value="0"
                                                class="fc text-end text-primary fw-bold fc-gram-a"
                                                oninput="calcRow(this)">
                                            <input name="gram_b[]" type="text" value="0"
                                                class="fc text-end text-primary fw-bold fc-gram-b mt-1"
                                                oninput="calcRow(this)">
                                            <input name="gram_c[]" type="text" value="0"
                                                class="fc text-end text-primary fw-bold fc-gram-c mt-1"
                                                oninput="calcRow(this)">
                                        </td>
                                        <td>
                                            <input name="gram_d[]" type="text" value="0"
                                                class="fc text-end text-primary fw-bold fc-gram-d"
                                                oninput="calcRow(this)">
                                            <input name="gram_e[]" type="text" value="0"
                                                class="fc text-end text-primary fw-bold fc-gram-e mt-1"
                                                oninput="calcRow(this)">
                                            <input name="gram_f[]" type="text" value="0"
                                                class="fc text-end text-primary fw-bold fc-gram-f mt-1"
                                                oninput="calcRow(this)">
                                        </td>
                                        <td><input name="gram_total[]" type="text" value="0"
                                                class="fc text-end text-success fw-bold fc-gram-total" readonly></td>
                                        <td><input name="product_name[]" type="text" class="fc" required></td>
                                        <td><input name="detail_notes[]" type="text" class="fc"></td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-sm btn-outline-danger btn-delete-row px-1 py-0">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="table-light">
                                        <td colspan="9" class="text-end fw-bold" style="font-size:10px;">Grand Total
                                            Berat (GR):</td>
                                        <td><input type="text" id="input-grand-total-gram" name="grand_total_gram"
                                                class="fc text-end fw-bold text-success" value="0" readonly></td>
                                        <td colspan="3"></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                        {{-- Section 3 --}}
                        <div class="sec-div">Ringkasan</div>
                        <div class="row g-2">
                            <div class="col-12 col-md-4">
                                <div class="sum-box">
                                    <span class="sum-lbl">Bahan Awal Pre Proses</span>
                                    <input type="text" id="input-initial-weight" name="initial_weight"
                                        class="sum-val" value="0" readonly>
                                    <small>GR</small>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="sum-box">
                                    <span class="sum-lbl">Afkir Pre Proses</span>
                                    <input type="text" id="input-reject-weight" name="reject_weight"
                                        class="sum-val danger" value="0" readonly>
                                    <small>GR</small>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="sum-box">
                                    <span class="sum-lbl">Susut Pre Proses</span>
                                    <input type="text" id="input-shrinkage-weight" name="shrinkage_weight"
                                        class="sum-val danger" value="0" readonly>
                                    <small>GR</small>
                                </div>
                            </div>
                        </div>

                        {{-- Footer --}}
                        <div class="d-flex gap-2 justify-content-end mt-3 pt-3 border-top">
                            <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">
                                <i class="bi bi-x-lg me-1"></i>Batal
                            </button>
                            <button type="submit" id="btn-save" class="btn btn-primary px-4 fw-bold">
                                <i class="bi bi-floppy me-1"></i>Simpan
                            </button>
                        </div>

                    </form>

                    {{-- ── Sub-overlay A: Daftar Pre Proses ── --}}
                    <div class="sub-overlay" id="sub-list-pre-process">
                        <div class="sub-box">
                            <div class="sub-head">
                                <h6><i class="bi bi-list-ul me-2"></i>Daftar Pre Proses</h6>
                                <button type="button" onclick="closeSubOverlay('sub-list-pre-process')"
                                    style="background:rgba(0,0,0,.15);border:none;color:#333;width:28px;height:28px;border-radius:50%;cursor:pointer;">
                                    <i class="bi bi-x-lg"></i>
                                </button>
                            </div>
                            <div class="sub-body">
                                <input type="text" id="input-search-pre-process" class="inp mb-2"
                                    placeholder="Cari bukti atau periode...">
                                <div id="list-pre-process-rows">
                                    <div class="text-center text-muted py-3" style="font-size:12px;">
                                        <span class="spinner-border spinner-border-sm"></span> Memuat...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- ── Sub-overlay B: Tambah Bon ── --}}
                    <div class="sub-overlay" id="sub-add-bon">
                        <div class="sub-box wide">
                            <div class="sub-head">
                                <h6><i class="bi bi-box me-2"></i>Data Bon Bahan</h6>
                                <button type="button" onclick="closeSubOverlay('sub-add-bon')"
                                    style="background:rgba(0,0,0,.15);border:none;color:#333;width:28px;height:28px;border-radius:50%;cursor:pointer;">
                                    <i class="bi bi-x-lg"></i>
                                </button>
                            </div>
                            <div class="sub-body">
                                <div class="table-responsive">
                                    <table class="table table-sm table-hover" style="font-size:11px;">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Bon Bahan Baku</th>
                                                <th>Bon Lama</th>
                                                <th>Notes</th>
                                                <th>Kadar</th>
                                                <th>Proses</th>
                                                <th class="text-end">Gram</th>
                                                <th class="text-end">Pcs</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- ganti dengan @foreach ($dataBon as $bon) --}}
                                            <tr>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm py-0 btn-select-bon"
                                                        data-voucher="BB/001/2026" data-karat="375"
                                                        data-product="RANTAI POLOS" data-gram="150.500">
                                                        BB/001/2026
                                                    </button>
                                                </td>
                                                <td>—</td>
                                                <td>—</td>
                                                <td>375</td>
                                                <td>RANTAI</td>
                                                <td class="text-end">150.500</td>
                                                <td class="text-end">25</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm py-0 btn-select-bon"
                                                        data-voucher="BB/002/2026" data-karat="750"
                                                        data-product="RANTAI VARIASI" data-gram="200.000">
                                                        BB/002/2026
                                                    </button>
                                                </td>
                                                <td>BB/001/2026</td>
                                                <td>Revisi</td>
                                                <td>750</td>
                                                <td>RANTAI</td>
                                                <td class="text-end">200.000</td>
                                                <td class="text-end">40</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm py-0 btn-select-bon"
                                                        data-voucher="BB/003/2026" data-karat="375"
                                                        data-product="RANTAI LAPIS" data-gram="310.750">
                                                        BB/003/2026
                                                    </button>
                                                </td>
                                                <td>—</td>
                                                <td>—</td>
                                                <td>375</td>
                                                <td>RANTAI</td>
                                                <td class="text-end">310.750</td>
                                                <td class="text-end">60</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>{{-- /modal-body --}}
            </div>
        </div>
    </div>{{-- /modal-add-pre-process --}}

    {{-- Delete form --}}
    <form id="form-delete" method="POST" style="display:none;">
        @csrf
        @method('DELETE')
    </form>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>

    <script>
        // ── DataTable ────────────────────────────────────────────
        $(document).ready(function() {
            $('#table-pre-process').DataTable({
                pageLength: 10,
                ordering: true,
                autoWidth: false,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/id.json'
                }
            });
        });

        // ── Flatpickr ────────────────────────────────────────────
        function initFlatpickr() {
            document.querySelectorAll('.fp-date:not([data-fp])').forEach(function(el) {
                flatpickr(el, {
                    dateFormat: 'd-m-Y',
                    allowInput: true
                });
                el.setAttribute('data-fp', '1');
            });
        }
        document.addEventListener('DOMContentLoaded', initFlatpickr);

        // ── Sub-overlay ──────────────────────────────────────────
        let preProcessListLoaded = false;
        let preProcessListData = [];

        function openSubOverlay(id) {
            document.getElementById(id).classList.add('active');
            if (id === 'sub-list-pre-process' && !preProcessListLoaded) {
                fetchPreProcessList();
            }
        }

        function closeSubOverlay(id) {
            document.getElementById(id).classList.remove('active');
        }

        // ── Fetch list pre process ───────────────────────────────
        function fetchPreProcessList() {
            const dateFrom = $('[name="date_from"]').val();
            const dateTo = $('[name="date_to"]').val();

            $.get("{{ route('PreProcessTransaction.list') }}", {
                date_from: dateFrom,
                date_to: dateTo
            }, function(response) {
                preProcessListLoaded = true;
                preProcessListData = response;
                renderPreProcessList(response);
            }).fail(function() {
                $('#list-pre-process-rows').html(
                    '<div class="text-center text-danger py-3" style="font-size:12px;">' +
                    '<i class="bi bi-exclamation-circle me-1"></i>Gagal memuat data.</div>'
                );
            });
        }

        // ── Render list ──────────────────────────────────────────
        function renderPreProcessList(data) {
            if (!data.length) {
                $('#list-pre-process-rows').html(
                    '<div class="text-center text-muted py-3" style="font-size:12px;">Tidak ada data.</div>'
                );
                return;
            }

            const rows = data.map(item => {
                const voucherCode = item.BUKTI_PREPROSES || '';
                const oldVoucher = item.BUKTI_PREPROSES_LAMA || '';
                const period = item.PER || '';

                return `
                <div class="lookup-row"
                     onclick="selectPreProcess('${voucherCode}', '${oldVoucher}', '${period}')">
                    <div>
                        <div class="lookup-id">${voucherCode}</div>
                        <div class="lookup-sub">
                            Lama: ${oldVoucher || '—'} &nbsp;|&nbsp; Periode: ${period}
                        </div>
                    </div>
                    <i class="bi bi-chevron-right text-warning"></i>
                </div>
            `;
            }).join('');

            $('#list-pre-process-rows').html(rows);
        }

        // ── Search client-side ───────────────────────────────────
        $(document).on('input', '#input-search-pre-process', function() {
            const keyword = $(this).val().toLowerCase();
            const filtered = preProcessListData.filter(item =>
                (item.BUKTI_PREPROSES || '').toLowerCase().includes(keyword) ||
                (item.PER || '').toLowerCase().includes(keyword)
            );
            renderPreProcessList(filtered);
        });

        // ── Select pre process → isi form ────────────────────────
        function selectPreProcess(voucherCode, oldVoucher, period) {
            $('#input-old-voucher').val(oldVoucher || '');
            $('#input-period').val(period || '');
            closeSubOverlay('sub-list-pre-process');
        }

        // ── Select bon → isi detail row ──────────────────────────
        $(document).on('click', '.btn-select-bon', function() {
            const voucher = $(this).data('voucher');
            const karat = $(this).data('karat');
            const product = $(this).data('product');
            const gram = $(this).data('gram');
            let filled = false;

            $('#detail-body tr').each(function() {
                const pv = $(this).find('.fc-process-voucher');
                if (pv.val() === '') {
                    pv.val(voucher);
                    $(this).find('.fc-gram-a').val(gram);
                    $(this).find('[name="product_name[]"]').val(product);
                    calcRow($(this).find('.fc-gram-a')[0]);
                    filled = true;
                    return false;
                }
            });

            if (!filled) addDetailRow({
                voucher,
                karat,
                product,
                gram
            });
            closeSubOverlay('sub-add-bon');
        });

        // ── Delete detail row ────────────────────────────────────
        $(document).on('click', '.btn-delete-row', function() {
            if ($('#detail-body tr').length <= 1) {
                alert('Minimal harus ada 1 baris detail.');
                return;
            }
            if (!confirm('Hapus baris ini?')) return;
            $(this).closest('tr').remove();
            reNumberRows();
            calcGrandTotal();
        });

        function reNumberRows() {
            $('#detail-body tr').each(function(i) {
                $(this).find('.fc-rec').val(i + 1);
            });
        }

        // ── Add detail row ───────────────────────────────────────
        let rowCount = 1;

        function addDetailRow(data = {}) {
            rowCount++;
            const today = "{{ date('d-m-Y') }}";
            const opts = `
            <option value="BOL">BOLA</option>
            <option value="COR">COR</option>
            <option value="GLN">GILING</option>
            <option value="HLL">HOLLOW</option>
            <option value="PPL">PATRI PLAT</option>
            <option value="PIP">PIPA</option>
            <option value="STM">STAMPING</option>
            <option value="TRK">TARIK</option>
            <option value="SRT">SORTIR</option>`;

            const row = `<tr>
            <td><input name="rec[]" type="text" value="${rowCount}" class="fc fc-rec" readonly></td>
            <td><input name="process_voucher[]" type="text" value="${data.voucher || ''}" class="fc fc-process-voucher" readonly></td>
            <td><select name="next_process[]" class="fc fc-next-process" required>${opts}</select></td>
            <td><select name="karat[]" class="fc" required>
                <option value="${data.karat || ''}" selected>${data.karat || '— Karat —'}</option>
            </select></td>
            <td><input name="process_date_detail[]" type="text" class="fc fp-date" value="${today}" required></td>
            <td><input name="operator_a[]" type="text" class="fc"></td>
            <td><input name="operator_b[]" type="text" class="fc"></td>
            <td>
                <input name="gram_a[]" type="text" value="${data.gram || '0'}" class="fc text-end text-primary fw-bold fc-gram-a" oninput="calcRow(this)">
                <input name="gram_b[]" type="text" value="0" class="fc text-end text-primary fw-bold fc-gram-b mt-1" oninput="calcRow(this)">
                <input name="gram_c[]" type="text" value="0" class="fc text-end text-primary fw-bold fc-gram-c mt-1" oninput="calcRow(this)">
            </td>
            <td>
                <input name="gram_d[]" type="text" value="0" class="fc text-end text-primary fw-bold fc-gram-d" oninput="calcRow(this)">
                <input name="gram_e[]" type="text" value="0" class="fc text-end text-primary fw-bold fc-gram-e mt-1" oninput="calcRow(this)">
                <input name="gram_f[]" type="text" value="0" class="fc text-end text-primary fw-bold fc-gram-f mt-1" oninput="calcRow(this)">
            </td>
            <td><input name="gram_total[]" type="text" value="0" class="fc text-end text-success fw-bold fc-gram-total" readonly></td>
            <td><input name="product_name[]" type="text" value="${data.product || ''}" class="fc" required></td>
            <td><input name="detail_notes[]" type="text" class="fc"></td>
            <td><button type="button" class="btn btn-sm btn-outline-danger btn-delete-row px-1 py-0">
                <i class="bi bi-trash"></i>
            </button></td>
        </tr>`;

            $('#detail-body').append(row);
            initFlatpickr();
            reNumberRows();
        }

        // ── Calc row total ───────────────────────────────────────
        function calcRow(el) {
            const row = $(el).closest('tr');
            let total = 0;
            row.find('.fc-gram-a,.fc-gram-b,.fc-gram-c,.fc-gram-d,.fc-gram-e,.fc-gram-f').each(function() {
                total += parseFloat($(this).val().replace(/,/g, '')) || 0;
            });
            row.find('.fc-gram-total').val(total.toFixed(3));
            calcGrandTotal();
        }

        // ── Calc grand total ─────────────────────────────────────
        function calcGrandTotal() {
            let gt = 0;
            $('.fc-gram-total').each(function() {
                gt += parseFloat($(this).val()) || 0;
            });
            $('#input-grand-total-gram').val(gt.toFixed(3));
        }

        // ── Submit loading ───────────────────────────────────────
        $('#form-pre-process').on('submit', function() {
            $('#btn-save').html('<span class="spinner-border spinner-border-sm me-1"></span> Menyimpan...').prop(
                'disabled', true);
        });

        // ── Delete record ────────────────────────────────────────
        function confirmDelete(id) {
            if (!confirm('Yakin ingin menghapus data ini?')) return;
            const form = document.getElementById('form-delete');
            form.action = "{{ url('PreProcessTransaction') }}/" + id;
            form.submit();
        }

        // ── Mobile search ────────────────────────────────────────
        document.getElementById('input-mobile-search')?.addEventListener('input', function() {
            const q = this.value.toLowerCase();
            document.querySelectorAll('#mobile-card-list .preproses-card').forEach(function(card) {
                card.style.display = card.dataset.search.includes(q) ? '' : 'none';
            });
        });
    </script>
@endsection
