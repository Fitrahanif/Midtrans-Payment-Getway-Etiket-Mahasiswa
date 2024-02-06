<?= $this->extend('templates/admin_template') ?>
<?= $this->section("content") ?>

<!-- Start Content Page -->
<div class="container ">
  <div class="row ">
    <div class="col">
      <div class="card " style="width: 50%; height: 100%;">
      <img src="<?=base_url ('/img/logo/stmik.png');?>" class="card-img-top">
        <div class="card-body">
        <h1 class="display-4">Hello, admin!</h1>
          <p class="lead">Selamat Datang di Aplikasi E-TIKET STMIK WP</p>

        </div>
      </div>
    </div>
    
  </div>
</div>

<?= $this->endSection() ?>