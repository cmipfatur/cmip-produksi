<nav class="navbar navbar-expand-lg bg-white border-bottom px-3" style="position:sticky;top:0;z-index:1000;">

    {{-- BRAND --}}
    <a class="navbar-brand d-flex align-items-center gap-1" href="#">
        <img src="{{ asset('images/Logo_enhanced.png') }}" alt="Logo" height="32" style="object-fit:contain;">
        <div class="lh-1">
            <div class="fw-semibold text-dark" style="font-size:13px;">Admin BST</div>
            <small class="text-muted" style="font-size:9px;">Sistem Produksi BST</small>
        </div>
    </a>

    {{-- MOBILE: icon kanan + toggler --}}
    <div class="d-flex d-lg-none align-items-center gap-1 ms-auto">
        <button class="btn btn-sm btn-light border-0 position-relative" style="width:36px;height:36px;">
            <i class="bi bi-bell fs-6 text-secondary"></i>
            <span
                class="position-absolute top-0 start-100 translate-middle p-1 bg-danger rounded-circle border border-white"
                style="width:8px;height:8px;"></span>
        </button>
        <button class="navbar-toggler border-0 p-2 shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="bi bi-list fs-3 text-dark"></i>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="mainNavbar">

        {{-- ========== DESKTOP MENU ========== --}}
        <ul class="navbar-nav mx-auto align-items-lg-center gap-1 d-none d-lg-flex">

            {{-- TRANSAKSI MEGA DROPDOWN --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle fw-semibold px-3" style="color:#f59e0b;font-size:13px;"
                    href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    Transaksi
                </a>
                <div class="dropdown-menu p-3 shadow-sm border rounded-3" style="min-width:760px;">
                    <div class="row g-0">

                        {{-- KOLOM 1: Umum --}}
                        <div class="col border-end pe-3">
                            <p class="text-uppercase text-muted fw-bold mb-2 pb-1 border-bottom"
                                style="font-size:10px;letter-spacing:.06em;">Umum</p>
                            <a href="{{ route('PreProcessTransaction.index') }}"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-list-ul text-muted"></i> Pre Proses
                            </a>
                            <a href=".../Transaksi_BSTAfkir/index_Transaksi_BSTAfkir"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-x-circle text-muted"></i> Afkir
                            </a>
                            <a href=".../Transaksi_BSTBismark/index_Transaksi_BSTBismark"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-droplet text-muted"></i> Bismark
                            </a>
                            <a href=".../Transaksi_BSTBombing/index_Transaksi_BSTBombing"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-droplet text-muted"></i> Bombing
                            </a>
                            <a href=".../Transaksi_BSTBorax/index_Transaksi_BSTBorax"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-list-ul text-muted"></i> Borax
                            </a>
                            <a href=".../Transaksi_BSTHammering/index_Transaksi_BSTHammering"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-hammer text-muted"></i> Hammering
                            </a>
                            <a href=".../Transaksi_BSTHollowing/index_Transaksi_BSTHollowing"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-list-ul text-muted"></i> Hollowing
                            </a>
                        </div>

                        {{-- KOLOM 2: Proses --}}
                        <div class="col border-end px-3">
                            <p class="text-uppercase text-muted fw-bold mb-2 pb-1 border-bottom"
                                style="font-size:10px;letter-spacing:.06em;">Proses</p>
                            <a href=".../Transaksi_BSTGilingKawat/index_Transaksi_BSTGilingKawat"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-list-ul text-muted"></i> Giling Kawat
                            </a>
                            <a href=".../Transaksi_BSTGilingPlat/index_Transaksi_BSTGilingPlat"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-list-ul text-muted"></i> Giling Plat
                            </a>
                            <a href=".../Transaksi_BSTLipat/index_Transaksi_BSTLipat"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-list-ul text-muted"></i> Lipat
                            </a>
                            <a href=".../Transaksi_BSTPatriTepung/index_Transaksi_BSTPatriTepung"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-list-ul text-muted"></i> Patri Tepung
                            </a>
                            <a href=".../Transaksi_BSTPatriTukang/index_Transaksi_BSTPatriTukang"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-person text-muted"></i> Patri Tukang
                            </a>
                            <a href=".../Transaksi_BSTPlasma/index_Transaksi_BSTPlasma"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-list-ul text-muted"></i> Plasma
                            </a>
                            <a href=".../Transaksi_BSTSerut/index_Transaksi_BSTSerut"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-list-ul text-muted"></i> Serut
                            </a>
                            <a href=".../Transaksi_BSTSortir/index_Transaksi_BSTSortir"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-funnel text-muted"></i> Sortir
                            </a>
                        </div>

                        {{-- KOLOM 3: Poles & Finishing --}}
                        <div class="col border-end px-3">
                            <p class="text-uppercase text-muted fw-bold mb-2 pb-1 border-bottom"
                                style="font-size:10px;letter-spacing:.06em;">Poles & Finishing</p>
                            <a href=".../Transaksi_BSTPolesGotri/index_Transaksi_BSTPolesGotri"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-brush text-muted"></i> Poles Gotri
                            </a>
                            <a href=".../Transaksi_BSTPolesKeramik/index_Transaksi_BSTPolesKeramik"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-brush text-muted"></i> Poles Keramik
                            </a>
                            <a href=".../Transaksi_BSTPolesPasir/index_Transaksi_BSTPolesPasir"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-brush text-muted"></i> Poles Pasir
                            </a>
                            <a href=".../Transaksi_BSTUltra/index_Transaksi_BSTUltra"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-stars text-muted"></i> Ultra
                            </a>
                            <a href=".../Transaksi_BSTChrome/index_Transaksi_BSTChrome"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-list-ul text-muted"></i> Chrome
                            </a>
                            <a href=".../Transaksi_BSTOven/index_Transaksi_BSTOven"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-fire text-muted"></i> Oven
                            </a>
                            <a href=".../Transaksi_BSTISP/index_Transaksi_BSTISP"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-list-ul text-muted"></i> ISP
                            </a>
                            <a href=".../Transaksi_BSTCukitCNC/index_Transaksi_BSTCukitCNC"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-list-ul text-muted"></i> Cukit CNC
                            </a>
                            <a href=".../Transaksi_BSTIceCutting/index_Transaksi_BSTIceCutting"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-snow text-muted"></i> Ice Cutting
                            </a>
                            <a href=".../Transaksi_BSTRA/index_Transaksi_BSTRA"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-list-ul text-muted"></i> RA
                            </a>
                        </div>

                        {{-- KOLOM 4: RK + Lainnya --}}
                        <div class="col ps-3">
                            <p class="text-uppercase text-muted fw-bold mb-2 pb-1 border-bottom"
                                style="font-size:10px;letter-spacing:.06em;">RK</p>
                            <a href=".../Transaksi_RKBola/index_Transaksi_RKBola"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-circle text-muted"></i> RK Bola
                            </a>
                            <a href=".../Transaksi_RKCor/index_Transaksi_RKCor"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-circle text-muted"></i> RK Cor
                            </a>
                            <a href=".../Transaksi_RKGiling/index_Transaksi_RKGiling"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-gear text-muted"></i> RK Giling
                            </a>
                            <a href=".../Transaksi_RKHollow/index_Transaksi_RKHollow"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-square text-muted"></i> RK Hollow
                            </a>
                            <a href=".../Transaksi_RKPipa/index_Transaksi_RKPipa"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-dash-lg text-muted"></i> RK Pipa
                            </a>
                            <a href=".../Transaksi_RKStamping/index_Transaksi_RKStamping"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-circle text-muted"></i> RK Stamping
                            </a>
                            <a href=".../Transaksi_RKTarik/index_Transaksi_RKTarik"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-arrow-right text-muted"></i> RK Tarik
                            </a>

                            <p class="text-uppercase text-muted fw-bold mb-2 pb-1 border-bottom mt-2"
                                style="font-size:10px;letter-spacing:.06em;">Lainnya</p>
                            <a href=".../Transaksi_BSTRajut/index_Transaksi_BSTRajut"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-list-ul text-muted"></i> Rajut
                            </a>
                            <a href=".../Transaksi_BSTTarikKawat/index_Transaksi_BSTTarikKawat"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-list-ul text-muted"></i> Tarik Kawat
                            </a>
                            <a href=".../Transaksi_BSTBPP/index_Transaksi_BSTBPP"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                                style="font-size:12px;">
                                <i class="bi bi-list-ul text-muted"></i> BPP
                            </a>
                        </div>

                    </div>
                </div>
            </li>

            {{-- LAPORAN MEGA DROPDOWN --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle fw-semibold px-3 text-secondary" href="#"
                    style="font-size:13px;" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    Laporan
                </a>
                <div class="dropdown-menu shadow-sm border rounded-3 p-3" style="min-width:220px;">
                    <a href=".../Laporan/semua" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                        style="font-size:12px;">
                        <i class="bi bi-list-ul text-muted"></i> Semua Transaksi
                    </a>
                    <a href=".../Laporan/list" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1"
                        style="font-size:12px;">
                        <i class="bi bi-list-ul text-muted"></i> List Transaksi
                    </a>
                    <a href=".../Laporan/belum-setor"
                        class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1" style="font-size:12px;">
                        <i class="bi bi-list-ul text-muted"></i> Belum Setor
                    </a>
                    <a href=".../Laporan/per-tanggal"
                        class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-1" style="font-size:12px;">
                        <i class="bi bi-calendar3 text-muted"></i> Laporan Per Tanggal
                    </a>
                </div>
            </li>

        </ul>

        {{-- DESKTOP RIGHT --}}
        <div class="d-none d-lg-flex align-items-center gap-2 ms-auto">
            <div class="input-group input-group-sm" style="max-width:220px;">
                <span class="input-group-text bg-light border-end-0">
                    <i class="bi bi-search text-muted"></i>
                </span>
                <input type="text" class="form-control bg-light border-start-0"
                    placeholder="Cari menu, modul, atau data..." style="font-size:12px;">
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
                    <div class="fw-semibold text-dark" style="font-size:13px;">Admin BST</div>
                    <small class="text-muted" style="font-size:11px;">Administrator</small>
                </div>
            </div>
        </div>

        {{-- ========== MOBILE DRAWER ========== --}}
        <div class="d-lg-none border-top mt-2">

            {{-- SEARCH --}}
            <div class="px-1 py-2">
                <div class="input-group input-group-sm">
                    <span class="input-group-text bg-light border-end-0">
                        <i class="bi bi-search text-muted"></i>
                    </span>
                    <input type="text" class="form-control bg-light border-start-0"
                        placeholder="Cari menu, modul, atau data..." style="font-size:13px;">
                </div>
            </div>

            <ul class="list-unstyled mb-0 pb-2">

                <li class="px-1 pt-1 pb-1">
                    <small class="text-uppercase text-muted fw-bold px-2"
                        style="font-size:10px;letter-spacing:.06em;">Menu</small>
                </li>

                {{-- TRANSAKSI MOBILE --}}
                <li>
                    <a class="d-flex align-items-center gap-3 px-2 py-2 rounded-2 text-decoration-none fw-medium"
                        style="font-size:14px;color:#f59e0b;background:#fff7ed;" data-bs-toggle="collapse"
                        href="#mobileTransaksiSub" aria-expanded="false">
                        <i class="bi bi-receipt" style="width:20px;color:#f59e0b;"></i> Transaksi
                        <i class="bi bi-chevron-down ms-auto bst-chev"
                            style="font-size:12px;color:#f59e0b;transition:transform .2s;"></i>
                    </a>
                    <div class="collapse" id="mobileTransaksiSub">
                        <div class="ps-3 py-1 bg-light">

                            {{-- UMUM --}}
                            <small class="d-block px-2 pt-2 pb-1 text-uppercase text-muted fw-bold"
                                style="font-size:10px;letter-spacing:.05em;">Umum</small>
                            <a href="{{ route('PreProcessTransaction.index') }}"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-list-ul"></i> Pre Proses
                            </a>
                            <a href=".../Transaksi_BSTAfkir/index_Transaksi_BSTAfkir"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-x-circle"></i> Afkir
                            </a>
                            <a href=".../Transaksi_BSTBismark/index_Transaksi_BSTBismark"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-droplet"></i> Bismark
                            </a>
                            <a href=".../Transaksi_BSTBombing/index_Transaksi_BSTBombing"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-droplet"></i> Bombing
                            </a>
                            <a href=".../Transaksi_BSTBorax/index_Transaksi_BSTBorax"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-list-ul"></i> Borax
                            </a>
                            <a href=".../Transaksi_BSTHammering/index_Transaksi_BSTHammering"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-hammer"></i> Hammering
                            </a>
                            <a href=".../Transaksi_BSTHollowing/index_Transaksi_BSTHollowing"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-list-ul"></i> Hollowing
                            </a>

                            <hr class="my-1 mx-2">

                            {{-- PROSES --}}
                            <small class="d-block px-2 pt-1 pb-1 text-uppercase text-muted fw-bold"
                                style="font-size:10px;letter-spacing:.05em;">Proses</small>
                            <a href=".../Transaksi_BSTGilingKawat/index_Transaksi_BSTGilingKawat"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-list-ul"></i> Giling Kawat
                            </a>
                            <a href=".../Transaksi_BSTGilingPlat/index_Transaksi_BSTGilingPlat"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-list-ul"></i> Giling Plat
                            </a>
                            <a href=".../Transaksi_BSTLipat/index_Transaksi_BSTLipat"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-list-ul"></i> Lipat
                            </a>
                            <a href=".../Transaksi_BSTPatriTepung/index_Transaksi_BSTPatriTepung"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-list-ul"></i> Patri Tepung
                            </a>
                            <a href=".../Transaksi_BSTPatriTukang/index_Transaksi_BSTPatriTukang"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-person"></i> Patri Tukang
                            </a>
                            <a href=".../Transaksi_BSTPlasma/index_Transaksi_BSTPlasma"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-list-ul"></i> Plasma
                            </a>
                            <a href=".../Transaksi_BSTSerut/index_Transaksi_BSTSerut"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-list-ul"></i> Serut
                            </a>
                            <a href=".../Transaksi_BSTSortir/index_Transaksi_BSTSortir"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-funnel"></i> Sortir
                            </a>

                            <hr class="my-1 mx-2">

                            {{-- POLES & FINISHING --}}
                            <small class="d-block px-2 pt-1 pb-1 text-uppercase text-muted fw-bold"
                                style="font-size:10px;letter-spacing:.05em;">Poles & Finishing</small>
                            <a href=".../Transaksi_BSTPolesGotri/index_Transaksi_BSTPolesGotri"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-brush"></i> Poles Gotri
                            </a>
                            <a href=".../Transaksi_BSTPolesKeramik/index_Transaksi_BSTPolesKeramik"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-brush"></i> Poles Keramik
                            </a>
                            <a href=".../Transaksi_BSTPolesPasir/index_Transaksi_BSTPolesPasir"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-brush"></i> Poles Pasir
                            </a>
                            <a href=".../Transaksi_BSTUltra/index_Transaksi_BSTUltra"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-stars"></i> Ultra
                            </a>
                            <a href=".../Transaksi_BSTChrome/index_Transaksi_BSTChrome"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-list-ul"></i> Chrome
                            </a>
                            <a href=".../Transaksi_BSTOven/index_Transaksi_BSTOven"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-fire"></i> Oven
                            </a>
                            <a href=".../Transaksi_BSTISP/index_Transaksi_BSTISP"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-list-ul"></i> ISP
                            </a>
                            <a href=".../Transaksi_BSTCukitCNC/index_Transaksi_BSTCukitCNC"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-list-ul"></i> Cukit CNC
                            </a>
                            <a href=".../Transaksi_BSTIceCutting/index_Transaksi_BSTIceCutting"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-snow"></i> Ice Cutting
                            </a>
                            <a href=".../Transaksi_BSTRA/index_Transaksi_BSTRA"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-list-ul"></i> RA
                            </a>

                            <hr class="my-1 mx-2">

                            {{-- RK --}}
                            <small class="d-block px-2 pt-1 pb-1 text-uppercase text-muted fw-bold"
                                style="font-size:10px;letter-spacing:.05em;">RK</small>
                            <a href=".../Transaksi_RKBola/index_Transaksi_RKBola"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-circle"></i> RK Bola
                            </a>
                            <a href=".../Transaksi_RKCor/index_Transaksi_RKCor"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-circle"></i> RK Cor
                            </a>
                            <a href=".../Transaksi_RKGiling/index_Transaksi_RKGiling"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-gear"></i> RK Giling
                            </a>
                            <a href=".../Transaksi_RKHollow/index_Transaksi_RKHollow"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-square"></i> RK Hollow
                            </a>
                            <a href=".../Transaksi_RKPipa/index_Transaksi_RKPipa"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-dash-lg"></i> RK Pipa
                            </a>
                            <a href=".../Transaksi_RKStamping/index_Transaksi_RKStamping"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-circle"></i> RK Stamping
                            </a>
                            <a href=".../Transaksi_RKTarik/index_Transaksi_RKTarik"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-arrow-right"></i> RK Tarik
                            </a>

                            <hr class="my-1 mx-2">

                            {{-- LAINNYA --}}
                            <small class="d-block px-2 pt-1 pb-1 text-uppercase text-muted fw-bold"
                                style="font-size:10px;letter-spacing:.05em;">Lainnya</small>
                            <a href=".../Transaksi_BSTRajut/index_Transaksi_BSTRajut"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-list-ul"></i> Rajut
                            </a>
                            <a href=".../Transaksi_BSTTarikKawat/index_Transaksi_BSTTarikKawat"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-list-ul"></i> Tarik Kawat
                            </a>
                            <a href=".../Transaksi_BSTBPP/index_Transaksi_BSTBPP"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-list-ul"></i> BPP
                            </a>

                            <hr class="my-1 mx-2">

                            {{-- QUICK ACCESS --}}
                            <small class="d-block px-2 pt-1 pb-1 text-uppercase text-muted fw-bold"
                                style="font-size:10px;letter-spacing:.05em;">Quick Access</small>
                            <div class="d-flex flex-wrap gap-2 px-2 pb-3 pt-1">
                                <a href="{{ route('PreProcessTransaction.index') }}"
                                    class="badge rounded-pill text-decoration-none d-flex align-items-center gap-1"
                                    style="background:#fff7ed;color:#92400e;border:0.5px solid #fde68a;padding:5px 10px;font-size:12px;">
                                    <i class="bi bi-star-fill text-warning" style="font-size:11px;"></i> Pre
                                    Proses
                                </a>
                                <a href=".../Transaksi_BSTSortir/index_Transaksi_BSTSortir"
                                    class="badge rounded-pill text-decoration-none d-flex align-items-center gap-1"
                                    style="background:#fff7ed;color:#92400e;border:0.5px solid #fde68a;padding:5px 10px;font-size:12px;">
                                    <i class="bi bi-star-fill text-warning" style="font-size:11px;"></i> Sortir
                                </a>
                                <a href=".../Transaksi_BSTPolesGotri/index_Transaksi_BSTPolesGotri"
                                    class="badge rounded-pill text-decoration-none d-flex align-items-center gap-1"
                                    style="background:#fff7ed;color:#92400e;border:0.5px solid #fde68a;padding:5px 10px;font-size:12px;">
                                    <i class="bi bi-star-fill text-warning" style="font-size:11px;"></i> Poles
                                    Gotri
                                </a>
                                <a href=".../Transaksi_BSTOven/index_Transaksi_BSTOven"
                                    class="badge rounded-pill text-decoration-none d-flex align-items-center gap-1"
                                    style="background:#fff7ed;color:#92400e;border:0.5px solid #fde68a;padding:5px 10px;font-size:12px;">
                                    <i class="bi bi-star-fill text-warning" style="font-size:11px;"></i> Oven
                                </a>
                                <a href=".../Transaksi_RKCor/index_Transaksi_RKCor"
                                    class="badge rounded-pill text-decoration-none d-flex align-items-center gap-1"
                                    style="background:#fff7ed;color:#92400e;border:0.5px solid #fde68a;padding:5px 10px;font-size:12px;">
                                    <i class="bi bi-star-fill text-warning" style="font-size:11px;"></i> RK Cor
                                </a>
                            </div>

                        </div>
                    </div>
                </li>

                {{-- LAPORAN MOBILE --}}
                <li>
                    <a class="d-flex align-items-center gap-3 px-2 py-2 rounded-2 text-decoration-none text-dark"
                        style="font-size:14px;" data-bs-toggle="collapse" href="#mobileLaporanSub"
                        aria-expanded="false">
                        <i class="bi bi-file-bar-graph text-muted" style="width:20px;"></i> Laporan
                        <i class="bi bi-chevron-down ms-auto bst-chev text-muted"
                            style="font-size:12px;transition:transform .2s;"></i>
                    </a>
                    <div class="collapse" id="mobileLaporanSub">
                        <div class="ps-3 py-1 bg-light">
                            <a href=".../Laporan/semua"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-list-ul"></i> Semua Transaksi
                            </a>
                            <a href=".../Laporan/list"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-list-ul"></i> List Transaksi
                            </a>
                            <a href=".../Laporan/belum-setor"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-list-ul"></i> Belum Setor
                            </a>
                            <a href=".../Laporan/per-tanggal"
                                class="d-flex align-items-center gap-2 px-2 py-2 rounded-2 text-decoration-none text-secondary"
                                style="font-size:13px;">
                                <i class="bi bi-calendar3"></i> Laporan Per Tanggal
                            </a>
                        </div>
                    </div>
                </li>

            </ul>

            <hr class="mx-2 my-1">

            {{-- USER MOBILE --}}
            <div class="d-flex align-items-center gap-3 px-2 py-3">
                <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center text-white fw-semibold flex-shrink-0"
                    style="width:36px;height:36px;font-size:12px;">AC</div>
                <div class="lh-sm flex-grow-1">
                    <div class="fw-semibold text-dark" style="font-size:13px;">Admin BST</div>
                    <small class="text-muted">Administrator</small>
                </div>
                <i class="bi bi-box-arrow-right text-muted fs-5"></i>
            </div>

        </div>
        {{-- ========== END MOBILE DRAWER ========== --}}

    </div>
</nav>
</nav>

{{-- PUT MARQUEE HERE --}}
<div class="marquee-container"
    style="background-color: #dc2626; color: white; padding: 6px 0; overflow: hidden; white-space: nowrap;">
    <div class="marquee-content">
        🏀 RK Bola: 67 Butuh Lanjut &nbsp;&nbsp;|&nbsp;&nbsp;
        🧶 Rajut: 60 Butuh Lanjut &nbsp;&nbsp;|&nbsp;&nbsp;
        🔨 Hammering: 20 Butuh Lanjut &nbsp;&nbsp;|&nbsp;&nbsp;
        🏺 Poles Keramik: 75 Butuh Lanjut &nbsp;&nbsp;|&nbsp;&nbsp;
        ✨ Finishing Chrome: 21 Butuh Lanjut &nbsp;&nbsp;|&nbsp;&nbsp;
        ⚙️ Serut: 4 Butuh Lanjut &nbsp;&nbsp;|&nbsp;&nbsp;
    </div>
</div>

<style>
    .marquee-container {
        background-color: #dc2626;
        color: white;
        padding: 6px 0;
        overflow: hidden;
        white-space: nowrap;
        position: relative;
    }

    .marquee-content {
        display: inline-block;
        white-space: nowrap;
        animation: marquee 20s linear infinite;
        padding-left: 100%;
    }

    @keyframes marquee {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    @media (max-width: 768px) {
        .marquee-content {
            animation-duration: 12s;
        }

        .marquee-container {
            padding: 4px 0;
            font-size: 11px;
        }
    }

    /* Hover pause optional */
    .marquee-container:hover .marquee-content {
        animation-play-state: paused;
    }
</style>

{{-- REST OF YOUR CONTENT --}}

{{-- Script: rotasi chevron saat accordion buka/tutup --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const collapses = document.querySelectorAll('.collapse');
        collapses.forEach(function(el) {
            el.addEventListener('show.bs.collapse', function() {
                const trigger = document.querySelector('[href="#' + el.id + '"]');
                if (trigger) {
                    const chev = trigger.querySelector('.bst-chev');
                    if (chev) chev.style.transform = 'rotate(180deg)';
                }
            });
            el.addEventListener('hide.bs.collapse', function() {
                const trigger = document.querySelector('[href="#' + el.id + '"]');
                if (trigger) {
                    const chev = trigger.querySelector('.bst-chev');
                    if (chev) chev.style.transform = 'rotate(0deg)';
                }
            });
        });
    });
</script>
