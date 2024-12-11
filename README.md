<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

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

---

Terima kasih telah menggunakan SIAP - Sistem Informasi Alamat Penduduk!

