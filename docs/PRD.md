# Product Requirements Document (PRD)

## Nama Produk
Website Manajemen Produk Warung Pak Do

## Latar Belakang
Warung Pak Do membutuhkan website sederhana untuk mencatat dan mengelola data produk yang dijual. Sistem ini membantu pemilik warung melihat daftar barang, menambah barang baru, memperbarui informasi barang, dan menghapus barang yang tidak lagi dijual.

## Tujuan
- Membuat website berbasis Laravel untuk Warung Pak Do.
- Menyediakan fitur CRUD produk.
- Mempermudah pengelolaan stok dan harga produk.
- Menyediakan tampilan yang sederhana, rapi, dan mudah digunakan.

## Target Pengguna
- Pemilik Warung Pak Do.
- Pegawai warung yang membantu mengelola data produk.

## Fitur Utama
1. Melihat daftar produk.
2. Menambahkan produk baru.
3. Melihat detail produk.
4. Mengubah data produk.
5. Menghapus produk.
6. Menampilkan ringkasan jumlah produk, total stok, dan produk aktif.

## Data Produk
Setiap produk memiliki data berikut:
- Nama produk.
- Kategori.
- Harga.
- Stok.
- Satuan.
- Deskripsi.
- Status aktif.

## User Flow
1. Pengguna membuka halaman utama.
2. Sistem menampilkan dashboard produk Warung Pak Do.
3. Pengguna dapat memilih tombol tambah produk.
4. Pengguna mengisi form produk dan menyimpan data.
5. Produk tampil di daftar produk.
6. Pengguna dapat membuka detail, mengedit, atau menghapus produk.

## Kebutuhan Fungsional
- Sistem dapat menyimpan data produk ke database.
- Sistem dapat menampilkan seluruh data produk.
- Sistem dapat memvalidasi input produk.
- Sistem dapat memperbarui data produk.
- Sistem dapat menghapus data produk.
- Sistem menampilkan pesan sukses setelah proses tambah, edit, atau hapus.

## Kebutuhan Non-Fungsional
- Website dibuat menggunakan framework Laravel.
- Database menggunakan SQLite agar mudah dijalankan secara lokal.
- Tampilan menggunakan Blade dan CSS.
- Website dapat dijalankan dengan `php artisan serve`.

## Batasan
- Sistem belum memiliki login.
- Sistem fokus pada CRUD produk, bukan transaksi penjualan.
- Sistem dibuat untuk kebutuhan tugas kuliah dan demo lokal.

## Kriteria Keberhasilan
- Website Laravel berhasil dijalankan.
- Halaman produk dapat dibuka.
- Pengguna dapat menambah, membaca, mengubah, dan menghapus produk.
- Data tersimpan di database.
