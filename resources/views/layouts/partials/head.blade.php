<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin BST - Dashboard</title>

<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="{{ asset('images/favicon/favicon.ico') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="192x192" href="{{ asset('images/favicon/android-chrome-192x192.png') }}">
<link rel="icon" type="image/png" sizes="512x512" href="{{ asset('images/favicon/android-chrome-512x512.png') }}">

<!-- Bootstrap 5.0.2 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 0.9rem;
    }

    /* Topbar */
    .topbar {
        background: #fff;
        border-bottom: 1px solid #eaeaea;
        padding: 10px 25px;
        border-radius: 12px;
        margin-bottom: 20px;
    }

    /* Cards */
    .card {
        border: none;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
    }

    /* Stat icon */
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

    .bg-blue {
        background-color: #4e89ff;
    }

    .bg-green {
        background-color: #20c997;
    }

    .bg-yellow {
        background-color: #ffc107;
    }

    .bg-purple {
        background-color: #845ef7;
    }

    /* Warning */
    .warning-card {
        border: 1px solid #ffe6e6;
    }

    .warning-header {
        background-color: #ffb3b3;
        padding: 10px 15px;
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
        font-weight: bold;
    }

    .text-danger-custom {
        color: #e63946;
        font-weight: bold;
    }
</style>
