@extends('layouts.app')

@section('title', 'Tambah Produk - Warung Pak Do')

@section('content')
    <section class="hero">
        <div>
            <h1>Tambah Produk</h1>
            <p class="muted">Masukkan data produk baru untuk Warung Pak Do.</p>
        </div>
    </section>

    <form class="panel" action="{{ route('products.store') }}" method="POST">
        @include('products._form')
    </form>
@endsection
