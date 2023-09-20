<div class="container mt-5">

    <div class="row">
        <div class="col-6">
            <h3 class="mb-4">Daftar Siswa</h3>

            <ul class="list-group">
                <?php foreach ($data['siswa'] as $siswa) : ?>
                    <li class="list-group-item">
                        <?= $siswa ['nama']; ?>
                        <a href="" class="badge badge rounded-pill text-bg-primary">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>

</div>