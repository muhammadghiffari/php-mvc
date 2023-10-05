<div class="container mt-4">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flashJurusan(); ?>
        </div>
    </div>

    <!-- Button trigger modal -->
    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahDataJurusan" data-bs-toggle="modal"
                data-bs-target="#formModal">
                Tambah Data Jurusan
            </button>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/jurusan/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari jurusan.." name="keyword" id="keyword"
                        autocomplete="off">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-lg-6">
            <h2 class="mb-4">Daftar Jurusan</h2>
            <ul class="list-group">
                <?php foreach ($data['jurusan'] as $jurusan): ?>
                    <li class="list-group-item">
                        <?= $jurusan['namaJurusan']; ?>
                        <a href="<?= BASEURL; ?>/jurusan/hapus/<?= $jurusan['id']; ?>"
                            class="badge badge rounded-pill text-bg-danger float-end m-lg-1"
                            onclick="return confirm('Apakah anda yakin ingin menghapus?');">Hapus</a>
                        <a href="<?= BASEURL; ?>/jurusan/ubah/<?= $jurusan['id']; ?>"
                            class="badge badge rounded-pill text-bg-success float-end m-lg-1 tampilModalUbahJurusan"
                            data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $jurusan['id']; ?>">Ubah</a>
                        <a href="<?= BASEURL; ?>/jurusan/detail/<?= $jurusan['id']; ?>"
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
                <h1 class="modal-title fs-5" id="formModalLabelJurusan">Tambah Data Jurusan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="<?= BASEURL; ?>/jurusan/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group mb-2">
                        <label for="namaJurusan">Jurusan</label>
                        <input type="text" class="form-control" placeholder="Rekayasa Perangkat Lunak" id="namaJurusan" name="namaJurusan">
                    </div>
                    <div class="form-group mb-2">
                        <label for="deskripsiJurusan">Deskripsi jurusan</label>
                        <input type="text" class="form-control" placeholder="Jurusan ini fokus pada pengembangan perangkat lunak, pe..." id="deskripsiJurusan" name="deskripsiJurusan">
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