<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['barang']['tipe'] ?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?= $data['barang']['merek'] ?></h6>
            <p class="card-text">Rp. <?= $data['barang']['harga'] ?></p>
            <a href="<?= BASEURL; ?>/databarang" class="card-link">Kembali</a>
        </div>
    </div>
</div>