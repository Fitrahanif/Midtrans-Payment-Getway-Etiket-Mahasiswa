<?= $this->extend('templates/user_template') ?>
<?= $this->section("content_user") ?>
<div class="container-fluid bg-light py-4">
        <div class="col-md-6 m-auto text-center">
            <h1>Pembayaran Tiket</h1>
        </div>
    </div>
<div class="col-md-14 my-4">
                    
    
<div class="card shadow">
                    <div class="card-body">
                      <div class="toolbar">
                        <form class="form">
                          <div class="form-row">
                            <div class="form-group col-auto mr-auto">
                             <i class="fe fe-shopping-cart text-danger">
                             Selesaikan Pembayaran Anda!!!
                             </i>
                            
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
            <th>Nama Lengkap</th>
            <th>Kelas</th>
            <th>Prodi</th>
            <th>Id Tiket</th>
            <th>Judul</th>
            <th>Harga</th>
            <th>Tanggal</th>
            <!-- <th>tgl</th>
            <th style="width: 20%;">Bukti</th> -->
            <th style="width: 7%;">Aksi</th>
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
                <td><?= $row['kelas'] ?></td>
                <td><?= $row['prodi'] ?></td>
                <td><?= $row['id_tkt'] ?></td>
                <td ><?= $row['judul'] ?></td>
                <td ><?= $row['hrg'] ?></td>
                <td ><?= $row['tgl'] ?></td>
                <td >
                 
                 <a href="https://app.sandbox.midtrans.com/snap/v2/vtweb/" target="blank" class="btn btn-primary">Pay<span class="fe fe-credit-card fe-16 ml-2"></span></a>
                                </form>
                </td>
            </tr>
          
        <?php endforeach; ?>
    </tbody>
</table>

        </main>

      </main> 
      
   
<?= $this->endSection() ?>