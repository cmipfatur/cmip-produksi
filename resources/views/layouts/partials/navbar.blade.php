<nav class="navbar navbar-expand-lg bg-white border-bottom px-3" style="height:56px;">

    {{-- BRAND --}}
    <a class="navbar-brand d-flex align-items-center gap-2" href="#">
        <img src="{{ asset('images/Logo_enhanced.png') }}" alt="Logo" height="36" style="object-fit:contain;">
        <div class="d-none d-sm-flex flex-column lh-sm">
            <span class="fw-bold text-dark" style="font-size:13px;">Admin COR</span>
            <small class="text-muted" style="font-size:10px;">Sistem Produksi Cor</small>
        </div>
    </a>

    {{-- TOGGLER --}}
    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTop">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTop">

        {{-- LEFT MENU --}}
        <ul class="navbar-nav me-auto align-items-lg-center gap-1">

            <li class="nav-item">
                <a class="nav-link text-secondary px-3" style="font-size:13px;" href="#">Master</a>
            </li>

            {{-- PRODUKSI DROPDOWN --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle fw-semibold px-3" style="color:#f59e0b;font-size:13px;"
                    href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    Produksi
                </a>
                <div class="dropdown-menu p-3 shadow-sm border rounded-3" style="min-width:680px;">
                    <div class="row g-0">
                        {{-- SUSUT --}}
                        <div class="col border-end pe-3">
                            <p class="text-uppercase text-muted fw-bold mb-2 pb-1 border-bottom"
                                style="font-size:10px;letter-spacing:.06em;">Susut</p>
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;">
                                <i class="bi bi-list-check text-muted"></i> Susut Per Proses
                            </a>
                            <a href="#"
                                class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2 active"
                                style="font-size:13px;background:#fff7ed;color:#f59e0b;">
                                <i class="bi bi-scissors text-warning"></i> Potong Pohon
                            </a>
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;">
                                <i class="bi bi-file-text text-muted"></i> Per Cor
                            </a>
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;">
                                <i class="bi bi-exclamation-circle text-muted"></i> Susut Global
                            </a>
                        </div>
                        {{-- TRANSAKSI PRODUKSI --}}
                        <div class="col border-end px-3">
                            <p class="text-uppercase text-muted fw-bold mb-2 pb-1 border-bottom"
                                style="font-size:10px;letter-spacing:.06em;">Transaksi Produksi</p>
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;">
                                <i class="bi bi-tools text-muted"></i> Kikir
                            </a>
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;">
                                <i class="bi bi-brush text-muted"></i> Kikir Brush
                            </a>
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;">
                                <i class="bi bi-hammer text-muted"></i> Kikir Tukang
                            </a>
                        </div>
                        {{-- LAINNYA --}}
                        <div class="col border-end px-3">
                            <p class="text-uppercase text-muted fw-bold mb-2 pb-1 border-bottom"
                                style="font-size:10px;letter-spacing:.06em;">Lainnya</p>
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;">
                                <i class="bi bi-scissors text-muted"></i> Susut Cukit
                            </a>
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;">
                                <i class="bi bi-arrow-repeat text-muted"></i> Afkir Reparasi
                            </a>
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;">
                                <i class="bi bi-image text-muted"></i> Gambar
                            </a>
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;">
                                <i class="bi bi-layers text-muted"></i> WIP Cor
                            </a>
                        </div>
                        {{-- QUICK ACCESS --}}
                        <div class="col ps-3" style="min-width:160px;">
                            <p class="text-uppercase text-muted fw-bold mb-2 pb-1 border-bottom"
                                style="font-size:10px;letter-spacing:.06em;">Quick Access</p>
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;">
                                <i class="bi bi-star-fill text-warning" style="font-size:12px;"></i> Potong Pohon
                            </a>
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;">
                                <i class="bi bi-star-fill text-warning" style="font-size:12px;"></i> Per Cor
                            </a>
                            <a href="#" class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2"
                                style="font-size:13px;">
                                <i class="bi bi-star-fill text-warning" style="font-size:12px;"></i> WIP Cor
                            </a>
                            <div class="border-top mt-2 pt-2">
                                <a href="#"
                                    class="dropdown-item rounded-2 d-flex align-items-center gap-2 py-2 text-muted"
                                    style="font-size:12px;">
                                    <i class="bi bi-gear" style="font-size:13px;"></i> Kelola Favorit
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link text-secondary px-3" style="font-size:13px;" href="#">Monitoring</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-secondary px-3" style="font-size:13px;" href="#">Laporan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-secondary px-3" style="font-size:13px;" href="#">Pengajuan Revisi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-secondary px-3" style="font-size:13px;" href="#">Settings</a>
            </li>

        </ul>

        {{-- RIGHT SIDE --}}
        <div class="d-flex align-items-center gap-2 ms-lg-auto mt-3 mt-lg-0">

            {{-- SEARCH --}}
            <div class="input-group input-group-sm" style="width:220px;">
                <span class="input-group-text bg-light border-end-0 text-muted">
                    <i class="bi bi-search"></i>
                </span>
                <input type="text" class="form-control bg-light border-start-0 border-end-0"
                    placeholder="Cari menu, modul, atau data..." style="font-size:12px;">
                <span class="input-group-text bg-light border-start-0">
                    <kbd class="bg-white border rounded px-1" style="font-size:10px;">Ctrl K</kbd>
                </span>
            </div>

            {{-- STAR --}}
            <button class="btn btn-sm btn-light border-0 text-muted">
                <i class="bi bi-star fs-6"></i>
            </button>

            {{-- NOTIFICATION --}}
            <button class="btn btn-sm btn-light border-0 text-muted position-relative">
                <i class="bi bi-bell fs-6"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                    style="font-size:9px;">5</span>
            </button>

            {{-- USER --}}
            <div class="d-flex align-items-center gap-2 px-2 py-1 rounded-2 cursor-pointer" style="cursor:pointer;"
                onmouseover="this.style.background='#f9fafb'" onmouseout="this.style.background=''">
                <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center text-white fw-semibold"
                    style="width:32px;height:32px;font-size:12px;">AC</div>
                <div class="d-none d-md-block lh-sm">
                    <div class="fw-semibold text-dark" style="font-size:13px;">Admin Cor</div>
                    <small class="text-muted" style="font-size:11px;">Administrator</small>
                </div>
            </div>

        </div>

    </div>
</nav>
