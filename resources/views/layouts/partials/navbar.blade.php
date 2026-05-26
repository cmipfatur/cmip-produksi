<nav class="navbar navbar-expand-lg bg-white border-bottom px-3" style="position:sticky;top:0;z-index:1000;">

    {{-- BRAND --}}
    <a class="navbar-brand d-flex align-items-center gap-1" href="/">
        <img src="{{ asset('images/Logo_enhanced.png') }}" alt="Logo" height="32" style="object-fit:contain;">
        <div class="lh-1">
            <div class="fw-semibold text-dark" style="font-size:13px;">Admin Cor</div>
            <small class="text-muted" style="font-size:9px; display:block; margin-top:1px;">Sistem Admin Cor</small>
        </div>
    </a>

    {{-- MOBILE: icon kanan + toggler --}}
    <div class="d-flex d-lg-none align-items-center gap-2 ms-auto">
        <button class="btn btn-sm btn-light border-0 position-relative rounded-circle d-flex justify-content-center align-items-center" style="width:36px;height:36px;">
            <i class="bi bi-bell fs-5 text-secondary"></i>
            <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger rounded-circle border border-white" style="width:10px;height:10px;"></span>
        </button>

        <button class="navbar-toggler border-0 p-2 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-expanded="false">
            <i class="bi bi-list fs-2 text-dark"></i>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="mainNavbar">

        {{-- ========== DESKTOP MENU ========== --}}
        <ul class="navbar-nav me-auto align-items-lg-center gap-1 d-none d-lg-flex">

            {{-- PRODUKSI MEGA DROPDOWN --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-secondary px-3 fw-semibold px-3" style="font-size:13px;"
                    href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    Master
                </a>
                <div class="dropdown-menu p-3 shadow-sm border rounded-3" style="min-width:200px;">
                    <div class="row g-0">
                        {{-- <div class="col border-end pe-3"> --}}
                            <p class="text-uppercase text-muted fw-bold mb-2 pb-1 border-bottom"
                                style="font-size:10px;letter-spacing:.06em;">Data Master</p>
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;">
                                <i class="bi bi-list-check"></i> Produk
                            </a>
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;">
                                <i class="bi bi-list-check text-muted"></i> Proses
                            </a>
                        {{-- </div> --}}
                    </div>
                </div>
            </li>

            {{-- TRANSAKSI MEGA DROPDOWN --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle fw-semibold px-3" style="color:#f59e0b;font-size:13px;"
                    href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    Transaksi
                </a>
                <div class="dropdown-menu p-3 shadow-sm border rounded-3" style="min-width:680px;">
                    <div class="row g-0">
                        <div class="col border-end pe-3">
                            <p class="text-uppercase text-muted fw-bold mb-2 pb-1 border-bottom"
                                style="font-size:10px;letter-spacing:.06em;">Bagi Bahan Cor</p>
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;background:#fff7ed;color:#f59e0b;">
                                <i class="bi bi-scissors"></i> Bagi Bahan Cor
                            </a>
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;">
                                <i class="bi bi-list-check text-muted"></i> Bagi Bahan Cor BB
                            </a>
                        </div>
                        <div class="col border-end px-3">
                            <p class="text-uppercase text-muted fw-bold mb-2 pb-1 border-bottom"
                                style="font-size:10px;letter-spacing:.06em;">Potong Pohon</p>
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;">
                                <i class="bi bi-scissors text-muted"></i> Potong Pohon
                            </a>
                            <p class="text-uppercase text-muted fw-bold mb-2 pb-1 border-bottom"
                                style="font-size:10px;letter-spacing:.06em;">Proses</p>
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;">
                                <i class="bi bi-layers text-muted" style="font-size:12px;"></i> Besik
                            </a>
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;">
                                <i class="bi bi-layers text-muted" style="font-size:12px;"></i> Bombing
                            </a>
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;">
                                <i class="bi bi-layers text-muted" style="font-size:12px;"></i> Bor
                            </a>
                        </div>
                        <div class="col px-3">
                            <p class="text-uppercase text-muted fw-bold mb-2 pb-1 border-bottom"
                                style="font-size:10px;letter-spacing:.06em;">Lainnya</p>
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;">
                                <i class="bi bi-wallet text-muted"></i> Bayar Susut Cor
                            </a>
                        </div>
                        {{-- <div class="col ps-3" style="min-width:160px;"> --}}
                            {{-- <div class="border-top mt-2 pt-2">
                                <a href="#"
                                    class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2 text-muted"
                                    style="font-size:12px;">
                                    <i class="bi bi-gear" style="font-size:13px;"></i> Kelola Favorit
                                </a>
                            </div> --}}
                        {{-- </div> --}}
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-secondary px-3 fw-semibold px-3" style="font-size:13px;"
                    href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    Pengajuan Revisi
                </a>
                <div class="dropdown-menu p-3 shadow-sm border rounded-3" style="min-width:200px;">
                    <div class="row g-0">
                        {{-- <div class="col border-end pe-3"> --}}
                            <p class="text-uppercase text-muted fw-bold mb-2 pb-1 border-bottom"
                                style="font-size:10px;letter-spacing:.06em;">Revisi</p>
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;">
                                <i class="bi bi-list-check"></i> Kadar KIK
                            </a>
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;">
                                <i class="bi bi-list-check text-muted"></i> Produk TOK
                            </a>
                        {{-- </div> --}}
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-secondary px-3 fw-semibold px-3" style="font-size:13px;"
                    href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    Laporan
                </a>
                <div class="dropdown-menu p-3 shadow-sm border rounded-3" style="min-width:680px;">
                    <div class="row g-0">
                        <div class="col border-end pe-3">
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;">
                                <i class="bi bi-globe"></i> Sisa Susut Global
                            </a>
                            <p class="text-uppercase text-muted fw-bold mb-2 pb-1 border-bottom"
                                style="font-size:10px;letter-spacing:.06em;">Potong Pohon</p>
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;">
                                <i class="bi bi-scissors"></i> Per Cor
                            </a>
                            <p class="text-uppercase text-muted fw-bold mb-2 pb-1 border-bottom"
                                style="font-size:10px;letter-spacing:.06em;">Susut Per Proses</p>
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;">
                                <i class="bi bi-scissors"></i> Bombing
                            </a>
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;">
                                <i class="bi bi-list-check text-muted"></i> Brush Cat
                            </a>
                        </div>
                        <div class="col border-end px-3">
                            <p class="text-uppercase text-muted fw-bold mb-2 pb-1 border-bottom"
                                style="font-size:10px;letter-spacing:.06em;">Monitor</p>
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;">
                                <i class="bi bi-layers text-muted" style="font-size:12px;"></i> Status Cor Per KIK
                            </a>
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;">
                                <i class="bi bi-layers text-muted" style="font-size:12px;"></i> Status Cor Per KIK BB
                            </a>
                        </div>
                        <div class="col px-3">
                            <p class="text-uppercase text-muted fw-bold mb-2 pb-1 border-bottom"
                                style="font-size:10px;letter-spacing:.06em;">Lainnya</p>
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;">
                                <i class="bi bi-wallet text-muted"></i> Susut Cukir
                            </a>
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;">
                                <i class="bi bi-wallet text-muted"></i> Afkir Reparasi
                            </a>
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;">
                                <i class="bi bi-wallet text-muted"></i> WIP Cor
                            </a>
                        </div>
                        {{-- <div class="col ps-3" style="min-width:160px;"> --}}
                            {{-- <div class="border-top mt-2 pt-2">
                                <a href="#"
                                    class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2 text-muted"
                                    style="font-size:12px;">
                                    <i class="bi bi-gear" style="font-size:13px;"></i> Kelola Favorit
                                </a>
                            </div> --}}
                        {{-- </div> --}}
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link text-secondary px-3" style="font-size:13px;" href="#">Pengaturan Periode</a>
            </li>
        </ul>

        {{-- DESKTOP RIGHT --}}
        <div class="d-none d-lg-flex align-items-center gap-2 ms-auto">
            <div class="input-group input-group-sm" style="width:220px;">
                <span class="input-group-text bg-light border-end-0 text-muted"><i class="bi bi-search"></i></span>
                <input type="text" class="form-control bg-light border-start-0 border-end-0"
                    placeholder="Cari menu, modul, atau data..." style="font-size:12px;">
                {{-- <span class="input-group-text bg-light border-start-0">
                    <kbd class="bg-white border rounded px-1" style="font-size:10px;">Ctrl K</kbd>
                </span> --}}
            </div>
            <button class="btn btn-sm btn-light border-0 text-muted position-relative">
                <i class="bi bi-bell fs-6"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                    style="font-size:9px;">5</span>
            </button>
            <div class="d-flex align-items-center gap-2 px-2 py-1 rounded-2" style="cursor:pointer;">
                <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center text-white fw-semibold"
                    style="width:32px;height:32px;font-size:12px;">AC</div>
                <div class="lh-sm">
                    <div class="fw-semibold text-dark" style="font-size:13px;">Admin Cor</div>
                    <small class="text-muted" style="font-size:11px;">Administrator</small>
                </div>
            </div>
        </div>

        {{-- ========== MOBILE DRAWER ========== --}}
        <div class="d-lg-none border-top mt-2">

            {{-- SEARCH --}}
            <div class="px-1 py-2">
                <div class="input-group input-group-sm">
                    <span class="input-group-text bg-light border-end-0"><i
                            class="bi bi-search text-muted"></i></span>
                    <input type="text" class="form-control bg-light border-start-0"
                        placeholder="Cari menu, modul, atau data..." style="font-size:13px;">
                </div>
            </div>

            <ul class="list-unstyled mb-0 pb-2">
                <li class="px-1 pt-1 pb-1">
                    <small class="text-uppercase text-muted fw-bold px-2" style="font-size:10px;letter-spacing:.06em;">Menu Utama</small>
                </li>

                {{-- MASTER (Mobile Dropdown/Collapse) --}}
                <li>
                    <a class="d-flex align-items-center gap-3 px-2 py-2 rounded-2 text-dark text-decoration-none fw-medium"
                        style="font-size:14px;" data-bs-toggle="collapse" href="#mobileMasterSub" aria-expanded="false">
                        <i class="bi bi-box text-muted" style="width:20px;"></i> Master
                        <i class="bi bi-chevron-down ms-auto text-muted" style="font-size:12px;"></i>
                    </a>
                    <div class="collapse" id="mobileMasterSub">
                        <div class="ps-4 py-1 border-start ms-3 mt-1 mb-2 border-2 text-secondary">
                            <small class="d-block px-2 pt-1 pb-1 text-uppercase text-muted fw-bold" style="font-size:10px;letter-spacing:.05em;">Data Master</small>
                            <a href="#" class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary" style="font-size:13px;">
                                <i class="bi bi-list-check"></i> Produk
                            </a>
                            <a href="#" class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary" style="font-size:13px;">
                                <i class="bi bi-list-check"></i> Proses
                            </a>
                        </div>
                    </div>
                </li>

                {{-- TRANSAKSI (Mobile Dropdown/Collapse - Warna Highlighted) --}}
                <li>
                    <a class="d-flex align-items-center gap-3 px-2 py-2 rounded-2 text-decoration-none fw-medium mt-1"
                        style="font-size:14px;color:#f59e0b;background:#fff7ed;" data-bs-toggle="collapse"
                        href="#mobileTransaksiSub" aria-expanded="false">
                        <i class="bi bi-cart text-warning" style="width:20px;"></i> Transaksi
                        <i class="bi bi-chevron-down ms-auto" style="font-size:12px;color:#f59e0b;"></i>
                    </a>
                    <div class="collapse" id="mobileTransaksiSub">
                        <div class="ps-4 py-1 border-start ms-3 mt-1 mb-2 border-2 border-warning">
                            <small class="d-block px-2 pt-1 pb-1 text-uppercase text-muted fw-bold" style="font-size:10px;letter-spacing:.05em;">Bagi Bahan Cor</small>
                            <a href="#" class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none" style="font-size:13px;background:#fff7ed;color:#f59e0b;font-weight:500;">
                                <i class="bi bi-scissors"></i> Bagi Bahan Cor
                            </a>
                            <a href="#" class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary" style="font-size:13px;">
                                <i class="bi bi-list-check"></i> Bagi Bahan Cor BB
                            </a>

                            <hr class="my-1 mx-2">
                            <small class="d-block px-2 pt-1 pb-1 text-uppercase text-muted fw-bold" style="font-size:10px;letter-spacing:.05em;">Potong Pohon</small>
                            <a href="#" class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary" style="font-size:13px;">
                                <i class="bi bi-scissors"></i> Potong Pohon
                            </a>

                            <hr class="my-1 mx-2">
                            <small class="d-block px-2 pt-1 pb-1 text-uppercase text-muted fw-bold" style="font-size:10px;letter-spacing:.05em;">Proses</small>
                            <a href="#" class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary" style="font-size:13px;">
                                <i class="bi bi-layers"></i> Besik
                            </a>
                            <a href="#" class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary" style="font-size:13px;">
                                <i class="bi bi-layers"></i> Bombing
                            </a>
                            <a href="#" class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary" style="font-size:13px;">
                                <i class="bi bi-layers"></i> Bor
                            </a>

                            <hr class="my-1 mx-2">
                            <small class="d-block px-2 pt-1 pb-1 text-uppercase text-muted fw-bold" style="font-size:10px;letter-spacing:.05em;">Lainnya</small>
                            <a href="#" class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary" style="font-size:13px;">
                                <i class="bi bi-wallet"></i> Bayar Susut Cor
                            </a>
                        </div>
                    </div>
                </li>

                {{-- PENGAJUAN REVISI (Mobile Dropdown/Collapse) --}}
                <li>
                    <a class="d-flex align-items-center gap-3 px-2 py-2 rounded-2 text-dark text-decoration-none fw-medium mt-1"
                        style="font-size:14px;" data-bs-toggle="collapse" href="#mobileRevisiSub" aria-expanded="false">
                        <i class="bi bi-pencil-square text-muted" style="width:20px;"></i> Pengajuan Revisi
                        <i class="bi bi-chevron-down ms-auto text-muted" style="font-size:12px;"></i>
                    </a>
                    <div class="collapse" id="mobileRevisiSub">
                        <div class="ps-4 py-1 border-start ms-3 mt-1 mb-2 border-2 text-secondary">
                            <small class="d-block px-2 pt-1 pb-1 text-uppercase text-muted fw-bold" style="font-size:10px;letter-spacing:.05em;">Revisi</small>
                            <a href="#" class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary" style="font-size:13px;">
                                <i class="bi bi-list-check"></i> Kadar KIK
                            </a>
                            <a href="#" class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary" style="font-size:13px;">
                                <i class="bi bi-list-check"></i> Produk TOK
                            </a>
                        </div>
                    </div>
                </li>

                {{-- LAPORAN (Mobile Dropdown/Collapse) --}}
                <li>
                    <a class="d-flex align-items-center gap-3 px-2 py-2 rounded-2 text-dark text-decoration-none fw-medium mt-1"
                        style="font-size:14px;" data-bs-toggle="collapse" href="#mobileLaporanSub" aria-expanded="false">
                        <i class="bi bi-file-bar-graph text-muted" style="width:20px;"></i> Laporan
                        <i class="bi bi-chevron-down ms-auto text-muted" style="font-size:12px;"></i>
                    </a>
                    <div class="collapse" id="mobileLaporanSub">
                        <div class="ps-4 py-1 border-start ms-3 mt-1 mb-2 border-2 text-secondary">
                            <a href="#" class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary" style="font-size:13px;">
                                <i class="bi bi-globe"></i> Sisa Susut Global
                            </a>

                            <hr class="my-1 mx-2">
                            <small class="d-block px-2 pt-1 pb-1 text-uppercase text-muted fw-bold" style="font-size:10px;letter-spacing:.05em;">Potong Pohon</small>
                            <a href="#" class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary" style="font-size:13px;">
                                <i class="bi bi-scissors"></i> Per Cor
                            </a>

                            <hr class="my-1 mx-2">
                            <small class="d-block px-2 pt-1 pb-1 text-uppercase text-muted fw-bold" style="font-size:10px;letter-spacing:.05em;">Susut Per Proses</small>
                            <a href="#" class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary" style="font-size:13px;">
                                <i class="bi bi-scissors"></i> Bombing
                            </a>
                            <a href="#" class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary" style="font-size:13px;">
                                <i class="bi bi-list-check"></i> Brush Cat
                            </a>

                            <hr class="my-1 mx-2">
                            <small class="d-block px-2 pt-1 pb-1 text-uppercase text-muted fw-bold" style="font-size:10px;letter-spacing:.05em;">Monitor</small>
                            <a href="#" class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary" style="font-size:13px;">
                                <i class="bi bi-layers"></i> Status Cor Per KIK
                            </a>
                            <a href="#" class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary" style="font-size:13px;">
                                <i class="bi bi-layers"></i> Status Cor Per KIK BB
                            </a>

                            <hr class="my-1 mx-2">
                            <small class="d-block px-2 pt-1 pb-1 text-uppercase text-muted fw-bold" style="font-size:10px;letter-spacing:.05em;">Lainnya</small>
                            <a href="#" class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary" style="font-size:13px;">
                                <i class="bi bi-wallet"></i> Susut Cukir
                            </a>
                            <a href="#" class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary" style="font-size:13px;">
                                <i class="bi bi-wallet"></i> Afkir Reparasi
                            </a>
                            <a href="#" class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary" style="font-size:13px;">
                                <i class="bi bi-wallet"></i> WIP Cor
                            </a>
                        </div>
                    </div>
                </li>

                {{-- MENU SATUAN (Tanpa Dropdown) --}}
                <li>
                    <a href="#" class="d-flex align-items-center gap-3 px-2 py-2 rounded-2 text-dark text-decoration-none mt-1" style="font-size:14px;">
                        <i class="bi bi-calendar text-muted" style="width:20px;"></i> Pengaturan Periode
                        <i class="bi bi-chevron-right ms-auto text-muted" style="font-size:12px;"></i>
                    </a>
                </li>

                <li>
                    <a href="#" class="d-flex align-items-center gap-3 px-2 py-2 rounded-2 text-dark text-decoration-none mt-1" style="font-size:14px;">
                        <i class="bi bi-gear text-muted" style="width:20px;"></i> Settings
                        <i class="bi bi-chevron-right ms-auto text-muted" style="font-size:12px;"></i>
                    </a>
                </li>

            </ul>

            <hr class="mx-2 my-1">

            {{-- USER MOBILE --}}
            <div class="d-flex align-items-center gap-3 px-2 py-3">
                <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center text-white fw-semibold flex-shrink-0"
                    style="width:36px;height:36px;font-size:12px;">AC</div>
                <div class="lh-sm flex-grow-1">
                    <div class="fw-semibold text-dark" style="font-size:13px;">Admin Cor</div>
                    <small class="text-muted">Administrator</small>
                </div>
                <i class="bi bi-box-arrow-right text-muted fs-5"></i>
            </div>

        </div>

    </div>
</nav>
