<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Komik</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID Komik</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul Komik</th>
                        <th scope="col">Aksi</th>


                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($comic as $c) : ?>
                        <tr>
                            <th scope="row">1</th>
                            <td><img src="/img/<?= $c['sampul']; ?>" alt="" class="sampul"></td>
                            <td><?= $c['judul']; ?></td>
                            <td>
                                <a href="" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>