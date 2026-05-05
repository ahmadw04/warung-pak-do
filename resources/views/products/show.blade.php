@extends('layouts.app')

@section('title', $product->name . ' - Warung Pak Do')

@section('content')
    <section class="hero">
        <div>
            <h1>{{ $product->name }}</h1>
            <p class="muted">Detail produk Warung Pak Do.</p>
        </div>
        <div class="actions">
            <a class="button secondary" href="{{ route('products.index') }}">Kembali</a>
            <a class="button" href="{{ route('products.edit', $product) }}">Edit</a>
        </div>
    </section>

    <section class="panel">
        <div class="detail-list">
            <div class="detail-item">
                <span class="muted">Kategori</span>
                <strong>{{ $product->category }}</strong>
            </div>
            <div class="detail-item">
                <span class="muted">Harga</span>
                <strong>Rp {{ number_format((float) $product->price, 0, ',', '.') }}</strong>
            </div>
            <div class="detail-item">
                <span class="muted">Stok</span>
                <strong>{{ $product->stock }} {{ $product->unit }}</strong>
            </div>
            <div class="detail-item">
                <span class="muted">Status</span>
                <strong>{{ $product->is_active ? 'Aktif dijual' : 'Nonaktif' }}</strong>
            </div>
            <div class="detail-item full">
                <span class="muted">Deskripsi</span>
                <p>{{ $product->description ?: 'Tidak ada deskripsi.' }}</p>
            </div>
        </div>
    </section>
@endsection
