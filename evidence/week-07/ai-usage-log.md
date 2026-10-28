# AI Usage Log - Pertemuan 7

| Waktu | Masalah/tujuan | Prompt singkat | Diterima / ditolak |
|-------|----------------|----------------|--------------------|
| 28/10/2026 18:05 | Mengerjakan P7 setelah P9 sudah selesai dan di-push | Meminta urutan pengerjaan P7 di atas project P9 | Diterima: pakai satu project yang sama, evidence dipisah week-07 dan week-09 |
| 28/10/2026 18:10 | Membuat HomeController | Meminta kode HomeController@index yang mengirim data kursus | Diterima: dipakai, lalu saya jelaskan fungsi compact() |
| 28/10/2026 18:15 | Menyesuaikan data kursus | Mengganti 3 kursus jadi 5 (Web, PHP, Laravel, UI/UX, MySQL) | Diterima, sesuai kebutuhan saya |
| 28/10/2026 18:22 | Error `compact(): Undefined variable $siteName` | Mengirim foto error | Diterima: baris `$siteName` ternyata hilang saat saya mengganti array |
| 28/10/2026 18:45 | Menambah gambar hero | Meminta kode hero dengan gambar | Diterima, nama file saya samakan jadi hero-kursus.jpg |
| 18:50 | Menambah menu navbar sesuai bagian Beranda | Meminta link Keunggulan, Kursus, Cara Daftar | Diterima |
| 18:52-19:04 | Navbar nyasar ke tengah dan kartu Cara Daftar hilang | Mengirim foto, DevTools, dan isi home.blade.php | Sebagian ditolak: dugaan soal CSS dan sticky-top salah. Diterima: penyebab sebenarnya file home.blade.php terpotong saat paste (tidak ada penutup section dan @endsection) |

## Verifikasi

- Membuka `/` dan memastikan 5 kartu kursus tampil dari controller.
- Mengecek navbar kembali di atas dan 3 kartu Cara Daftar tampil.
- Menjalankan `php artisan route:list` (akan di-screenshot).

## Refleksi singkat

Dari error `Undefined variable $siteName` saya belajar bahwa `compact()` hanya bisa mengirim variabel yang benar-benar ada di method. Dari masalah navbar saya belajar memeriksa struktur HTML lewat Inspect, dan bahwa kode yang terpotong bisa merusak seluruh layout.