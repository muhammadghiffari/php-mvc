<div class="container mt-4">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title mt-1 mb-3">
                <?= isset($data['jurusan']['namaJurusan']) ? $data['jurusan']['namaJurusan'] : 'Jurusan tidak tersedia'; ?>
            </h5>
            <p class="card-text">Deskripsi:
                <?= isset($data['jurusan']['deskripsiJurusan']) ? $data['jurusan']['deskripsiJurusan'] : 'Deskripsi tidak tersedia'; ?>
            </p>
            <a href="<?= BASEURL; ?>/jurusan" class="card-link">Kembali</a>
        </div>
    </div>
</div>