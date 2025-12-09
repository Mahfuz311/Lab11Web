# Praktikum 11 - PHP OOP Lanjutan
**Nama:** Mahfuz Fauzi  
**Kelas:** TI.24.A.3  
**NIM:** 312410412  
**Mata Kuliah:** Pemrograman Web  
**Dosen Pengampu:** Agung Nugroho, S.Kom., M.Kom  
**Universitas Pelita Bangsa**

---

## 🧩 Langkah-langkah Praktikum

### Menjalankan MySQL Server

Untuk menjalankan MySQL Server dari menu XAMPP Control panel.

<img src="https://github.com/Mahfuz311/Lab8Web/blob/cc1f6d0de626cf37fc95bafc566f4ea340f1e9a4/screenshot/1%20xampp.png" width="40%">

---

### Buat folder baru dengan nama ```lab11_php_oop``` pada docroot webserver ```(htdocs)```

Akses direktory tersebut pada web server dengan mengakses URL: http://localhost/lab11_php_oop/

Outputnya:

<img src="https://github.com/Mahfuz311/Lab11Web/blob/096e58a2502887590fd0f475adf3ba1b6e087ab1/screeenshot/0.%20output.png" width="800">

---

### A. Persiapan Struktur Folder

```
lab11_php_oop/
│
├── .htaccess           <-- Untuk keamanan & pengaturan URL
├── config.php          <-- Konfigurasi username/password database
├── index.php           <-- FILE UTAMA (Router / Pintu Masuk)
│
├── class/              <-- Folder khusus Logika Backend
│   └── database.php    <-- Class Database (CRUD)
│   └── form.php
|
├── gambar/             <-- Folder khusus menyimpan foto barang
│   ├── hp_iphone.png   
│   └── hp_samsung.png  
|   └── hp_xiaomi.png
|   └── pocof6.png
│
├── module/             <-- Folder khusus Halaman Konten
│   └── artikel/
│       ├── index.php   <-- Halaman Tabel Data (List)
│       ├── tambah.php  <-- Form Tambah Data
│       └── ubah.php    <-- Form Ubah Data
│
└── template/           <-- Folder khusus Tampilan (UI)
    ├── header.php      <-- Bagian Atas
    ├── footer.php      <-- Bagian Bawah
    └── sidebar.php     <-- Menu Samping
```

**Langkah 1:** Memindahkan file `Database.php` dan `Form.php` (dari praktikum sebelumnya) ke
dalam folder `class/`.

**Code `from.php`:**

<img src="https://github.com/Mahfuz311/Lab11Web/blob/096e58a2502887590fd0f475adf3ba1b6e087ab1/screeenshot/1.%20vscode.png" width="40%">


**Code `database.php`:**

<img src="https://github.com/Mahfuz311/Lab11Web/blob/096e58a2502887590fd0f475adf3ba1b6e087ab1/screeenshot/2.%20vscode.png" width="40%">

---

### B. Konfigurasi Dasar

**Code `config.php`:**

<img src="https://github.com/Mahfuz311/Lab11Web/blob/096e58a2502887590fd0f475adf3ba1b6e087ab1/screeenshot/3.%20vscode.png" width="40%">

---

## TUGAS DAN IMPLEMENTASI

### Tugas Praktikum Web: Implementasi Modularisasi & Routing

Project ini merupakan hasil refactoring dari struktur PHP native (flat) menjadi struktur yang lebih rapi menggunakan konsep **Modularisasi** dan **Routing**.

## 📂 Struktur Folder
Struktur project telah diubah untuk memisahkan antara logika (backend), tampilan (frontend/template), dan konten (module).

```
lab11_php_oop/
├── class/              # (Modularisasi Backend)
│   └── database.php    # Class OOP untuk koneksi & CRUD database
|   └── from.php
├── gambar
|   └── hp_iphone.png
|   └── hp_samsung.png
|   └── hp_xiaomi.png
|   └── pocof6.png
├── module/             # (Modularisasi Konten)
│   └── artikel/
│       ├── index.php   # Tampilan tabel data
│       ├── tambah.php  # Form tambah data
│       └── ubah.php    # Form ubah data
├── template/           # (Modularisasi UI)
│   ├── header.php      # Bagian atas halaman
│   ├── footer.php      # Bagian bawah halaman
│   └── sidebar.php     # Menu navigasi
├── config.php          # Konfigurasi Database
└── index.php           # (ROUTING UTAMA) Pintu masuk aplikasi
```

<img src="https://github.com/Mahfuz311/Lab11Web/blob/096e58a2502887590fd0f475adf3ba1b6e087ab1/screeenshot/4.%20folder_vscode.png" width="40%">

---

## 🚀 Implementasi Konsep

### 1. Konsep Routing
Aplikasi ini tidak lagi diakses dengan memanggil file secara langsung (seperti `tambah.php`), melainkan melalui **satu pintu masuk** yaitu `index.php`.

Mekanisme Routing ada di file `index.php`:

<img src="https://github.com/Mahfuz311/Lab11Web/blob/096e58a2502887590fd0f475adf3ba1b6e087ab1/screeenshot/5.%20vscode.png" width="40%">
<img src="https://github.com/Mahfuz311/Lab11Web/blob/096e58a2502887590fd0f475adf3ba1b6e087ab1/screeenshot/6.%20vscode.png" width="40%">

- Menggunakan parameter URL `?mod=` untuk menentukan halaman.
- Menggunakan parameter URL `&act=` untuk menentukan aksi (tambah/ubah).
- Kesimpulan: "Dengan cara ini, navigasi web menjadi terpusat di satu file."

**Code `.htaccess`:**

<img src="https://github.com/Mahfuz311/Lab11Web/blob/096e58a2502887590fd0f475adf3ba1b6e087ab1/screeenshot/7.1%20vscode.png" width="40%">

**Contoh URL:**
- **Home:** `index.php?mod=home`
- **Lihat Data:** `index.php?mod=artikel`
- **Tambah Data:** `index.php?mod=artikel&act=tambah`

### 2. Konsep Modularisasi
Kode program dipecah menjadi modul-modul kecil agar mudah dikelola (Maintainable):

<img src="https://github.com/Mahfuz311/Lab11Web/blob/096e58a2502887590fd0f475adf3ba1b6e087ab1/screeenshot/7.%20vscode.png" width="40%">

- **Database Class:** Koneksi dan query database dibungkus dalam Class `Database` di `class/database.php`.
- **Template Separation:** Bagian desain yang berulang (`header`, `sidebar`, `footer`) dipisahkan ke folder `template/`. File konten hanya berisi data inti saja.
- **Config:** Konfigurasi user/password database dipisah di `config.php` agar lebih aman dan mudah diganti.

---

## ⚙️ Demonstrasi di Browser

### 1. Halaman Home

<img src="https://github.com/Mahfuz311/Lab11Web/blob/096e58a2502887590fd0f475adf3ba1b6e087ab1/screeenshot/9.%20output.png" width="800">

- URL: http://localhost/lab11_php_oop/index.php?mod=home
- Tampilan: Selamat datang.

### 2. Halaman Data Barang

<img src="https://github.com/Mahfuz311/Lab11Web/blob/096e58a2502887590fd0f475adf3ba1b6e087ab1/screeenshot/10.%20output.png" width="800">

- URL: http://localhost/lab11_php_oop/index.php?mod=artikel
- Tampilan: Tabel data barang.

### 3. Halaman Tambah Data

<img src="https://github.com/Mahfuz311/Lab11Web/blob/096e58a2502887590fd0f475adf3ba1b6e087ab1/screeenshot/11.%20output.png" width="800">

---
- URL: http://localhost/lab11_php_oop/index.php?mod=artikel&act=tambah
- Tampilan: Form tambah data.
