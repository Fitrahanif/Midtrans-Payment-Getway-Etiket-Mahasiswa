<?= $this->extend('templates/auth_template') ?>
<?= $this->section('content') ?>
<form class="col-lg-3 col-md-4 col-10 mx-auto text-center" method="post" action="<?= base_url('auth/register') ?>">
  <div class=" d-flex">
    <a class="navbar-brand mx-auto flex-fill text-center " href="./index.html">
      <img width="100px" src="<?= base_url() ?>img/logo/stmik1.png" alt="">

    </a>
  </div>
  <h1 class="h4 mb-3">  Register</h1>
  <?php if (session()->has('error_register')): ?>
    <p class="text-danger">
      <?= session()->get('error_register') ?>
    </p>
  <?php endif; ?>
  <div class="form-group">
    <label for="inputName" class="sr-only">Nama</label>
    <input type="text" id="inputName" name="nama" class="form-control form-control-lg" placeholder="Nama... "
      autofocus="">
  </div>
  <div class="form-group">
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" name="email" class="form-control form-control-lg" placeholder="Email address"
      autofocus="">
  </div>
  <div class="form-group">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" name="password" class="form-control form-control-lg"
      placeholder="Password">
  </div>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Stay logged in </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
  <br>
  <p class="mt-5 mb-3 text-muted">© 2020</p>
</form>
<?= $this->endSection() ?>