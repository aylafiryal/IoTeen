<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<h1>Daftar</h1>
<?php foreach($alamat as $a): ?>
    <ul>
        <li><?= $a['tipe']; ?></li>
        <li><?= $a['alamat']; ?></li>
    </ul>
    <?php endforeach; ?>

<?= $this->endSection(); ?>