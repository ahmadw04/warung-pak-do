@extends('layouts.app')

@section('title', 'Daftar Menu - Warung Pak Do')

@section('content')
    <section class="menu-page-hero">
        <h1>Daftar Menu Warung Pak Do</h1>
        <p>Nasi goreng, bakmi, ayam, capcay, minuman, dan menu tambahan tersedia untuk makan langsung maupun pesan online.</p>
    </section>

    <section class="menu-grid">
        @foreach ($menuGroups as $group)
            <article class="menu-card">
                <h2>{{ $group['category'] }}</h2>

                <div class="menu-list">
                    @foreach ($group['items'] as $item)
                        <div class="menu-row">
                            <span class="menu-name">{{ $item['name'] }}</span>
                            <span class="menu-price">Rp {{ number_format($item['price'], 0, ',', '.') }},-</span>
                        </div>
                    @endforeach
                </div>

                @isset($group['note'])
                    <div class="menu-note">{{ $group['note'] }}</div>
                @endisset
            </article>
        @endforeach
    </section>
@endsection
