# Praktikum 11 - 12 - 13 & 14 PHP OOP
**Nama:** Mahfuz Fauzi  
**Kelas:** TI.24.A.3  
**NIM:** 312410412  
**Mata Kuliah:** Pemrograman Web  
**Dosen Pengampu:** Agung Nugroho, S.Kom., M.Kom  
**Universitas Pelita Bangsa**

---

## 🧩 Langkah-langkah Praktikum

## A. Persiapan Database

Kita membutuhkan tabel untuk menyimpan data pengguna (admin).

## 1. Buat Tabel Users

Jalankan SQL berikut di phpMyAdmin pada database latihan_oop:

```
CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50) NOT NULL,
password VARCHAR(255) NOT NULL,
nama VARCHAR(100)
);
```

<img src="https://github.com/Mahfuz311/Lab11Web/blob/4dd65bbf5b309dccaf07733ee5f7634c3e44efcc/lab11_php_oop/screeenshot/1.%20cmd.png" width="40%">

---

## 2. Insert Data Dummy (User Admin)

Password harus di-hash (dienkripsi). Untuk contoh ini, kita buat user dengan password
"admin123".
Jalankan SQL ini:

```
-- Password hash dari "admin123"
INSERT INTO users (username, password, nama)
VALUES ('admin', '$2y$10$uWdZ2x.hQfGqGz/..q7wue.3/a/e/e/e/e/e/e/e/e/e/e',
'Administrator');
```

<img src="https://github.com/Mahfuz311/Lab11Web/blob/4dd65bbf5b309dccaf07733ee5f7634c3e44efcc/lab11_php_oop/screeenshot/2.%20cmd.png">

---

## B. Update Routing (index.php)

Saya memodifikasi index.php agar mengecek apakah user sudah login atau belum
sebelum membuka halaman tertentu.

**Buka dan edit file `index.php`:**

<img src="https://github.com/Mahfuz311/Lab11Web/blob/4dd65bbf5b309dccaf07733ee5f7634c3e44efcc/lab11_php_oop/screeenshot/3.%20vscode.png" width="40%">

---

## C. Membuat Modul User (Login & Logout)

Buat folder baru: `module/user/`.

## 1. File: `module/user/login.php`

Halaman ini berisi Form Login dan logika pemrosesan saat tombol submit ditekan.

<img src="https://github.com/Mahfuz311/Lab11Web/blob/4dd65bbf5b309dccaf07733ee5f7634c3e44efcc/lab11_php_oop/screeenshot/4.%20vscode.png" width="40%">

---

## 2. File: module/user/logout.php

File untuk menghapus session.

<img src="https://github.com/Mahfuz311/Lab11Web/blob/4dd65bbf5b309dccaf07733ee5f7634c3e44efcc/lab11_php_oop/screeenshot/5.%20vscode.png" width="40%">

---

## D. Penyesuaian Tampilan (Header)

Kita perlu mengubah template/header.php agar menu navigasi berubah dinamis:
- Jika Belum Login: Tampilkan menu Home dan Login.
- Jika Sudah Login: Tampilkan menu Home, Artikel, dan Logout.

**Update `template/header.php`:**

<img src="https://github.com/Mahfuz311/Lab11Web/blob/4dd65bbf5b309dccaf07733ee5f7634c3e44efcc/lab11_php_oop/screeenshot/6.%20vscode.png" width="40%">

---

## E. Langkah Uji Coba

### 1. Akses Halaman Artikel (Tanpa Login):

Buka browser: http://localhost/lab11_php_oop/artikel/index.
Otomatis terlempar (redirect) ke halaman user/login.

**Output:**

<img src="https://github.com/Mahfuz311/Lab11Web/blob/4dd65bbf5b309dccaf07733ee5f7634c3e44efcc/lab11_php_oop/screeenshot/7.%20web.png" width="800">

---

### 2. Lakukan Login:

Masukkan username: admin dan password: admin123.
Hasil: Jika sukses, kamu akan diarahkan ke halaman artikel, dan di pojok kanan atas
muncul menu "Logout (Administrator)".

**Output:**

<img src="https://github.com/Mahfuz311/Lab11Web/blob/4dd65bbf5b309dccaf07733ee5f7634c3e44efcc/lab11_php_oop/screeenshot/8.%20web.png"  width="800">

saya memasukan username: Admin dan Password: Admin123

---

### 3. Akses CRUD

### Tambah Data Barang:

<img src="https://github.com/Mahfuz311/Lab11Web/blob/4dd65bbf5b309dccaf07733ee5f7634c3e44efcc/lab11_php_oop/screeenshot/9.%20web.png" width="800">

**Disini saya menambahkan Data Barang: Iphone 17 Pro Max.**

<img src="https://github.com/Mahfuz311/Lab11Web/blob/4dd65bbf5b309dccaf07733ee5f7634c3e44efcc/lab11_php_oop/screeenshot/10.%20web.png" width="800">

Lalu klik Simpan.

**Hasil Outputnya:**

<img src="https://github.com/Mahfuz311/Lab11Web/blob/4dd65bbf5b309dccaf07733ee5f7634c3e44efcc/lab11_php_oop/screeenshot/11.%20web.png" width="800">

---

### Edit Data Barang

Mengedit Data Barang Poco F6:

<img src="https://github.com/Mahfuz311/Lab11Web/blob/4dd65bbf5b309dccaf07733ee5f7634c3e44efcc/lab11_php_oop/screeenshot/12.%20web.png" width="800">

**Mengubah Harga Jual, Harga Beli dan Jumlah Stok**

<img src="https://github.com/Mahfuz311/Lab11Web/blob/4dd65bbf5b309dccaf07733ee5f7634c3e44efcc/lab11_php_oop/screeenshot/13.%20web.png" width="800">

Lalu Klik Simpan.

**Hasil Outputnya:**

<img src="https://github.com/Mahfuz311/Lab11Web/blob/4dd65bbf5b309dccaf07733ee5f7634c3e44efcc/lab11_php_oop/screeenshot/14.%20web.png" width="800">

---

### Hapus Data Barang

Di sini saya akan menghapus Data barang Hp Poco F6, Klik ikon Hapus yang berwarna Merah, maka akan muncul Pop up Notifikasi:

<img src="https://github.com/Mahfuz311/Lab11Web/blob/4dd65bbf5b309dccaf07733ee5f7634c3e44efcc/lab11_php_oop/screeenshot/15.%20web.png" width="800">

Klik OK

Maka Data Barang Akan terhapus.

**Outputnya:**

<img src="https://github.com/Mahfuz311/Lab11Web/blob/4dd65bbf5b309dccaf07733ee5f7634c3e44efcc/lab11_php_oop/screeenshot/16.%20web.png" width="800">

**SEMUA BERJALAN NORMAL**

---

### Logout

Klik Menu `Logout` yang ada di pojok kanan atas halaman.

<img src="https://github.com/Mahfuz311/Lab11Web/blob/4dd65bbf5b309dccaf07733ee5f7634c3e44efcc/lab11_php_oop/screeenshot/16.%20web.png" width="800">

Maka Akan Kembali ke halaman `Login`.

<img src="https://github.com/Mahfuz311/Lab11Web/blob/4dd65bbf5b309dccaf07733ee5f7634c3e44efcc/lab11_php_oop/screeenshot/17.%20web.png" width="800">

---

## F. Tugas Praktikum

### 1. Tambahkan fitur "Profil". Buat halaman di module/user/profile.php yang menampilkan data user yang sedang login (Nama, Username) dan form untuk mengubah Password.

**Outputnya:**

<img src="https://github.com/Mahfuz311/Lab11Web/blob/4dd65bbf5b309dccaf07733ee5f7634c3e44efcc/lab11_php_oop/screeenshot/18.%20web.png" width="800">

Disini saya Merubah Nama Lengkap dan mengganti passwordnya.

<img src="https://github.com/Mahfuz311/Lab11Web/blob/4dd65bbf5b309dccaf07733ee5f7634c3e44efcc/lab11_php_oop/screeenshot/19.%20web.png" width="800">

**Klik Simpan Perubahan**

Maka Muncul "Profil berhasil diperbarui!"

<img src="https://github.com/Mahfuz311/Lab11Web/blob/4dd65bbf5b309dccaf07733ee5f7634c3e44efcc/lab11_php_oop/screeenshot/20.%20web.png" width="800">

**Saya akan Coba Login Menggunakan Password yang baru**

<img src="https://github.com/Mahfuz311/Lab11Web/blob/4dd65bbf5b309dccaf07733ee5f7634c3e44efcc/lab11_php_oop/screeenshot/22.%20web.png" width="800">

Klik Login.

<img src="https://github.com/Mahfuz311/Lab11Web/blob/4dd65bbf5b309dccaf07733ee5f7634c3e44efcc/lab11_php_oop/screeenshot/23.%20web.png" width="800">

Login Berhasil

### 2. Implementasikan logika enkripsi password (password_hash) saat mengubah password di fitur profil tersebut.

Sudah saya Implementasikan

---

## 📋 Deskripsi Proyek
Aplikasi ini adalah sistem manajemen inventaris sederhana (Data Barang) yang dibangun menggunakan PHP Native dengan pendekatan **Object Oriented Programming (OOP)** dan struktur **Modular**. Aplikasi ini mencakup fitur autentikasi user, manajemen data barang (CRUD), upload file, serta fitur tambahan seperti pencarian dan pagination.

---

# Praktikum 13 & 14

## Melengkapi link previous dan next sehingga ketika diklik akan mengarah ke halaman sebelumnya atau selanjutnya

**Outputnya:**

<img src="

