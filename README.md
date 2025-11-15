# TP8DPBO2425C1

## Janji
Saya Muhammad Rizkiana Pratama dengan NIM 2404421 mengerjakan Tugas Praktikum 8 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## 🏗️ Arsitektur MVC
Aplikasi ini menggunakan pola Model-View-Controller (MVC), yang membagi sistem menjadi tiga bagian utama agar lebih terstruktur:

### **Model**
Mengelola seluruh proses terkait data, termasuk logika bisnis dan aturan aplikasi. Komponen ini berhubungan langsung dengan database.

### **View**
Menyajikan informasi kepada pengguna serta menangani input yang diberikan pengguna melalui antarmuka.

### **Controller**
Berfungsi sebagai penghubung antara View dan Model. Controller menerima permintaan dari pengguna, memprosesnya (bila perlu melalui Model), lalu mengirimkan hasilnya kembali ke View.

## Desain Database
<img width="933" height="349" alt="Screenshot 2025-11-15 190452" src="https://github.com/user-attachments/assets/7033620b-2052-48ed-b96f-8a54423eacfc" />

## Desain Program

### **Model** (`/models`)
- `BaseModel.php` - Kelas dasar untuk operasi database
- `Course.php` - Model untuk data kursus
- `Department.php` - Model untuk data Jurusan
- `Lecturer.php` - Model untuk data dosen

### **View** (`/views`)
- Template reusable di `/templates` (header, footer)
- Folder terstruktur: `Course/`, `Department/`, `Lecturer/`
- Setiap resource memiliki: `index.php`, `create.php`, `edit.php`

### **Controller** (`/controllers`)
- `BaseController.php` - Kelas dasar controller
- `CourseController.php` - Logika Matkul
- `DepartmentController.php` - Logika Jurusan
- `LecturerController.php` - Logika dosen
- `HomeController.php` - Halaman utama


## 🔄 Alur Program

1. **User akses** `index.php`
2. **Router** mengarahkan ke Controller yang sesuai
3. **Controller** memproses request dan berinteraksi dengan Model
4. **Model** query ke database
5. **View** render data dengan template Bootstrap
6. **Response** dikirim ke browser

## Fitur Utama:
- ✅ CRUD Kursus
- ✅ CRUD Jurusan
- ✅ CRUD Dosen


## 🚀 Cara Menggunakan

1. Import database: `tp_mvc25.sql`
2. Konfigurasi koneksi di `/config/database.php`
3. Jalankan aplikasi melalui web server
4. Navigasi menu untuk CRUD operations

## 📁 Struktur File

```
tp_mvc25/
│   index.php                ← File utama aplikasi, menangani routing awal ke controller.
│   README.md                ← Dokumentasi proyek, cara instalasi & penjelasan dasar.
│   tp_mvc25.sql             ← Dump database untuk import ke MySQL.
│
├───assets/                  ← Folder untuk file statis (CSS, JS).
│   ├───css/
│   │       bootstrap.min.css   ← File CSS Bootstrap untuk styling tampilan.
│   │
│   └───js/
│           bootstrap.bundle.min.js ← JS Bootstrap + Popper untuk komponen interaktif.
│           bootstrap.min.js        ← Versi JS Bootstrap tanpa Popper.
│           jquery.min.js           ← Library jQuery untuk manipulasi DOM.
│           popper.min.js           ← Library Popper.js untuk dropdown, tooltip, dll.
│
├───config/                  ← Folder konfigurasi utama aplikasi.
│       database.php         ← Koneksi database (host, user, password, dbname).
│
├───controllers/             ← Tempat semua controller (pengatur logika & alur data).
│       BaseController.php       ← Class dasar controller (fungsi helper umum).
│       CourseController.php     ← Controller untuk fitur manajemen mata kuliah.
│       DepartmentController.php ← Controller untuk fitur manajemen jurusan.
│       HomeController.php       ← Controller untuk halaman utama (home).
│       LecturerController.php   ← Controller untuk fitur manajemen dosen.
│
├───dokumentasi/             ← Tempat file dokumentasi tambahan (laporan/proposal).
│
├───models/                  ← Tempat semua model (representasi tabel database).
│       BaseModel.php        ← Class dasar model, biasanya untuk fungsi DB umum.
│       Course.php           ← Model untuk tabel `course` (CRUD).
│       Department.php       ← Model untuk tabel `department`.
│       Lecturer.php         ← Model untuk tabel `lecturer`.
│
└───views/                   ← Tempat semua tampilan (UI yang dilihat user).
    │   home.php             ← Tampilan halaman utama (Home).
    │
    ├───Course/
    │       create.php       ← Form tambah mata kuliah.
    │       edit.php         ← Form edit mata kuliah.
    │       index.php        ← Daftar seluruh mata kuliah.
    │
    ├───Department/
    │       create.php       ← Form tambah jurusan.
    │       edit.php         ← Form edit jurusan.
    │       index.php        ← Daftar seluruh jurusan.
    │
    ├───Lecturer/
    │       create.php       ← Form tambah dosen.
    │       edit.php         ← Form edit dosen.
    │       index.php        ← Daftar seluruh dosen.
    │
    └───templates/
            footer.php        ← Bagian bawah layout (penutup HTML, script JS).
            header.php        ← Bagian atas layout (navbar, import CSS, tag HTML).

```

## 📹 Dokumentasi & Screen Record
https://github.com/user-attachments/assets/2f357b5f-8a5a-48a1-9364-1d2ba1ace0a6



