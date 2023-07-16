<div class="container mt-5">

    <div class="row">
        <div class="col-6">
            <h3>Daftar Barang</h3>
            <ul class="list-group">
                <?php foreach( $data['barang'] as $barang ) : ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $barang['tipe']; ?>
                    <a href="http://localhost/app-mvc/public/databarang/detail/<?= $barang['id']; ?>" class="badge text-bg-primary badge bg-primary rounded-pill">Detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>