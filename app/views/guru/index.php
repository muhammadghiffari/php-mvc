<div class="container mt-4">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flashGuru(); ?>
        </div>
    </div>

    <!-- Button trigger modal -->
    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahDataGuru" data-bs-toggle="modal"
                data-bs-target="#formModal">
                Tambah Data Guru
            </button>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/guru/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari guru.." name="keyword" id="keyword"
                        autocomplete="off">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-lg-6">
            <h2 class="mb-2">Daftar Guru</h2>
            <ul class="list-group">
                <?php foreach ($data['guru'] as $guru): ?>
                    <li class="list-group-item">
                        <?= $guru['namaGuru']; ?>
                        <a href="<?= BASEURL; ?>/guru/hapus/<?= $guru['id']; ?>"
                            class="badge badge rounded-pill text-bg-danger float-end m-lg-1"
                            onclick="return confirm('Apakah anda yakin ingin menghapus?');">Hapus</a>
                        <a href="<?= BASEURL; ?>/guru/ubah/<?= $guru['id']; ?>"
                            class="badge badge rounded-pill text-bg-success float-end m-lg-1 tampilModalUbahGuru"
                            data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $guru['id']; ?>">Ubah</a>
                        <a href="<?= BASEURL; ?>/guru/detail/<?= $guru['id']; ?>"
                            class="badge badge rounded-pill text-bg-primary float-end m-lg-1">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="formModalLabelGuru">Tambah Data Guru</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="<?= BASEURL; ?>/guru/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group mb-2">
                        <label for="namaGuru">Guru</label>
                        <input type="text" class="form-control" id="namaGuru" name="namaGuru">
                    </div>
                    <div class="form-group mb-2">
                        <label for="deskripsiGuru">Deskripsi guru</label>
                        <input type="text" class="form-control" id="deskripsiGuru" name="deskripsiGuru">
                    </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>

        </div>
    </div>
</div>