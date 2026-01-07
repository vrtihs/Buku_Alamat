# Aplikasi Buku Alamat Berbasis Web

## Deskripsi Singkat
Aplikasi Buku Alamat merupakan aplikasi web berbasis PHP native yang digunakan untuk menyimpan dan mengelola data kontak pribadi. Aplikasi ini memungkinkan pengguna untuk menambahkan, melihat, mengedit, dan menghapus data kontak seperti nama, nomor telepon, email, serta kategori kontak.  
Project ini dikembangkan sebagai bagian dari persyaratan penilaian mata kuliah **Back-End Web Development**.

## Daftar Anggota Kelompok

| No | Nama | NIM | GitHub |
|----|------|-----|--------|
| 1 | Ni Putu Victoria Ratih Susanti | 240030259 | vriths |
| 2 | Ni Putu Amel Angelina Putri | 240030246 | amel2005-git |
| 3 | Gusti Ayu Putri Satya Pradewi Widhiantara | 240030252 | gaputrisatya-hash |
| 4 | Naila Batheff | 240030185 | batheffnaila-rgb |


## Lingkungan Pengembangan
Teknologi yang digunakan dalam pengembangan aplikasi ini adalah:
- **Bahasa Pemrograman**: PHP Native (tanpa framework back-end)
- **Database**: MySQL / MariaDB
- **Front-End**: HTML, CSS, JavaScript
- **Framework Front-End**: Bootstrap 5
- **Web Server**: Apache (XAMPP)
- **Text Editor**: Visual Studio Code
- **Version Control**: Git & GitHub

## Hasil Pengembangan (Fitur Aplikasi)
Fitur utama yang berhasil diimplementasikan pada aplikasi Buku Alamat meliputi:

1. **Menampilkan Daftar Kontak**  
   Menampilkan seluruh data kontak yang tersimpan di database dalam bentuk tabel.

2. **Menambah Kontak Baru**  
   Pengguna dapat menambahkan kontak baru melalui form input.

3. **Mengedit Data Kontak**  
   Pengguna dapat memperbarui data kontak yang sudah ada.

4. **Menghapus Kontak**  
   Pengguna dapat menghapus data kontak dengan konfirmasi terlebih dahulu.

5. **Melihat Detail Kontak**  
   Menampilkan informasi lengkap sebuah kontak, termasuk nomor telepon, email, kategori, dan catatan.

6. **Pengelompokan Kategori Kontak**  
   Kontak dapat diklasifikasikan ke dalam kategori Teman, Keluarga, Kerja, dan Lainnya.

## Struktur Folder

assets/ - folder penyimpanan gambar

config/ — konfigurasi koneksi database (database.php)

public/ — file utama aplikasi (index, create, edit, delete, view)

README.md — dokumentasi project

## Uji Coba Singkat

Buka index.php untuk melihat daftar kontak.

Klik Tambah Kontak (create.php) lalu simpan data.

Pastikan data muncul di halaman utama.

Klik Edit untuk memperbarui data kontak.

Klik Hapus untuk menghapus kontak yang dipilih.

Klik salah satu kontak untuk melihat detail (view.php).
