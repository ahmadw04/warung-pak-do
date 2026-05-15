@extends('layouts.app')

@section('title', 'Dashboard - Warung Pak Do')

@section('content')
    <section class="dashboard-hero">
        <div>
            <h1>Dashboard Warung Pak Do</h1>
            <p>Kelola produk warung, pantau stok barang, dan siapkan informasi pemesanan online dalam satu website sederhana.</p>
            <div class="actions" style="margin-top: 18px;">
                <a class="button secondary" href="{{ route('menu') }}">Lihat Menu</a>
                <a class="button secondary" href="{{ route('products.index') }}">Lihat Produk</a>
                <a class="button" href="{{ route('contact') }}">Kontak Warung</a>
            </div>
        </div>
        <div class="hero-panel">
            <strong>Ringkasan Hari Ini</strong>
            <p>Total produk: {{ $totalProducts }}</p>
            <p>Produk aktif: {{ $activeProducts }}</p>
            <p>Total stok: {{ $totalStock }}</p>
        </div>
    </section>

    <section class="stats">
        <div class="stat">
            <span class="muted">Total Produk</span>
            <strong>{{ $totalProducts }}</strong>
        </div>
        <div class="stat">
            <span class="muted">Produk Aktif</span>
            <strong>{{ $activeProducts }}</strong>
        </div>
        <div class="stat">
            <span class="muted">Total Stok</span>
            <strong>{{ $totalStock }}</strong>
        </div>
    </section>

    <section class="section-title">
        <div>
            <h2>Daftar Menu Makanan</h2>
            <p class="muted">Menu utama Warung Pak Do berdasarkan daftar harga terbaru.</p>
        </div>
        <a class="button secondary" href="{{ route('menu') }}">Lihat Semua Menu</a>
    </section>

    <section class="feature-grid">
        <div class="feature-item">
            <strong>Nasi Goreng</strong>
            <p class="muted">Mulai Rp 11.000, tersedia pilihan biasa, mawut, telur, ati, jawa, spesial, pete, dan ayam geprek.</p>
        </div>
        <div class="feature-item">
            <strong>Mie dan Ayam</strong>
            <p class="muted">Bakmi, kwetiau, bihun, ayam geprek, ayam saus, dan ayam goreng.</p>
        </div>
        <div class="feature-item">
            <strong>Minuman</strong>
            <p class="muted">Teh, jeruk, lemon tea, chocolatos, milo, dan white coffe.</p>
        </div>
    </section>

    <section class="section-title">
        <div>
            <h2>Menu Dashboard</h2>
            <p class="muted">Akses cepat untuk kebutuhan utama Warung Pak Do.</p>
        </div>
    </section>

    <section class="feature-grid">
        <div class="feature-item">
            <strong>Data Produk</strong>
            <p class="muted">Tambah, edit, lihat, dan hapus produk yang dijual di warung.</p>
        </div>
        <div class="feature-item">
            <strong>Stok Barang</strong>
            <p class="muted">Pantau jumlah stok agar barang yang habis mudah diketahui.</p>
        </div>
        <div class="feature-item">
            <strong>Pemesanan Online</strong>
            <p class="muted">Tampilkan kanal pemesanan melalui layanan makanan online.</p>
        </div>
    </section>

    <section class="section-title">
        <div>
            <h2>Pesan Lewat Aplikasi</h2>
            <p class="muted">Warung Pak Do tersedia melalui layanan berikut.</p>
        </div>
    </section>

    <section class="delivery-grid">
        <div class="delivery-item">
            <img src="{{ asset('images/shopeefood.svg') }}" alt="ShopeeFood">
            <strong>ShopeeFood</strong>
            <p class="muted">Pilihan pemesanan makanan dan minuman dari Warung Pak Do.</p>
        </div>
        <div class="delivery-item">
            <img src="{{ asset('images/grabfood.svg') }}" alt="GrabFood">
            <strong>GrabFood</strong>
            <p class="muted">Pelanggan dapat memesan menu warung melalui GrabFood.</p>
        </div>
        <div class="delivery-item">
            <img src="{{ asset('images/gofood.svg') }}" alt="GoFood">
            <strong>GoFood</strong>
            <p class="muted">Warung dapat menjangkau pelanggan sekitar lewat GoFood.</p>
        </div>
    </section>
@endsection
