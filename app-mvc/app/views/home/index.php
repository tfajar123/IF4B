<div class="container">
  <div class="bg-light p-5 rounded-lg m-3">
    <h1 class="display-4">Selamat Datang!</h1>
    <p class="lead">Halo, nama saya <?= $data['nama']; ?></p>
    <hr class="my-4">
    <p>Ini adalah halaman Home dari Test MVC.</p>
    <a class="btn btn-primary btn-lg" href="<?= BASEURL; ?>/about" role="button">Tentang Saya</a>
  </div>
</div>