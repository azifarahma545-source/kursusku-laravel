# Test Matrix Praktikum Pertemuan 11 – KursusKu

**Tanggal Pengujian:** 4 November 2026  
**Project:** KursusKu  
**Modul:** CRUD Course – Show, Validation, Edit, Update, Delete

## Tabel Pengujian

| No. | Skenario Pengujian | Input Utama | Hasil yang Diharapkan | Hasil Aktual | Status |
|---|---|---|---|---|---|
| 1 | Menampilkan daftar kursus | Membuka `/courses` | Delapan data kursus tampil | Delapan data kursus tampil | Berhasil |
| 2 | Melihat detail kursus | Membuka detail API-101 | Informasi kursus ditampilkan lengkap | Detail kursus berhasil ditampilkan | Berhasil |
| 3 | Membuka form edit | Klik Edit pada API-101 | Form edit tampil dengan data terisi otomatis | Semua kolom terisi otomatis | Berhasil |
| 4 | Update tanpa mengubah kode sendiri | Mengubah nama API-101, kode tetap API-101 | Data berhasil diperbarui | Nama berhasil diperbarui dan muncul pesan sukses | Berhasil |
| 5 | Validasi nama terlalu pendek | Nama kursus `AI` | Sistem menolak nama kurang dari 3 karakter | Sistem menolak perubahan | Berhasil |
| 6 | Validasi kuota minimum | Kuota `0` | Sistem menolak kuota di bawah 1 | Sistem menolak perubahan | Berhasil |
| 7 | Validasi kuota melebihi batas | Kuota `501` | Sistem menolak kuota di atas 500 | Sistem menolak perubahan | Berhasil |
| 8 | Validasi batas maksimum kuota | Kuota `500` | Sistem menerima kuota 500 | Data berhasil diperbarui | Berhasil |
| 9 | Validasi batas minimum kuota | Kuota `1` | Sistem menerima kuota 1 | Data berhasil diperbarui | Berhasil |
| 10 | Validasi kode kursus duplikat | Mengubah kode API-101 menjadi AJAX-101 | Sistem menolak kode yang sudah digunakan | Muncul pesan `The code has already been taken` | Berhasil |
| 11 | Menambahkan data percobaan | Kode DEL-001 | Data kursus percobaan berhasil disimpan | Data DEL-001 berhasil ditambahkan | Berhasil |
| 12 | Menghapus data percobaan | Menghapus kursus DEL-001 | Data terhapus dan muncul pesan sukses | DEL-001 berhasil dihapus, delapan data utama tetap ada | Berhasil |

## Kesimpulan

Berdasarkan 12 skenario pengujian yang telah dilakukan, fitur CRUD Course pada aplikasi KursusKu berjalan sesuai hasil yang diharapkan. Validasi input, proses pembaruan data, serta penghapusan data percobaan berhasil diuji. Seluruh pengujian memperoleh status Berhasil.

Pengujian dilakukan menggunakan data lokal pada aplikasi KursusKu.