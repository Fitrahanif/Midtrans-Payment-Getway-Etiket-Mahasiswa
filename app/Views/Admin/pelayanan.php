<?= $this->extend('templates/admin_template') ?>
<?= $this->section("content") ?>
<h1 class="text-center">Data Pelayanan</h1>
<?php 
if (session()->getFlashdata('sukses')) {
    echo '<div class="alert  sukses" role="alert" >';
    echo session()->getFlashdata('sukses');
    echo '</div>';
}
?>

<!-- Script JavaScript untuk menutup alert secara otomatis -->
<script>
window.onload = function() {
    setTimeout(function() {
        let alert = document.querySelector('.sukses');
        if(alert) {
            alert.remove();
        }
    }, 1000); // Mengatur waktu hilangnya alert (dalam milidetik)
};
</script>
<div class="col-md-14 my-4">
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
      <table class="table table-bordered border-success" style="width: 100%;">
        <thead>
          <tr>
            <th style="width: 5%;">No</th>
            <th>nim</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Phone</th>
            <th style="width: auto">Pesan</th>
            <th style="width: 12%;">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $nomor = 1 + (($nohalaman - 1) * 5);
          foreach ($tampildata as $row) :
          ?>
            <tr>
              <td><?= $nomor++; ?></td>
              <td><?= $row['nim'] ?></td>
              <td><?= $row['nama'] ?></td>
              <td><?= $row['email'] ?></td>
              <td><?= $row['phone'] ?></td>
              <td><?= $row['pesan'] ?></td>
              <td>
              
                <a href="<?= base_url('/admin/pelayanan/'. $row['nim']) ?>"  class="btn btn-warning"><span class="fe fe-eye fe-16 "></span></a>
               <form class="d-inline" onsubmit="return confirm('yakin ingin menghapus data ini ?')" action="<?= base_url("admin/pelayanan/".$row['nim']) ?>" method="post">
                  <?= csrf_field() ?>
                  <input type="hidden" name="_method" value="DELETE">
                  <button  class="btn btn-danger" type="submit" tittle="Hapus Data"><span class="fe fe-trash-2 fe-16 "></span></button>
                </form>
              </td>
            </tr>

          <?php endforeach; ?>
        </tbody>
      </table>
<!-- pagination -->
<div class="float-center">
    <?= $pager->links('Admin', 'paging'); ?>
</div>
      </main>
      <?= $this->endSection() ?>