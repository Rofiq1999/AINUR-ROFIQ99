<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-6">
            <h3 class="my-2">Daftar Orang</h3>
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan keyword pencarian.." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <!-- <a href="/Buku/tambah" class="btn btn-primary mt-3">Tambah Data Orang</a> -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 + (6 * ($currentPage - 1)); ?>
                    <?php foreach ($orang as $o) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $o['nama']; ?></td>
                            <td><?= $o['alamat']; ?></td>
                            <td>
<<<<<<< HEAD
                                <a href="" class="btn btn-success">Detail</a>
=======
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $o['id']; ?>">
                                    Detail
                                </button>
>>>>>>> f26bd5208e2a03f95b95b6e7d9deb0ecdff7b7a8
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links('orang', 'orang_pagination'); ?>
        </div>
    </div>
<<<<<<< HEAD
</div>
=======
    <?php foreach ($orang as $o) : ?>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal<?= $o['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                <input type="text" value="<?= $o['nama']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Alamat</label>
                                <input type="text" value="<?= $o['alamat']; ?>" class="form-control" id="exampleInputPassword1">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

>>>>>>> f26bd5208e2a03f95b95b6e7d9deb0ecdff7b7a8
<?= $this->endSection() ?>