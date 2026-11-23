# Draft Artikel Pertemuan 13

## Judul Sementara
Pengembangan Fitur Pencarian, Filter Status, dan Pagination pada Sistem Informasi KursusKu Berbasis Laravel

## 1. Latar Belakang dan Permasalahan

Sistem Informasi KursusKu merupakan aplikasi berbasis web yang digunakan untuk mengelola informasi dan data kursus. Seiring bertambahnya jumlah data kursus, pengguna membutuhkan cara yang lebih mudah untuk menemukan kursus berdasarkan kata kunci dan statusnya.

Pada versi sebelumnya, daftar kursus belum dilengkapi fitur pencarian, filter status, dan pagination secara terpadu. Kondisi tersebut dapat menyulitkan pengguna ketika harus mencari data tertentu dari daftar kursus yang semakin banyak.

## 2. Research Gap

Pengembangan sebelumnya telah menyediakan pengelolaan data kursus melalui fitur CRUD. Namun, kebutuhan untuk mencari data berdasarkan kode atau nama kursus, menyaring berdasarkan status, dan membagi data ke beberapa halaman belum terpenuhi secara terpadu.

Oleh karena itu, pengembangan ini berfokus pada penambahan fitur pencarian, filter status, dan pagination untuk meningkatkan kemudahan pengelolaan data kursus.

## 3. Metode Pengembangan dan Pengujian

Pengembangan dilakukan melalui beberapa tahap:
1. Mengidentifikasi kebutuhan pencarian dan penyaringan data kursus.
2. Mengimplementasikan pencarian berdasarkan kode dan nama kursus.
3. Menambahkan filter berdasarkan status Open, Closed, dan Draft.
4. Menerapkan pagination dengan batas 10 data per halaman.
5. Mempertahankan parameter pencarian dan filter saat berpindah halaman menggunakan `withQueryString()`.
6. Melakukan pengujian terhadap fitur yang telah dikembangkan.

Pengujian dilakukan menggunakan lima skenario, yaitu pencarian tanpa hasil, pencarian satu hasil, data lebih dari 10, kata kunci dengan spasi, serta kombinasi filter status dan halaman kedua.

## 4. Hasil Sementara

Berdasarkan pengujian yang telah dilakukan, kelima skenario pengujian berhasil dijalankan. Sistem dapat menampilkan pesan ketika data tidak ditemukan, menampilkan hasil pencarian, membatasi tampilan menjadi maksimal 10 data per halaman, serta mempertahankan filter status ketika pengguna berpindah halaman.

Fitur pencarian dan filter juga dapat digunakan melalui formulir GET sehingga proses pengiriman pencarian tidak bergantung pada JavaScript.

## 5. Kesimpulan Sementara

Penambahan fitur pencarian, filter status, dan pagination membuat pengelolaan daftar kursus pada KursusKu menjadi lebih terstruktur. Hasil pengujian awal menunjukkan bahwa seluruh lima skenario yang direncanakan berhasil dijalankan.