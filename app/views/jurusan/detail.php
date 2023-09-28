<div class="container mt-4">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title mb-4">
                <?= isset($data['jurusan']['dataJurusan']) ? $data['jurusan']['dataJurusan'] : 'Jurusan tidak tersedia'; ?>
            </h5>
            <p class="card-text">Deskripsi:
                <?= isset($data['jurusan']['deskripsiJurusan']) ? $data['jurusan']['deskripsiJurusan'] : 'Deskripsi tidak tersedia'; ?>
            </p>
            <a href="<?= BASEURL; ?>/jurusan" class="card-link">Kembali</a>
        </div>
    </div>
</div>