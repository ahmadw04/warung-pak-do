<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Warung Pak Do')</title>
    <style>
        :root {
            color-scheme: light;
            --bg: #f6f7f2;
            --panel: #ffffff;
            --text: #1f2933;
            --muted: #64748b;
            --line: #dce3d4;
            --primary: #176b4d;
            --primary-dark: #0f5138;
            --accent: #d97706;
            --danger: #b42318;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: var(--bg);
            color: var(--text);
            font-family: Arial, Helvetica, sans-serif;
            line-height: 1.5;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .topbar {
            background: var(--primary);
            color: #fff;
            padding: 18px 0;
        }

        .container {
            width: min(1120px, calc(100% - 32px));
            margin: 0 auto;
        }

        .nav {
            align-items: center;
            display: flex;
            justify-content: space-between;
            gap: 16px;
        }

        .brand {
            font-size: 24px;
            font-weight: 700;
            letter-spacing: 0;
        }

        .brand span {
            color: #f8d68f;
            display: block;
            font-size: 13px;
            font-weight: 400;
            margin-top: 2px;
        }

        .nav-links {
            align-items: center;
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .nav-link {
            border-radius: 8px;
            color: #e8fff4;
            font-weight: 700;
            padding: 9px 10px;
        }

        .nav-link:hover,
        .nav-link.active {
            background: rgba(255, 255, 255, 0.16);
        }

        main {
            padding: 28px 0 48px;
        }

        .hero {
            align-items: flex-end;
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 22px;
        }

        h1 {
            font-size: 32px;
            line-height: 1.2;
            margin: 0 0 8px;
        }

        p {
            margin: 0;
        }

        .muted {
            color: var(--muted);
        }

        .button {
            align-items: center;
            background: var(--primary);
            border: 1px solid var(--primary);
            border-radius: 8px;
            color: #fff;
            cursor: pointer;
            display: inline-flex;
            font: inherit;
            font-weight: 700;
            justify-content: center;
            min-height: 42px;
            padding: 9px 14px;
            white-space: nowrap;
        }

        .button:hover {
            background: var(--primary-dark);
        }

        .button.secondary {
            background: #fff;
            color: var(--primary);
        }

        .button.danger {
            background: var(--danger);
            border-color: var(--danger);
        }

        .dashboard-hero {
            background: linear-gradient(135deg, #176b4d 0%, #27865f 52%, #d97706 100%);
            border-radius: 8px;
            color: #fff;
            display: grid;
            gap: 20px;
            grid-template-columns: minmax(0, 1.25fr) minmax(260px, 0.75fr);
            margin-bottom: 22px;
            overflow: hidden;
            padding: 28px;
        }

        .dashboard-hero h1 {
            font-size: 40px;
        }

        .hero-panel {
            background: rgba(255, 255, 255, 0.14);
            border: 1px solid rgba(255, 255, 255, 0.28);
            border-radius: 8px;
            padding: 18px;
        }

        .section-title {
            align-items: end;
            display: flex;
            justify-content: space-between;
            gap: 16px;
            margin: 28px 0 14px;
        }

        .section-title h2 {
            font-size: 24px;
            margin: 0;
        }

        .feature-grid,
        .delivery-grid,
        .contact-grid,
        .skills-grid {
            display: grid;
            gap: 14px;
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        .feature-item,
        .delivery-item,
        .contact-item,
        .skill-item {
            background: var(--panel);
            border: 1px solid var(--line);
            border-radius: 8px;
            padding: 18px;
        }

        .feature-item strong,
        .contact-item strong,
        .skill-item strong {
            display: block;
            font-size: 18px;
            margin-bottom: 6px;
        }

        .skills-section {
            margin-top: 32px;
        }

        .delivery-item {
            display: flex;
            flex-direction: column;
            gap: 12px;
            min-height: 190px;
        }

        .delivery-item img {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 8px;
            height: 96px;
            object-fit: contain;
            padding: 14px;
            width: 100%;
        }

        .stats {
            display: grid;
            gap: 14px;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            margin-bottom: 22px;
        }

        .stat, .panel {
            background: var(--panel);
            border: 1px solid var(--line);
            border-radius: 8px;
        }

        .stat {
            padding: 18px;
        }

        .stat strong {
            display: block;
            font-size: 28px;
        }

        .panel {
            overflow: hidden;
        }

        .alert {
            background: #e8f5ee;
            border: 1px solid #b8dfc8;
            border-radius: 8px;
            color: #14532d;
            margin-bottom: 16px;
            padding: 12px 14px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border-bottom: 1px solid var(--line);
            padding: 14px;
            text-align: left;
            vertical-align: middle;
        }

        th {
            background: #eef3e8;
            font-size: 13px;
            text-transform: uppercase;
        }

        .actions {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .badge {
            border-radius: 999px;
            display: inline-block;
            font-size: 12px;
            font-weight: 700;
            padding: 4px 10px;
        }

        .badge.active {
            background: #dcfce7;
            color: #166534;
        }

        .badge.inactive {
            background: #fee2e2;
            color: #991b1b;
        }

        .form-grid {
            display: grid;
            gap: 16px;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            padding: 20px;
        }

        .field.full {
            grid-column: 1 / -1;
        }

        label {
            display: block;
            font-weight: 700;
            margin-bottom: 6px;
        }

        input, textarea, select {
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font: inherit;
            padding: 10px 12px;
            width: 100%;
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        .checkbox {
            align-items: center;
            display: flex;
            gap: 10px;
        }

        .checkbox input {
            width: auto;
        }

        .error {
            color: var(--danger);
            font-size: 13px;
            margin-top: 5px;
        }

        .form-actions {
            border-top: 1px solid var(--line);
            display: flex;
            gap: 10px;
            justify-content: flex-end;
            padding: 16px 20px;
        }

        .detail-list {
            display: grid;
            gap: 14px;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            padding: 20px;
        }

        .detail-item {
            border-bottom: 1px solid var(--line);
            padding-bottom: 12px;
        }

        .detail-item.full {
            grid-column: 1 / -1;
        }

        .pagination {
            padding: 16px;
        }

        @media (max-width: 720px) {
            .hero, .nav {
                align-items: flex-start;
                flex-direction: column;
            }

            .dashboard-hero,
            .stats,
            .form-grid,
            .detail-list,
            .feature-grid,
            .delivery-grid,
            .contact-grid,
            .skills-grid {
                grid-template-columns: 1fr;
            }

            th, td {
                padding: 10px;
            }

            .table-wrap {
                overflow-x: auto;
            }
        }
    </style>
</head>
<body>
    <header class="topbar">
        <div class="container nav">
            <a class="brand" href="{{ route('dashboard') }}">
                Warung Pak Do
                <span>Manajemen produk dan stok warung</span>
            </a>
            <nav class="nav-links" aria-label="Navigasi utama">
                <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">Dashboard</a>
                <a class="nav-link {{ request()->routeIs('products.*') ? 'active' : '' }}" href="{{ route('products.index') }}">Produk</a>
                <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Kontak</a>
                <a class="button secondary" href="{{ route('products.create') }}">Tambah Produk</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            @if (session('success'))
                <div class="alert">{{ session('success') }}</div>
            @endif

            @yield('content')

            <section class="skills-section">
                <div class="section-title">
                    <div>
                        <h2>Skills Warung Pak Do</h2>
                        <p class="muted">Keunggulan layanan yang mendukung kebutuhan pelanggan setiap hari.</p>
                    </div>
                </div>

                <div class="skills-grid">
                    <div class="skill-item">
                        <strong>Pelayanan Cepat</strong>
                        <p class="muted">Pesanan dan kebutuhan pelanggan dilayani dengan sigap.</p>
                    </div>
                    <div class="skill-item">
                        <strong>Stok Lengkap</strong>
                        <p class="muted">Produk harian seperti sembako, minuman, dan kebutuhan rumah tersedia.</p>
                    </div>
                    <div class="skill-item">
                        <strong>Pemesanan Online</strong>
                        <p class="muted">Mendukung pemesanan melalui ShopeeFood, GrabFood, dan GoFood.</p>
                    </div>
                </div>
            </section>
        </div>
    </main>
</body>
</html>
