# Sistem Manajemen Blog (CMS)

## Informasi Pembuat

- **Nama Lengkap**: FARIL ISRA ALBIANSYAH
- **NIM**: 240605110087

---

## Deskripsi Aplikasi

Aplikasi ini adalah **Sistem Manajemen Blog (CMS - Content Management System)** yang dibangun menggunakan PHP dan MySQL. CMS ini menyediakan fitur lengkap untuk mengelola konten blog termasuk:

- **Manajemen Artikel**: Tambah, ubah, hapus, dan lihat artikel blog
- **Manajemen Kategori**: Organisir artikel ke dalam berbagai kategori
- **Manajemen Penulis**: Kelola data penulis/author artikel
- **Unggah Media**: Mendukung pengunggahan gambar untuk artikel dan profil penulis

Aplikasi ini dirancang dengan antarmuka yang user-friendly dan responsif, menggunakan HTML5, CSS3, dan JavaScript untuk memberikan pengalaman pengguna yang optimal.

---

## Teknologi yang Digunakan

- **Backend**: PHP 7+
- **Database**: MySQL
- **Frontend**: HTML5, CSS3, JavaScript
- **Ikon**: Font Awesome 6.4.0
- **Font**: Segoe UI, Tahoma, Geneva, Verdana

---

## Struktur File

```
blog/
├── index.php                  # Halaman utama aplikasi
├── koneksi.php               # File konfigurasi koneksi database
│
├── ambil_*.php               # File untuk mengambil data dari database
│   ├── ambil_artikel.php
│   ├── ambil_kategori.php
│   ├── ambil_opsi.php
│   ├── ambil_penulis.php
│   ├── ambil_satu_artikel.php
│   ├── ambil_satu_kategori.php
│   └── ambil_satu_penulis.php
│
├── simpan_*.php              # File untuk menyimpan data baru
│   ├── simpan_artikel.php
│   ├── simpan_kategori.php
│   └── simpan_penulis.php
│
├── update_*.php              # File untuk memperbarui data
│   ├── update_artikel.php
│   ├── update_kategori.php
│   └── update_penulis.php
│
├── hapus_*.php               # File untuk menghapus data
│   ├── hapus_artikel.php
│   ├── hapus_kategori.php
│   └── hapus_penulis.php
│
├── uploads_artikel/          # Folder penyimpanan gambar artikel
├── uploads_penulis/          # Folder penyimpanan gambar penulis
│
└── README.md                 # File dokumentasi ini
```

---

## Persyaratan Sistem

- **XAMPP** atau web server lainnya dengan PHP 7+
- **MySQL** 5.7 atau lebih tinggi
- **Web Browser** modern (Chrome, Firefox, Safari, Edge)

---

## Langkah-Langkah Menjalankan Aplikasi Secara Lokal

### 1. **Setup Database**

- Buka **phpMyAdmin** (biasanya di `http://localhost/phpmyadmin`)
- Buat database baru dengan nama `db_blog`
- Import file SQL (jika ada) atau buat tabel-tabel berikut:
  - `tbl_artikel` (untuk menyimpan artikel)
  - `tbl_kategori` (untuk menyimpan kategori)
  - `tbl_penulis` (untuk menyimpan data penulis)

### 2. **Konfigurasi Koneksi Database**

- Buka file `koneksi.php`
- Pastikan konfigurasi database sesuai dengan sistem Anda:
  ```php
  $host = "localhost";      // Host database
  $username = "root";        // Username MySQL (default: root)
  $password = "";            // Password MySQL (default: kosong untuk XAMPP lokal)
  $database = "db_blog";     // Nama database
  ```
- Simpan perubahan jika ada

### 3. **Tempatkan File ke Folder Web Server**

- Pastikan folder `blog` berada di dalam folder web server:
  - Untuk XAMPP: `C:\xampp\htdocs\blog`
  - Untuk WAMP: `C:\wamp64\www\blog`
  - Untuk LAMP: `/var/www/html/blog`

### 4. **Mulai Web Server dan Database**

- **Untuk XAMPP**:
  - Buka aplikasi XAMPP Control Panel
  - Klik tombol **Start** untuk Apache
  - Klik tombol **Start** untuk MySQL
  - Pastikan kedua layanan berstatus "Running" (warna hijau)

### 5. **Akses Aplikasi**

- Buka web browser
- Ketikkan URL: `http://localhost/blog/` atau `http://localhost/blog/index.php`
- Aplikasi siap digunakan!

### 6. **Membuat Folder untuk Unggahan (Jika Belum Ada)**

- Pastikan folder berikut sudah ada dan memiliki izin tulis:
  - `uploads_artikel/` - untuk menyimpan gambar artikel
  - `uploads_penulis/` - untuk menyimpan foto penulis
- Jika belum ada, buat folder tersebut secara manual atau sistem akan membuat otomatis saat pertama kali mengunggah

---

## Fitur Utama

### 📝 Manajemen Artikel
- Tambah artikel baru dengan judul, konten, kategori, penulis, dan gambar
- Edit artikel yang sudah ada
- Hapus artikel
- Lihat daftar semua artikel

### 📂 Manajemen Kategori
- Tambah kategori baru
- Edit nama kategori
- Hapus kategori
- Lihat semua kategori

### ✍️ Manajemen Penulis
- Tambah data penulis baru
- Edit profil penulis
- Hapus data penulis
- Unggah foto penulis

---

## 🎥 Video Demonstrasi

Untuk melihat cara kerja aplikasi, tonton video demonstrasi berikut:

**[▶️ Demonstrasi Sistem Manajemen Blog](https://youtu.be/XoiqvWuX1qA?si=V98WTzgbUVN9Wthw)**

Video ini menunjukkan:
- Cara membuka dan menggunakan aplikasi
- Menambah, mengedit, dan menghapus artikel
- Mengelola kategori dan penulis
- Mengunggah gambar
- Navigasi dan fitur-fitur utama lainnya

---

## Troubleshooting

| Masalah | Solusi |
|---------|--------|
| **"Koneksi gagal"** | Periksa konfigurasi di `koneksi.php`, pastikan MySQL berjalan |
| **Error 404 (halaman tidak ditemukan)** | Pastikan path folder benar di `C:\xampp\htdocs\blog` |
| **Gambar tidak terunggah** | Periksa apakah folder `uploads_artikel/` dan `uploads_penulis/` ada dan dapat ditulis |
| **Database tidak ditemukan** | Buat database `db_blog` melalui phpMyAdmin |
| **Blank page (halaman kosong)** | Periksa error log PHP atau aktifkan error reporting di `index.php` |

---

## Catatan Penting

- Pastikan izin folder `uploads_*` memungkinkan penulisan file baru
- Backup database secara berkala untuk keamanan data
- Gunakan prepared statements untuk meningkatkan keamanan (jika sudah diterapkan)
- Tidak ada login/authentication di aplikasi ini - ini hanya untuk development lokal

---

## Pengembangan Lebih Lanjut

Fitur-fitur yang dapat ditambahkan di masa depan:
- Sistem login dan autentikasi pengguna
- Fitur pencarian dan filter artikel
- Pagination untuk daftar artikel
- API RESTful
- Dashboard analytics
- Keamanan tambahan (CSRF protection, SQL injection prevention)

---

**Dibuat untuk keperluan pembelajaran dan pengembangan web.**
