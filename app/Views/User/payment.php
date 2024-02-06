<?= $this->extend('templates/user_template') ?>
<?= $this->section("content_user") ?>
<div class="container-fluid bg-light py-4">
  <div class="col-md-6 m-auto text-center">
    <h1>Pembelian Tiket</h1>

  </div>
</div>
<?php if (session()->getFlashdata('errorNamaBeli')): ?>
    <div class="alert alert-danger" role="alert">
        <p>Somthing error here!</p>
        <ul>
            <?php foreach (session()->getFlashdata('errorNamaBeli') as $err): ?>
                <li>
                    <?= $err ?>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>
<html>

<body>
  <div class="container mt-5">
    <div class="container">
      <div class="row py-3">
        <form class="col-md-9 m-auto" action="<?= base_url('user/daftar/' . $id) ?>" method="post" role="form">
          <div class="row">
            <div class="form-group col-md-6 mb-3">
              <label for="inputnim">Nim</label>
              <?= form_input('nim', '', [
                'class' => 'form-control mt-1',
                'id' => 'nim',
                'autofocus' => 'true',
                'placeholder' => 'isikan nim'
              ]) ?>
            </div>
            <div class="form-group col-md-6 mb-3">
              <label for="inputnama">Nama Lengkap</label>
              <?= form_input('nama', '', [
                'class' => 'form-control mt-1',
                'id' => 'nama',
                'autofocus' => 'true',
                'placeholder' => 'isikan nama lengkap'
              ]) ?>
            </div>
          </div>
          <div class="mb-3">
            <label for="inputsubject">Kelas</label>
            <?= form_input('kelas', '', [
              'class' => 'form-control mt-1',
              'id' => 'kelas',
              'autofocus' => 'true',
              'placeholder' => 'isikan kelas'
            ]) ?>
          </div>
          <div class="form-group mb-3">
            <label for="inputState">Prodi</label>
            <select id="prodi" name="prodi" class="form-control">
              <option selected>Program Studi</option>
              <option>Sistem Informasi</option>
              <option>Teknik Informatika</option>
              <option>Manajemen Informatika</option>
              <option>Komputerisasi Akuntansi</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="tgl" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tgl" name="tgl"></input>
          </div>
          <hr class="my-4">
          <div class="col-md- text-right">
            <button class="btn btn-primary" type="submit">Bayar</button>
          </div>
        </form>
      </div>
    </div>
    <script>

    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
      integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <?php if (session()->has('data_trx')): ?>
      <script src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SB-Mid-client-GOlFdc2PlVY0l1nD"></script>
      <script type="text/javascript">

        snap.pay('<?= session()->get('data_trx')['snap_token'] ?>', {
          onSuccess: function (result) {
            $.ajax({
              method: "POST",
              url: '<?= base_url('user/daftar/' . $id) ?>',
              data: {
                nim: '<?= session()->get('data_trx')['nim'] ?>',
                nama: '<?= session()->get('data_trx')['nama'] ?>',
                kelas: '<?= session()->get('data_trx')['kelas'] ?>',
                prodi: '<?= session()->get('data_trx')['prodi'] ?>',
                tgl: '<?= session()->get('data_trx')['tgl'] ?>',
                order_id: result.order_id
              },
              success: (response) => {
                alert("Pembayaran berhasil")
                window.location.href = "/user/shop";
              }
            })
          },
          onError: function (result) {
            alert("Terjadi kesalahan")
          }
        })

      </script>
    <?php endif ?>
</body>

</html>
<?= $this->endSection() ?>