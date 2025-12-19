# 🏢 Company Profile Web Application

Aplikasi website profil perusahaan (Company Profile) yang dinamis, dibangun menggunakan **PHP Native** dan **MySQL**. Website ini menggunakan template frontend berbasis **Bootstrap 5** yang responsif dan dilengkapi dengan halaman Admin untuk mengelola konten.

## ✨ Fitur Utama

### 🖥️ Frontend (Pengunjung)
* **Halaman Home Dinamis:** Menampilkan slider, tentang kami, klien, dan layanan yang dapat diubah dari admin.
* **Portofolio:** Galeri proyek dengan kategori (Web, App, Card, dll).
* **Blog/Artikel:** Menampilkan berita atau artikel terbaru dengan kategori dan tags.
* **Tentang Kami & Klien:** Informasi perusahaan dan daftar klien yang bekerja sama.
* **Responsive Design:** Tampilan rapi di Desktop, Tablet, dan Mobile (menggunakan Bootstrap 5).

### ⚙️ Backend (Administrator)
* **Dashboard Admin:** Ringkasan data website.
* **Manajemen Konten (CRUD):**
    * Pengaturan Umum (Logo, Email, No HP, Sosmed).
    * Kelola Sliders (Banner Utama).
    * Kelola Halaman About.
    * Kelola Data Klien.
    * Kelola Portofolio & Kategori.
    * Kelola Blog/Artikel.
* **Manajemen User:** Tambah/Edit/Hapus pengguna admin.

## 🛠️ Teknologi yang Digunakan

* **Bahasa Pemrograman:** PHP (Native)
* **Database:** MySQL
* **Frontend Framework:** Bootstrap 5.3.3
* **Template:** Company by BootstrapMade
* **Libraries:** AOS (Animate On Scroll), GLightbox, Swiper, Isotope

## 🚀 Cara Instalasi

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di komputer lokal (Localhost):

### 1. Persiapan Lingkungan
Pastikan Anda sudah menginstal **XAMPP** (Windows) atau **MAMP/LAMP** stack yang memiliki PHP dan MySQL.

### 2. Penempatan File
* Salin folder proyek ini ke dalam folder `htdocs` (jika menggunakan XAMPP).
    * Contoh: `C:\xampp\htdocs\compro`

### 3. Konfigurasi Database
1.  Buka **phpMyAdmin** (biasanya di `http://localhost/phpmyadmin`).
2.  Buat database baru dengan nama: **`database_ppkd1`**.
3.  Klik tab **Import**, lalu pilih file **`database.sql`** yang ada di dalam folder proyek ini.
4.  Klik **Go/Kirim** untuk mengimpor tabel dan data.

### 4. Konfigurasi Koneksi (Opsional)
Jika Anda menggunakan password database atau user selain root, sesuaikan file `admin/koneksi.php`:

```php
$_HOST = 'localhost';
$_USERNAME = 'root';     // Sesuaikan user database
$_PASSWORD = '';         // Sesuaikan password database
$_DATABASE = 'database_ppkd1';
