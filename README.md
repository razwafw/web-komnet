# Web Komnet v2

### Prasyarat

-   XAMPP dengan PHP versi 8.1.x atau lebih tinggi
-   VS Code (supaya mudah menyamakan ekstensi dan konfigurasi)

### Panduan Pemasangan & Penggunaan

1. Clone GitHub repository ini dan simpan di lokasi manapun
2. Copy file `.env.example`, rename hasil copy menjadi `.env`. Sesuaikan nilai untuk `DB_*` dengan kredensial ke database yang sesuai (yang sudah diinstal melalui XAMPP)
3. Generate app key baru dengan menjalankan perintah `php artisan key:generate` pada terminal dari direktori root proyek
4. Migrate schema database dengan menjalankan perintah `php artisan migrate` pada terminal dari direktori root proyek. _Catatan: Batalkan migration dengan perintah `php artisan migrate:rollback` atau gunakan `php artisan migrate:fresh` untuk memperbarui skema database_
5. Jalankan web server dengan menjalankan perintah `php artisan serve` pada terminal dari direktori root proyek

### Panduan Pengembangan

-   Standar penulisan endpoint adalah `/(nama controller)/(nama method [khusus untuk aksi create, update, dan delete])/(id objek [jika diperlukan])`. Nama controller ditulis dalam `kebab-case` dengan format `object(s)`. Nama method ditulis dalam `kebab-case` dengan format `action-object(s)`
-   Tentukan route di folder `routes/web.php`
-   Buat controller sesuai referensi [ini](https://laravel.com/docs/10.x/controllers#basic-controllers) atau dengan ekstensi Laravel Artisan (tekan `ctrl + shift + p` untuk mengaktifkannya), controller akan disimpan di folder `app/Http/Controllers`
-   Buat view di folder `resources/views`. Catatan:
    -   Untuk template susunan halaman, tambahkan di folder `./layouts`
    -   Untuk komponen halaman yang reusable, tambahkan di folder `./partials`
-   Buat migration database (usahakan pembuatan schema database melalui migration, bukan secara manual, agar perubahan development lebih mudah disatukan) sesuai dengan referensi [ini](https://laravel.com/docs/10.x/migrations#generating-migrations) atau dengan ekstensi Laravel Artisan, migration akan disimpan di folder `database/migrations`
-   Buat model sesuai referensi [ini](https://laravel.com/docs/10.x/eloquent#generating-model-classes) atau dengan menggunakan ekstensi Laravel Artisan, model akan disimpan di folder `app/Models`
-   Tambahkan file CSS, JS, gambar, dll. di folder `public/`. Akses endpoint `/assets/` dari file HTML dengan fungsi [ini](https://laravel.com/docs/10.x/helpers#method-asset)

### Tambahan

-   Ekstensi pendukung untuk VS Code
    -   HTML Boilerplate
    -   JavaScript (ES6) code snippets
    -   jQuery Code Snippets
    -   Laravel Artisan (untuk command artisan)
    -   Laravel Blade formatter (untuk formatting file-file Blade)
    -   Laravel Blade Snippets
    -   Laravel Blade Spacers (untuk otomatis menambahkan spasi pada sintaks Blade)
    -   Laravel goto view
    -   Laravel Snippets
    -   PHP Awesome Snippets
    -   PHP Intelliphense
    -   PHP Namespace Resolver (untuk otomatis menambahkan namespace dari kelas yang digunakan pada sebuah file)
    -   Prettier - Code formatter (untuk formatting file-file lainnya, nyalakan opsi Format on Save di settings VS Code untuk mempermudah)
-   Standar penulisan
    -   Kode ditulis dalam _bahasa Inggris_ untuk mengurangi ambiguitas
    -   Ukuran tab adalah _4 spasi_
    -   Nama kelas ditulis dalam `PascalCase`
    -   Nama variabel, fungsi, id tag HTML, dll. ditulis dalam `camelCase`
    -   Penamaan fungsi mengikuti format `actionObject(s)(ByKeyName)`
    -   Standar penamaan action
        -   Create => create (di controller dan url) atau add (di model)
        -   Read => view (di controller) atau get (di model)
        -   Update => edit
        -   Delete => remove
    -   Penamaan kelas dan file controller mengikuti format `ObjectsController`
    -   Penamaan kelas dan file model mengikuti format `ObjectsModel`
