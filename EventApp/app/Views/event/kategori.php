<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>

    <div class="container">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>Semua Kategori</h1>
                            </div>
                            <div class="col-md-6 text-end">
                                <a href="/event/addcatg" class="btn btn-primary">Tambah Data</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-hover">
                <tr>
                    <th>No</th>
                    <th>Nama Event</th>
                </tr>
                <?php $i =1;
                 foreach($data_kategori as $kategori) :?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $kategori['nama_catg']?></td>
                    <td>
                    <a href="/event/update/" class="btn btn-success">Update</a>
                    <a class="btn btn-danger" onclick="return confirmDelete()">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </table>
            </div>
        </div>
    </div>

    <?= $this->endSection() ?>