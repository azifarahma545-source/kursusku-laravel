# KursusKu

Project praktikum Pemrograman Web III.

## Requirement

- PHP 8.3 atau lebih baru
- Composer
- Node.js dan npm
- Laravel
- Laragon / web server lokal

## Cara Menjalankan

1. Buka terminal pada folder project.
2. Jalankan: `composer install`
3. Jalankan: `npm install`
4. Salin `.env.example` menjadi `.env` jika diperlukan.
5. Jalankan: `php artisan key:generate`
6. Jalankan di terminal pertama: `npm run dev`
7. Jalankan di terminal kedua: `php artisan serve`
8. Buka alamat yang ditampilkan terminal, biasanya `http://127.0.0.1:8000`.

## Fitur Milestone 7

- Named route `home`
- HomeController@index
- Blade landing page
- Data kursus dari controller (5 kursus)
- Asset gambar hero

## Fitur Tambahan dari Pertemuan 9

- Master layout Blade dan navbar partial
- Bootstrap dan jQuery melalui Vite
- Form pendaftaran dengan @csrf
- Cek sisa kursi dengan jQuery Ajax

## Belum Dikerjakan

- Database
- CRUD
- Authentication
- Relasi data