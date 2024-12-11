<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# SIAP - Sistem Informasi Alamat Penduduk

SIAP adalah sebuah aplikasi berbasis web yang dirancang untuk mengelola informasi alamat penduduk secara efisien. Aplikasi ini mendukung pencatatan, pembaruan, dan pencarian data alamat penduduk, yang bertujuan untuk mendukung administrasi kependudukan yang lebih baik.

## Fitur Utama

1. **Manajemen Data Penduduk**
   - Tambah data penduduk baru.
   - Edit dan hapus data penduduk.
2. **Pencarian Alamat**
   - Fitur pencarian cepat untuk menemukan data penduduk berdasarkan nama, NIK, atau alamat.
3. **Keamanan**
   - Autentikasi pengguna untuk memastikan hanya pengguna yang berwenang yang dapat mengakses sistem.

## Teknologi yang Digunakan

- **Framework Back-end**: Laravel 8
- **Database**: MySQL
- **Frontend**: Blade Template
- **Tools Lainnya**: Composer, Node.js, NPM

## Instalasi

### Prasyarat

1. PHP versi 7.4 atau lebih baru.
2. Composer.
3. MySQL.
4. Node.js dan NPM (opsional, untuk frontend assets).

### Langkah-langkah Instalasi

1. Clone repositori ini:
   ```bash
   git clone https://github.com/nama_user/siap.git
   cd siap
   ```

2. Install dependencies menggunakan Composer:
   ```bash
   composer install
   ```

3. Salin file `.env.example` menjadi `.env`:
   ```bash
   cp .env.example .env
   ```

4. Atur konfigurasi di file `.env`:
   ```env
   APP_NAME=SIAP
   APP_ENV=local
   APP_KEY=
   APP_DEBUG=true
   APP_URL=http://localhost

   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nama_database
   DB_USERNAME=root
   DB_PASSWORD=password
   ```

5. Generate application key:
   ```bash
   php artisan key:generate
   ```

6. Jalankan migrasi database:
   ```bash
   php artisan migrate
   ```

7. Jika diperlukan, jalankan seeder untuk mengisi data awal:
   ```bash
   php artisan db:seed
   ```

8. Jalankan server lokal:
   ```bash
   php artisan serve
   ```

Akses aplikasi di browser melalui `http://127.0.0.1:8000`.

## Struktur Direktori Utama

- **app/**: Logika aplikasi.
- **config/**: Konfigurasi aplikasi.
- **database/**: File migrasi dan seeder.
- **resources/**: File Blade templates dan asset frontend.
- **routes/**: File rute aplikasi.
- **storage/**: Penyimpanan file yang diunggah dan cache.

## Penggunaan

### Menambahkan Data Penduduk
1. Login ke aplikasi.
2. Navigasikan ke halaman "Tambah Penduduk".
3. Isi data penduduk seperti nama, alamat, dan informasi lainnya.
4. Klik tombol "Simpan".

### Pencarian Data Penduduk
1. Gunakan kolom pencarian di halaman utama.
2. Masukkan kata kunci seperti nama atau alamat.
3. Hasil pencarian akan ditampilkan secara instan.

### Membuat Laporan
1. Pergi ke halaman "Laporan".
2. Pilih format laporan (CSV atau PDF).
3. Klik tombol "Export".

## Kontribusi

Kontribusi sangat diterima! Silakan buat pull request atau ajukan issue di repositori ini untuk perbaikan atau fitur baru.

## Lisensi
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---

Terima kasih telah menggunakan SIAP - Sistem Informasi Alamat Penduduk!

