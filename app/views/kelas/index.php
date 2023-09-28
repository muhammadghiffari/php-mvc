<div class="container mt-4">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <!-- Button trigger modal -->
    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal"
                data-bs-target="#formModal">
                Tambah Data Kelas
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
            <h3 class="mb-3">Daftar Kelas</h3>
            <ul class="list-group">
                <?php foreach ($data['kelas'] as $kelas): ?>
                    <li class="list-group-item">
                        <?= $kelas['dataKelas']; ?>
                        <a href="<?= BASEURL; ?>/kelas/hapus/<?= $kelas['id']; ?>"
                            class="badge badge rounded-pill text-bg-danger float-end m-lg-1"
                            onclick="return confirm('Apakah anda yakin ingin menghapus?');">Hapus</a>
                        <a href="<?= BASEURL; ?>/kelas/ubah/<?= $kelas['id']; ?>"
                            class="badge badge rounded-pill text-bg-success float-end m-lg-1 tampilModalUbah"
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
                <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Kelas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="<?= BASEURL; ?>/kelas/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group mb-2">
                        <label for="kelas">Kelas</label>
                        <select id="kelas" name="kelas" class="form-control">
                            <option selected>Pilih kelas...</option>
                            <option>X</option>
                            <option>XI</option>
                            <option>XII</option>
                        </select>
                    </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>

        </div>
    </div>
</div>