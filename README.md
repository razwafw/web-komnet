# Web Komnet v2

### Prasyarat

-   XAMPP dengan PHP versi 8.1.x

### Instalasi & Penggunaan

1. Clone GitHub repository ini dan simpan di lokasi manapun
2. Copy file .env.example, rename jadi .env. Sesuaikan nilai untuk DB\_\* dengan kredensial ke database yang sesuai (yang sudah diinstal melalui XAMPP)
3. Jalankan web server dengan menjalankan perintah `php artisan serve` pada terminal dari direktori root proyek

### Struktur Direktori Penting

-   Tentukan route di folder `routes/web.php`
-   Buat controller di folder `app/Http/Controllers`
-   Buat view di folder `resources/views`. Catatan:
    -   Untuk template susunan halaman, tambahkan di folder `./layouts`
    -   Untuk komponen halaman yang reusable, tambahkan di folder `./partials`
-   Buat model di folder `app/Models`
-   Tambahkan file CSS, JS, gambar, dll. di folder `public/`

### Tambahan

-   Ekstensi pendukung untuk VS Code
    -   HTML Boilerplate
    -   JavaScript (ES6) code snippets
    -   jQuery Code Snippets
    -   Laravel Artisan
    -   Laravel Blade formatter (untuk formatting file-file Blade)
    -   Laravel Blade Snippets
    -   Laravel Blade Spacers (otomatis menambahkan spasi pada sintaks Blade)
    -   Laravel goto view
    -   Laravel Snippets
    -   PHP Awesome Snippets
    -   PHP Intelliphense
    -   Prettier - Code formatter
-   Standar penulisan
    -   Kode ditulis dalam _bahasa Inggris_ untuk mengurangi ambiguitas
    -   Nama variabel ditulis dalam `snake_case`
    -   Ukuran tab dibuat _4 spasi_
