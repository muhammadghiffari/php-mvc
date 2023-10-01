<div class="container mt-4">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flashKelas(); ?>
        </div>
    </div>

    <!-- Button trigger modal -->
    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahDataKelas" data-bs-toggle="modal"
                data-bs-target="#formModal">
                Tambah Kelas
            </button>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/kelas/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari kelas.." name="keyword" id="keyword"
                        autocomplete="off">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h2 class="mb-3">Daftar Kelas</h2>
            <ul class="list-group">
                <?php foreach ($data['kelas'] as $kelas): ?>
                    <li class="list-group-item">
                        <?= $kelas['namaKelas']; ?>
                        <a href="<?= BASEURL; ?>/kelas/hapus/<?= $kelas['id']; ?>"
                            class="badge badge rounded-pill text-bg-danger float-end m-lg-1"
                            onclick="return confirm('Apakah anda yakin ingin menghapus?');">Hapus</a>
                        <a href="<?= BASEURL; ?>/kelas/ubah/<?= $kelas['id']; ?>"
                            class="badge badge rounded-pill text-bg-success float-end m-lg-1 tampilModalUbahKelas"
                            data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $kelas['id']; ?>">Ubah</a>
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
                <h1 class="modal-title fs-5" id="formModalLabelKelas">Tambah Data Kelas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="<?= BASEURL; ?>/kelas/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group mb-2">
                        <label for="kelas">Kelas</label>
                        <input type="kelas" placeholder="10" class="form-control" id="kelas" name="kelas">
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