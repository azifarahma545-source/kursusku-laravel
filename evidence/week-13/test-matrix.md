# Test Matrix — KursusKu Pertemuan 13

| No. | Skenario | Input | Expected Result | Actual Result | Status |
|---|---|---|---|---|---|
| 1 | Pencarian 0 hasil | `q=tidak-ada-xyz-999` | Pesan data tidak ditemukan tampil | Pesan data tidak ditemukan tampil | Pass |
| 2 | Pencarian 1 hasil | `q=P13-01` | Satu kursus yang sesuai tampil | Satu kursus tampil | Pass |
| 3 | Data lebih dari 10 | Semua kursus | Maksimal 10 data per halaman dan tersedia halaman berikutnya | 10 data tampil di halaman pertama dan data sisanya di halaman kedua | Pass |
| 4 | Kata kunci dengan spasi | `q=  Web  ` | Pencarian tetap menghasilkan data yang sesuai | Data kursus berhasil ditemukan | Pass |
| 5 | Filter dan halaman 2 | `status=open&page=2` | Filter Open tetap terpilih saat membuka halaman kedua | Filter Open tetap terpilih dan halaman kedua terbuka | Pass |

**Kesimpulan:** Kelima skenario pengujian fitur pencarian, filter status, dan pagination berhasil dijalankan.