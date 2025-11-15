<?php include __DIR__. '/../views/templates/header.php'; ?>

<!-- HERO SECTION -->
<div class="bg-primary text-white py-5">
    <div class="container">
        <h1 class="display-4 fw-bold">Universitas Bangton Rancaekek</h1>
        <p class="lead">
            Sistem Manajemen Universitas Bangton untuk mengelola data dosen, departemen, dan mata kuliah secara sederhana dan efisien.
            Universitas Bangton adalah Universitas terbaik di Rancaekek yang berkomitmen untuk memberikan pendidikan berkualitas tinggi dan pengalaman belajar yang luar biasa bagi para mahasiswanya.
            Jurusan unggulan kami meliputi Teknik Informatika, Sistem Informasi, Ilmu Doxing, yang didukung oleh dosen-dosen berpengalaman dan fasilitas modern.
            pfft aowaowka
        </p>
    </div>
</div>

<div class="container my-5">

    <!-- INTRO -->
    <div class="mb-5">
        <h2 class="fw-bold">Selamat Datang!</h2>
        <p class="text-muted">
            Ini adalah sistem berbasis MVC sederhana yang dirancang untuk membantu pengelolaan data di lingkungan kampus.
            Anda dapat menambahkan, mengubah, dan menghapus data terkait dosen, departemen, serta mata kuliah dengan mudah
            melalui menu navigasi di bagian atas.
        </p>
    </div>

    <!-- FEATURES CARDS -->
    <div class="row g-4">

        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h4 class="card-title fw-bold">Kelola Dosen</h4>
                    <p class="card-text text-muted">
                        Tambah, edit, dan hapus data dosen lengkap dengan NIDN, nomor telepon, dan tanggal bergabung.
                    </p>
                    <a href="index.php?controller=lecturer&action=index" class="btn btn-primary">Lihat Dosen</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h4 class="card-title fw-bold">Manajemen Jurusan</h4>
                    <p class="card-text text-muted">
                        Mengatur daftar Jurusan seperti Informatika, Teknik Elektro, dan lainnya.
                    </p>
                    <a href="index.php?controller=department&action=index" class="btn btn-primary">Lihat Jurusan</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h4 class="card-title fw-bold">Data Mata Kuliah</h4>
                    <p class="card-text text-muted">
                        Mengelola informasi mata kuliah termasuk kode, nama, jumlah SKS, dan dosen pengampu.
                    </p>
                    <a href="index.php?controller=course&action=index" class="btn btn-primary">Lihat Course</a>
                </div>
            </div>
        </div>

    </div>

    <!-- FOOTER NOTE -->
    <div class="text-center mt-5">
        <p class="text-muted">
            Dibuat sebagai latihan pemrograman MVC – PHP Native | DPBO | 2025  
        </p>
    </div>
</div>

<?php include __DIR__. '/../views/templates/footer.php'; ?>
