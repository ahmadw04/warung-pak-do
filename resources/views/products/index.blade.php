@extends('layouts.app')

@section('title', 'Produk - Warung Pak Do')

@section('content')
    <section class="hero">
        <div>
            <h1>Produk Warung Pak Do</h1>
            <p class="muted">Kelola produk, harga, stok, dan status barang yang dijual di warung.</p>
        </div>
        <a class="button" href="{{ route('products.create') }}">Tambah Produk</a>
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

    <section class="panel">
        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                        <tr>
                            <td>
                                <strong>{{ $product->name }}</strong>
                                <div class="muted">{{ $product->unit }}</div>
                            </td>
                            <td>{{ $product->category }}</td>
                            <td>Rp {{ number_format((float) $product->price, 0, ',', '.') }}</td>
                            <td>{{ $product->stock }} {{ $product->unit }}</td>
                            <td>
                                <span class="badge {{ $product->is_active ? 'active' : 'inactive' }}">
                                    {{ $product->is_active ? 'Aktif' : 'Nonaktif' }}
                                </span>
                            </td>
                            <td>
                                <div class="actions">
                                    <a class="button secondary" href="{{ route('products.show', $product) }}">Detail</a>
                                    <a class="button secondary" href="{{ route('products.edit', $product) }}">Edit</a>
                                    <form action="{{ route('products.destroy', $product) }}" method="POST" onsubmit="return confirm('Hapus produk ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button danger" type="submit">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">
                                <strong>Belum ada produk.</strong>
                                <div class="muted">Klik tombol Tambah Produk untuk mulai mengisi data Warung Pak Do.</div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="pagination">
            {{ $products->links() }}
        </div>
    </section>
@endsection
