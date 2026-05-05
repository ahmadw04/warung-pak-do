@csrf

<div class="form-grid">
    <div class="field">
        <label for="name">Nama Produk</label>
        <input id="name" name="name" value="{{ old('name', $product->name) }}" required>
        @error('name') <div class="error">{{ $message }}</div> @enderror
    </div>

    <div class="field">
        <label for="category">Kategori</label>
        <input id="category" name="category" value="{{ old('category', $product->category) }}" required>
        @error('category') <div class="error">{{ $message }}</div> @enderror
    </div>

    <div class="field">
        <label for="price">Harga</label>
        <input id="price" type="number" name="price" min="0" step="100" value="{{ old('price', $product->price) }}" required>
        @error('price') <div class="error">{{ $message }}</div> @enderror
    </div>

    <div class="field">
        <label for="stock">Stok</label>
        <input id="stock" type="number" name="stock" min="0" value="{{ old('stock', $product->stock) }}" required>
        @error('stock') <div class="error">{{ $message }}</div> @enderror
    </div>

    <div class="field">
        <label for="unit">Satuan</label>
        <select id="unit" name="unit" required>
            @foreach (['pcs', 'bungkus', 'botol', 'kg', 'liter', 'dus'] as $unit)
                <option value="{{ $unit }}" @selected(old('unit', $product->unit) === $unit)>{{ ucfirst($unit) }}</option>
            @endforeach
        </select>
        @error('unit') <div class="error">{{ $message }}</div> @enderror
    </div>

    <div class="field">
        <label>Status</label>
        <label class="checkbox">
            <input type="checkbox" name="is_active" value="1" @checked(old('is_active', $product->is_active))>
            Produk aktif dijual
        </label>
        @error('is_active') <div class="error">{{ $message }}</div> @enderror
    </div>

    <div class="field full">
        <label for="description">Deskripsi</label>
        <textarea id="description" name="description">{{ old('description', $product->description) }}</textarea>
        @error('description') <div class="error">{{ $message }}</div> @enderror
    </div>
</div>

<div class="form-actions">
    <a class="button secondary" href="{{ route('products.index') }}">Batal</a>
    <button class="button" type="submit">Simpan</button>
</div>
