<?= $this->extend('IoTeen/layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Device</h2>
            <div class="card" style="width: 18rem;">
                <img src="/img/<?= $device['gambar']; ?>" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $device['nama_devices']; ?></h5>
                    <p class="card-text"><?= $device['merk']; ?></p>
                    <p class="card-text"><?= $device['jumlah']; ?></p>
                    <a href="/devices" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>