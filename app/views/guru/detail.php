<div class="container mt-4">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title mt-1 mb-3">
                <?= isset($data['guru']['namaGuru']) ? $data['guru']['namaGuru'] : 'Guru tidak tersedia'; ?>
            </h5>
            <p class="card-text">Deskripsi:
                <?= isset($data['guru']['deskripsiGuru']) ? $data['guru']['deskripsiGuru'] : 'Deskripsi tidak tersedia'; ?>
            </p>
            <a href="<?= BASEURL; ?>/guru" class="card-link">Kembali</a>
        </div>
    </div>
</div>