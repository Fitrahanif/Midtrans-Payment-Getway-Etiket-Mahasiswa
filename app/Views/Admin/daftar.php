<?= $this->extend('templates/admin_template') ?>
<?= $this->section("content") ?>
<h1 class="text-center">Data Pendaftaran Tiket</h1>
<?php
if (session()->getFlashdata('sukses')) {
  echo '<div class="alert  sukses" role="alert" >';
  echo session()->getFlashdata('sukses');
  echo '</div>';
}
?>

<!-- Script JavaScript untuk menutup alert secara otomatis -->
<script>
  window.onload = function () {
    setTimeout(function () {
      let alert = document.querySelector('.sukses');
      if (alert) {
        alert.remove();
      }
    }, 1000); // Mengatur waktu hilangnya alert (dalam milidetik)
  };
</script>
<a href="<?= base_url('/admin/print') ?>" class="btn btn-outline-primary ml-auto mb-3">Cetak <i class="fe fe-printer
"></i></a>

<center>
  <form action="<?= base_url('admin/daftar'); ?>" method="get">
    <label for="start_date">Start Date:</label>
    <input type="date" name="start_date" required>

    <label for="end_date">End Date:</label>
    <input type="date" name="end_date" required>

    <button type="submit" class='btn btn-success'>Filter <span class="fe fe-printer"></span></button>
  </form>
  <?php if ($filter['start_date'] && $filter['end_date']): ?>
    <div class="d-flex"> 
      <a href="<?= base_url('admin/laporanByDate?start_date='.$filter['start_date'].'&end_date='.$filter['end_date'])?>" class='btn btn-success'>Download <span class="fe fe-download"></span></a>
      <a href = "<?= base_url('admin/daftar') ?>" class='btn btn-danger'>Clear <span class="fe fe-x"></span></a>
    </div>

  <?php endif ?>
</center>
<br>
<div class="col-md-14 ">
  <div class="card shadow">
    <div class="card-body">
      <div class="toolbar">
        <form class="form">
          <div class="form-row">
            <div class="form-group col-auto mr-auto">
              <label class="my-1 mr-2 sr-only" for="inlineFormCustomSelectPref1">Show</label>
              <select class="custom-select mr-sm-2" id="inlineFormCustomSelectPref1">
                <option value="">...</option>
                <option value="1">12</option>
                <option value="2" selected>32</option>
                <option value="3">64</option>
                <option value="3">128</option>
              </select>
            </div>
            <div class="form-group col-auto">
              <label for="search" class="sr-only">Search</label>
              <input type="text" class="form-control" id="search1" value="" placeholder="Search">
            </div>
          </div>
        </form>
      </div>

      <table action="<?= base_url('user/buy') ?>" class="table table-bordered border-success" style="width: 100%;">

        <thead>
          <tr>
            <th style="width: 5%;">No</th>
            <th>Nim</th>
            <th>Nama Tiket</th>
            <th>kelas</th>
            <th>Prodi</th>
            <th>id Tiket</th>
            <th>Judul</th>
            <th>Harga</th>
            <th>Tanggal</th>
            <!-- <th>tgl</th>
            <th style="width: 20%;">Bukti</th> -->
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <script src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="SB-Mid-client-GOlFdc2PlVY0l1nD"></script>
          <?php
          $nomor = 1 + (($nohalaman - 1) * 5);
          foreach ($tampildata as $row):
            ?>
            <tr>
              <td>
                <?= $nomor++; ?>
              </td>
              <td>
                <?= $row['nim'] ?>
              </td>
              <td>
                <?= $row['nama'] ?>
              </td>
              <td>
                <?= $row['kelas'] ?>
              </td>
              <td>
                <?= $row['prodi'] ?>
              </td>
              <td>
                <?= $row['id_tkt'] ?>
              </td>
              <td>
                <?= $row['judul'] ?>
              </td>
              <td>
                <?= $row['hrg'] ?>
              </td>
              <td>
                <?= date('d F Y', strtotime($row['tgl'])); ?>
              </td>

              <td>
                <form class="d-inline" onsubmit="return confirm('yakin ingin menghapus data ini ?')"
                  action="<?= base_url("admin/daftar/" . $row['nim']) ?>" method="post">
                  <?= csrf_field() ?>
                  <input type="hidden" name="_method" value="DELETE">
                  <button class="btn btn-danger" type="submit" tittle="Hapus Data"><span
                      class="fe fe-trash-2 fe-16 "></span></button>&nbsp;
                </form>
              </td>
            </tr>

          <?php endforeach; ?>
        </tbody>
      </table>
      <!-- pagination -->
      <div class="float-center">

      </div>
      </main>

      </main>



      <?= $this->endSection() ?>