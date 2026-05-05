# Deploy Gratis: Railway + Neon Postgres

Gunakan panduan ini kalau Railway meminta upgrade saat menambahkan database.

## Konsepnya
- Railway dipakai untuk menjalankan website Laravel.
- Neon dipakai untuk database Postgres gratis.
- Data CRUD produk disimpan di Neon, bukan di Railway.

## 1. Buat Akun Neon
1. Buka https://neon.com
2. Klik **Sign Up**
3. Daftar menggunakan GitHub atau email.

## 2. Buat Database Neon
1. Klik **New Project**.
2. Isi nama project, misalnya `warung-pak-do`.
3. Pilih region terdekat yang tersedia.
4. Klik **Create Project**.

## 3. Ambil Connection String
1. Masuk ke project Neon.
2. Cari bagian **Connection string** atau **Connect**.
3. Pilih koneksi untuk Laravel/PHP atau PostgreSQL.
4. Copy URL database yang bentuknya mirip:

```text
postgresql://username:password@host.neon.tech/database?sslmode=require
```

Simpan URL ini. Nanti dipasang ke Railway sebagai `DB_URL`.

## 4. Deploy Laravel ke Railway
1. Buka Railway.
2. Klik **New Project**.
3. Pilih **Deploy from GitHub repo**.
4. Pilih repository `warung-pak-do`.
5. Tunggu proses deploy.

Lewati langkah menambahkan database di Railway.

## 5. Isi Variables di Railway
Masuk ke service Laravel di Railway, lalu buka tab **Variables**.

Tambahkan:

```env
APP_NAME="Warung Pak Do"
APP_ENV=production
APP_DEBUG=false
APP_KEY=base64:ISI_DENGAN_APP_KEY
APP_URL=https://domain-railway-kamu.up.railway.app

LOG_CHANNEL=stderr
LOG_LEVEL=debug

DB_CONNECTION=pgsql
DB_URL=ISI_CONNECTION_STRING_DARI_NEON

SESSION_DRIVER=database
CACHE_STORE=database
QUEUE_CONNECTION=database
```

Untuk membuat `APP_KEY`, buka terminal di folder project lokal:

```bash
php artisan key:generate --show
```

Copy hasilnya ke variable `APP_KEY`.

## 6. Isi Pre-Deploy Command
Di Railway:
1. Buka service Laravel.
2. Masuk **Settings**.
3. Cari bagian **Deploy**.
4. Isi **Pre-Deploy Command**:

```bash
chmod +x ./railway/init-app.sh && sh ./railway/init-app.sh
```

Command ini membuat tabel database otomatis di Neon.

## 7. Buat Link Website
Di Railway:
1. Masuk service Laravel.
2. Buka **Settings**.
3. Cari **Networking**.
4. Klik **Generate Domain**.

Setelah link muncul, copy domain itu ke variable `APP_URL`.

## 8. Redeploy
1. Buka tab **Deployments**.
2. Klik deployment terbaru.
3. Klik **Redeploy**.

Kalau sukses, website bisa dibuka orang lain memakai link Railway.

## Halaman untuk Dicek
- Dashboard: `/`
- Kontak: `/kontak`
- CRUD Produk: `/products`

## Jika Error
- Kalau muncul error database, cek `DB_URL` dari Neon.
- Kalau muncul error key, cek `APP_KEY`.
- Kalau tabel belum ada, pastikan pre-deploy command sudah diisi.
