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
                Tambah Data Siswa
            </button>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/siswa/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari siswa.." name="keyword" id="keyword"
                        autocomplete="off">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h3 class="mb-3">Daftar Siswa</h3>
            <ul class="list-group">
                <?php foreach ($data['siswa'] as $siswa): ?>
                    <li class="list-group-item">
                        <?= $siswa['nama']; ?>
                        <a href="<?= BASEURL; ?>/siswa/hapus/<?= $siswa['id']; ?>"
                            class="badge badge rounded-pill text-bg-danger float-end m-lg-1"
                            onclick="return confirm('Apakah anda yakin ingin menghapus?');">Hapus</a>
                        <a href="<?= BASEURL; ?>/siswa/ubah/<?= $siswa['id']; ?>"
                            class="badge badge rounded-pill text-bg-success float-end m-lg-1 tampilModalUbah"
                            data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $siswa['id']; ?>">Ubah</a>
                        <a href="<?= BASEURL; ?>/siswa/detail/<?= $siswa['id']; ?>"
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
                <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Siswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="<?= BASEURL; ?>/siswa/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group mb-2">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>

                    <div class="form-group mb-2">
                        <label for="absen" class="form-label">Absen</label>
                        <input type="number" class="form-control" id="absen" name="absen">
                    </div>

                    <div class="form-group mb-2">
                        <label for="kelas">Kelas</label>
                        <select class="form-select mt-1 mb-2" id="kelas" name="kelas"
                            aria-label="Default select example">
                            <option selected>Pilih kelas...</option>
                            <option value="X">X</option>
                            <option value="XI">XI</option>
                            <option value="XII">XII</option>
                        </select>
                    </div>

                    <div class="form-group mb-2">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-select mt-1 mb-2" id="jurusan" name="jurusan"
                            aria-label="Default select example">
                            <option selected>Pilih jurusan...</option>
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                            <option value="Manajemen Perkantoran">Manajemen Perkantoran</option>
                            <option value="Akuntansi">Akuntansi</option>
                            <option value="Bisnis Ritel">Bisnis Ritel</option>
                        </select>
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