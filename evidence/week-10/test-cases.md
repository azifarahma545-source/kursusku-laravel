# Test Cases Praktikum Pertemuan 10 – KursusKu

## Pengujian CRUD Course

| No. | Skenario | Input Utama | Hasil yang Diharapkan | Hasil Aktual | Status |
|---|---|---|---|---|---|
| 1 | Simpan data valid | Semua field diisi dengan benar | Data tersimpan, diarahkan ke halaman index, dan muncul pesan sukses | Isi sesuai hasil pengujian | Isi Lulus/Gagal |
| 2 | Kode kosong | Code dikosongkan | Validasi gagal dan data tidak tersimpan | The code field is required | Lulus |
| 3 | Kode duplikat | Menggunakan kode WEB-101 yang sudah ada | Ditolak oleh validasi unique | The code has already been taken | Lulus |
| 4 | Nama kosong | Name dikosongkan | Validasi gagal dan data tidak tersimpan | The name field is required | Lulus |
| 5 | Biaya negatif | Fee = -1000 | Ditolak karena nilai minimum biaya adalah 0 | Isi sesuai hasil pengujian | Isi Lulus/Gagal |
| 6 | Kuota 0 | Quota = 0 | Ditolak karena kuota minimal adalah 1 | Isi sesuai hasil pengujian | Isi Lulus/Gagal |
| 7 | Status tidak valid | Status diubah menjadi active | Ditolak karena status hanya boleh draft, open, atau closed | Isi sesuai hasil pengujian | Isi Lulus/Gagal |
| 8 | Daftar tampil ulang | Reload halaman /courses | Data kursus tetap tampil karena tersimpan di database MySQL | 8 data kursus tampil setelah reload | Lulus |

## Kesimpulan

Pengujian dilakukan untuk memastikan proses penyimpanan dan penampilan data kursus berjalan dengan baik serta validasi dapat menolak input yang tidak sesuai aturan.

Catatan: Hasil aktual dan status pengujian harus disesuaikan dengan hasil yang benar-benar diperoleh saat pengujian.