@extends('layouts.app')

@section('title', 'Edit Produk - Warung Pak Do')

@section('content')
    <section class="hero">
        <div>
            <h1>Edit Produk</h1>
            <p class="muted">Perbarui data {{ $product->name }}.</p>
        </div>
    </section>

    <form class="panel" action="{{ route('products.update', $product) }}" method="POST">
        @method('PUT')
        @include('products._form')
    </form>
@endsection
