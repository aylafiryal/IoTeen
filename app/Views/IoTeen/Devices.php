<?= $this->extend('IoTeen/layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Barang</h1>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Devices Name</th>
                    <th scope="col">Merk</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($devices as $a) : ?>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <img src="/img/<?= $a['gambar']; ?>" alt="" class="gambar">
                        </td>
                        <td><?= $a['nama_devices']; ?></td>
                        <td><?= $a['merk']; ?></td>
                        <td><?= $a['jumlah']; ?></td>
                        <td><?= $a['status']; ?></td>
                        <td>
                            <a href="/<?= $a['id']; ?>" class="btn btn-success">Detail</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>