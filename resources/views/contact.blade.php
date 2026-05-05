@extends('layouts.app')

@section('title', 'Kontak - Warung Pak Do')

@section('content')
    <section class="hero">
        <div>
            <h1>Kontak Warung Pak Do</h1>
            <p class="muted">Informasi kontak dan lokasi untuk pelanggan Warung Pak Do.</p>
        </div>
    </section>

    <section class="contact-grid">
        <div class="contact-item">
            <strong>Alamat</strong>
            <p class="muted">Jl. Mawar No. 10, dekat pasar utama.</p>
        </div>
        <div class="contact-item">
            <strong>WhatsApp</strong>
            <p class="muted">0812-3456-7890</p>
        </div>
        <div class="contact-item">
            <strong>Jam Buka</strong>
            <p class="muted">Setiap hari, 07.00 - 21.00 WIB.</p>
        </div>
    </section>

    <section class="section-title">
        <div>
            <h2>Layanan Pemesanan</h2>
            <p class="muted">Pelanggan juga dapat memesan melalui aplikasi berikut.</p>
        </div>
    </section>

    <section class="delivery-grid">
        <div class="delivery-item">
            <img src="{{ asset('images/shopeefood.svg') }}" alt="ShopeeFood">
            <strong>ShopeeFood</strong>
            <p class="muted">Cari Warung Pak Do di aplikasi ShopeeFood.</p>
        </div>
        <div class="delivery-item">
            <img src="{{ asset('images/grabfood.svg') }}" alt="GrabFood">
            <strong>GrabFood</strong>
            <p class="muted">Pesan menu warung lewat GrabFood.</p>
        </div>
        <div class="delivery-item">
            <img src="{{ asset('images/gofood.svg') }}" alt="GoFood">
            <strong>GoFood</strong>
            <p class="muted">Tersedia untuk pelanggan sekitar melalui GoFood.</p>
        </div>
    </section>
@endsection
