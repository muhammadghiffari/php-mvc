<div class="container mt-4">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Siswa
            </button>
            <br></br>
            <h3 class="mb-3">Daftar Siswa</h3>

            <ul class="list-group">
                <?php foreach ($data['siswa'] as $siswa) : ?>
                    <li class="list-group-item">
                        <?= $siswa['nama']; ?>
                        <a href="<?= BASEURL; ?>/siswa/hapus/<?= $siswa['id']; ?>" class="badge badge rounded-pill text-bg-danger float-end m-lg-1" onclick="return confirm('Apakah anda yakin ingin menghapus?');">Hapus</a>
                        <a href="<?= BASEURL; ?>/siswa/detail/<?= $siswa['id']; ?>" class="badge badge rounded-pill text-bg-primary float-end m-lg-1">Detail</a>
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
                <h1 class="modal-title fs-5" id="judulModal">Tambah Data Siswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>/siswa/tambah" method="post">
                    <div class="form-group mb-2">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>

                    <div class="form-group mb-2">
                        <label for="absen" class="form-label">Absen</label>
                        <input type="number" class="form-control" id="absen" name="absen">
                    </div>

                    <div class="form-group mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="form-group mb-2">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
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