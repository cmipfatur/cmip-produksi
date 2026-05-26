<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Cor - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 0.9rem;
        }

        /* Sidebar Styling */
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            background: #fff;
            border-right: 1px solid #eaeaea;
            z-index: 1000;
        }
        .nav-link {
            color: #555;
            padding: 10px 20px;
            margin: 4px 15px;
            border-radius: 8px;
            font-weight: 500;
        }
        .nav-link:hover, .nav-link.active {
            background-color: #fff9e6;
            color: #d9a01c;
        }

        /* Main Content */
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        /* Topbar */
        .topbar {
            background: #fff;
            border-bottom: 1px solid #eaeaea;
            padding: 10px 25px;
            border-radius: 12px;
            margin-bottom: 20px;
        }

        /* Cards General */
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.03);
        }

        /* Stat Cards */
        .stat-icon {
            width: 45px;
            height: 45px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            color: white;
        }
        .bg-blue { background-color: #4e89ff; }
        .bg-green { background-color: #20c997; }
        .bg-yellow { background-color: #ffc107; }
        .bg-purple { background-color: #845ef7; }

        /* Warning Cards (Bagi Bahan Cor) */
        .warning-card {
            border: 1px solid #ffe6e6;
        }
        .warning-header {
            background-color: #ffb3b3;
            padding: 10px 15px;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
            font-weight: bold;
            color: #333;
        }
        .text-danger-custom {
            color: #e63946;
            font-weight: bold;
        }

        /* Mega Menu Simulation (Produksi) */
        .mega-menu {
            position: absolute;
            top: 60px;
            left: 280px;
            width: 60%;
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            z-index: 1050;
            padding: 20px;
            display: none; /* Ubah ke block via JS jika diperlukan */
        }
    </style>
</head>
<body>

    <div class="sidebar d-flex flex-column">
        <div class="p-4 d-flex align-items-center gap-2">
            <div class="bg-warning text-dark fw-bold rounded-circle d-flex justify-content-center align-items-center" style="width: 35px; height: 35px;">C</div>
            <h5 class="m-0 fw-bold">ADMIN COR</h5>
        </div>
        <ul class="nav flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link active"><i class="bi bi-house-door me-2"></i> Dashboard</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="bi bi-bar-chart me-2"></i> Produksi</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="bi bi-activity me-2"></i> Monitoring</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="bi bi-file-earmark-text me-2"></i> Laporan</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="bi bi-arrow-repeat me-2"></i> Revisi</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="bi bi-hdd-stack me-2"></i> Master</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="bi bi-gear me-2"></i> Settings</a>
            </li>
        </ul>
        <div class="p-3">
            <a href="#" class="text-muted text-decoration-none"><i class="bi bi-chevron-double-left me-2"></i> Sembunyikan</a>
        </div>
    </div>

    <div class="main-content">

        <div class="topbar d-flex justify-content-between align-items-center">
            <div class="d-flex gap-3 text-muted">
                <a href="#" class="text-decoration-none text-dark">Master <i class="bi bi-chevron-down"></i></a>
                <a href="#" class="text-decoration-none text-warning fw-bold">Produksi <i class="bi bi-chevron-down"></i></a>
                <a href="#" class="text-decoration-none text-dark">Monitoring <i class="bi bi-chevron-down"></i></a>
                <a href="#" class="text-decoration-none text-dark">Laporan <i class="bi bi-chevron-down"></i></a>
                <a href="#" class="text-decoration-none text-dark">Pengajuan Revisi <i class="bi bi-chevron-down"></i></a>
            </div>
            <div class="d-flex align-items-center gap-3">
                <div class="input-group input-group-sm bg-light rounded px-2 py-1">
                    <i class="bi bi-search text-muted mt-1 me-2"></i>
                    <input type="text" class="border-0 bg-transparent outline-none" placeholder="Cari menu, modul..." style="outline:none; width: 200px;">
                    <span class="text-muted border rounded px-1" style="font-size: 0.7rem;">Ctrl K</span>
                </div>
                <i class="bi bi-star text-muted"></i>
                <div class="position-relative">
                    <i class="bi bi-bell text-muted"></i>
                    <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle"></span>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <div class="bg-secondary rounded-circle" style="width: 30px; height: 30px;"></div>
                    <div class="lh-1">
                        <span class="d-block fw-bold" style="font-size: 0.8rem;">Admin Cor</span>
                        <span class="text-muted" style="font-size: 0.75rem;">Administrator</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-12">
                <div class="row g-3">
                    <div class="col-md-3">
                        <div class="card p-3 d-flex flex-row align-items-center gap-3 h-100">
                            <div class="stat-icon bg-blue"><i class="bi bi-file-earmark"></i></div>
                            <div>
                                <small class="text-muted text-uppercase d-block" style="font-size: 0.7rem;">Total Order</small>
                                <span class="fs-4 fw-bold">1.245</span>
                                <small class="text-success"><i class="bi bi-arrow-up"></i> +12%</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-3 d-flex flex-row align-items-center gap-3 h-100">
                            <div class="stat-icon bg-green"><i class="bi bi-box-seam"></i></div>
                            <div>
                                <small class="text-muted text-uppercase d-block" style="font-size: 0.7rem;">Produksi Hari Ini</small>
                                <span class="fs-4 fw-bold">856</span>
                                <small class="text-success"><i class="bi bi-arrow-up"></i> +8%</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-3 d-flex flex-row align-items-center gap-3 h-100">
                            <div class="stat-icon bg-yellow"><i class="bi bi-clock-history"></i></div>
                            <div>
                                <small class="text-muted text-uppercase d-block" style="font-size: 0.7rem;">Susut Hari Ini</small>
                                <span class="fs-4 fw-bold">3,42%</span>
                                <small class="text-danger"><i class="bi bi-arrow-down"></i> -0,35%</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-3 d-flex flex-row align-items-center gap-3 h-100">
                            <div class="stat-icon bg-purple"><i class="bi bi-clipboard-data"></i></div>
                            <div>
                                <small class="text-muted text-uppercase d-block" style="font-size: 0.7rem;">WIP Saat Ini</small>
                                <span class="fs-4 fw-bold">2.154</span>
                                <small class="text-success"><i class="bi bi-arrow-up"></i> +5%</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h6 class="fw-bold m-0"><span class="bg-dark text-white rounded-circle d-inline-flex justify-content-center align-items-center me-2" style="width:20px; height:20px; font-size:0.7rem;">C</span> BAGI BAHAN COR BELUM SETOR</h6>
            <div class="d-flex gap-2 align-items-center">
                <select class="form-select form-select-sm border-0 shadow-sm" style="width: 150px;">
                    <option>Semua Area</option>
                </select>
                <div class="btn-group shadow-sm">
                    <button class="btn btn-sm btn-light text-warning"><i class="bi bi-grid-fill"></i></button>
                    <button class="btn btn-sm btn-light"><i class="bi bi-list"></i></button>
                </div>
            </div>
        </div>

        <div class="row g-3">
            @for ($i = 0; $i < 12; $i++)
            <div class="col-md-3">
                <div class="card warning-card h-100">
                    <div class="warning-header d-flex justify-content-between align-items-center">
                        <span>BB10/VIII/24</span>
                        <i class="bi bi-three-dots-vertical text-muted"></i>
                    </div>
                    <div class="card-body p-3">
                        <small class="text-muted d-block fw-bold mb-2">BAGI BAHAN COR</small>
                        <span class="text-danger-custom">{{ rand(200, 700) }} HARI MASA KERJA</span>
                    </div>
                </div>
            </div>
            @endfor
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
