<div class="container mt-4">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title mb-4"><?= isset($data['siswa']['nama']) ? $data['siswa']['nama'] : 'Nama tidak tersedia'; ?></h5>
            <p class="card-subtitle">Absen: <?= isset($data['siswa']['absen']) ? $data['siswa']['absen'] : 'Absen tidak tersedia'; ?></p>
            <p class="card-text m-0">Email: <?= isset($data['siswa']['email']) ? $data['siswa']['email'] : 'Email tidak tersedia'; ?></p>
            <p class="card-text">Jurusan: <?= isset($data['siswa']['jurusan']) ? $data['siswa']['jurusan'] : 'Jurusan tidak tersedia'; ?></p>
            <a href="<?= BASEURL; ?>siswa" class="card-link">Kembali</a>
        </div>
    </div>
</div>
