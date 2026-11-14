# Lab7Web_PHP - Praktikum 7: Pemrograman Server-Side dengan PHP

**Nama:** Rifki Ade Tia
**NIM:** 312510334
**Kelas:** I253C

## Tujuan
Mempelajari dasar PHP: variabel, percabangan, perulangan, function, pemrosesan form (GET dan POST), serta validasi input di sisi server.

## Perangkat
- XAMPP (Apache + PHP 8.2)
- Visual Studio Code
- Google Chrome

## Cara Menjalankan
1. Buka XAMPP Control Panel, klik **Start** pada Apache.
2. Letakkan folder ini di `C:\xampp\htdocs\Lab7web_PHP`.
3. Buka browser: `http://localhost/Lab7web_PHP/`

## Struktur File
```
Lab7Web_PHP/
├── Latihan 1-7/
│   ├── index.php        (Latihan 1)
│   ├── latihan2.php
│   ├── latihan3.php
│   ├── latihan4.php
│   ├── latihan5.php     
│   ├── latihan6.php
│   └── latihan7.php
├── Mini project/
│   └── data_mahasiswa.php
└── README.md

## Ringkasan Hasil
| Latihan | Hasil |
|---|---|
| 1 | PHP berhasil dijalankan, tampil teks dan waktu server |
| 2 | Nilai akhir dan predikat dihitung dengan benar (contoh 84,90 = B) |
| 3 | Daftar mahasiswa tampil dengan foreach |
| 4 | Function diskon dan function tambahan berjalan (Rp135.000) |
| 5 | Form GET, URL berubah menjadi `?kata=...` |
| 6 | Form POST, input ditampilkan aman dengan htmlspecialchars() |
| 7 | Subtotal dihitung, input tidak valid ditolak |
| Mini Project | Formulir data mahasiswa dengan validasi server-side |

## Pengujian Mini Project
| Jenis | Input | Hasil |
|---|---|---|
| Valid | Data lengkap, semester 3, email rifki@mail.com | Ringkasan data tampil |
| Valid | Data lengkap, semester 14, email ade@kampus.ac.id | Ringkasan data tampil |
| Tidak valid | Email `rifki@` | Muncul pesan "Format email tidak valid." |
| Tidak valid | Semester `15` | Muncul pesan "Semester harus berupa angka 1-14." |

## Kesimpulan
PHP berjalan di sisi server dan mengirim hasil HTML ke browser. Data form harus divalidasi di server dan ditampilkan dengan `htmlspecialchars()` agar aman.
