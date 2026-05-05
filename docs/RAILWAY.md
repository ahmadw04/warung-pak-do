# Deploy Laravel Warung Pak Do ke Railway

Dokumen ini menjelaskan cara membuat website Warung Pak Do bisa dibuka orang lain melalui Railway.

## 1. Siapkan GitHub
1. Buat repository baru di GitHub.
2. Upload/push folder proyek `warung-pak-do` ke repository tersebut.
3. Pastikan file `.env` tidak ikut diupload. Laravel sudah punya `.gitignore` untuk itu.

## 2. Buat Project Railway
1. Buka Railway.
2. Pilih **New Project**.
3. Pilih **Deploy from GitHub repo**.
4. Pilih repository `warung-pak-do`.

Railway akan mendeteksi aplikasi Laravel secara otomatis.

## 3. Tambahkan Database Postgres
1. Di project Railway, klik **New**.
2. Pilih **Database**.
3. Pilih **Postgres**.

SQLite cocok untuk lokal, tetapi untuk deploy Railway gunakan Postgres agar data produk tidak hilang saat service redeploy.

## 4. Environment Variables
Tambahkan variables berikut di service aplikasi Laravel:

```env
APP_NAME="Warung Pak Do"
APP_ENV=production
APP_DEBUG=false
APP_KEY=base64:ISI_DENGAN_APP_KEY
APP_URL=https://domain-railway-kamu.up.railway.app

LOG_CHANNEL=stderr
LOG_LEVEL=debug

DB_CONNECTION=pgsql
DB_URL=${{Postgres.DATABASE_URL}}

SESSION_DRIVER=database
CACHE_STORE=database
QUEUE_CONNECTION=database
```

Untuk membuat `APP_KEY`, jalankan di lokal:

```bash
php artisan key:generate --show
```

Salin hasilnya ke variable `APP_KEY` di Railway.

## 5. Pre-Deploy Command
Di service aplikasi Laravel, buka **Settings** lalu cari bagian **Deploy**.

Isi **Pre-Deploy Command**:

```bash
chmod +x ./railway/init-app.sh && sh ./railway/init-app.sh
```

Script ini akan menjalankan migration dan cache view/config setiap deploy.

## 6. Generate Public Domain
Secara default service Railway belum bisa dibuka publik.

1. Buka service aplikasi Laravel.
2. Masuk ke **Settings**.
3. Buka bagian **Networking**.
4. Klik **Generate Domain**.

Setelah domain dibuat, website bisa dibuka orang lain melalui URL Railway tersebut.

## 7. Halaman yang Bisa Dicek
- Dashboard: `/`
- Kontak: `/kontak`
- CRUD Produk: `/products`

## Catatan
- Jangan upload `.env` ke GitHub.
- Jalankan migration otomatis lewat pre-deploy command.
- Gunakan Postgres Railway untuk data produksi.
