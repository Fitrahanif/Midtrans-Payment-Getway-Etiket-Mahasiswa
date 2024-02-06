<?= $this->extend('templates/admin_template') ?>
<?= $this->section("content") ?>
<section class="bg-light">
    <div class="col-lg-7 mt-4">

        <div class="card">
            <div class="card-body">
                <h2 class="text-center">Detail Pendafatar</h2>
                <hr>
                <br>
                <h6>Nim:</h6>
                <p>
                    <?= $row['nim'] ?>
                </p>

                <h6>Nama:</h6>
                <p>
                    <?= $row['nama'] ?>
                </p>

                <h6>Kelas:</h6>
                <p>
                    <?= $row['kelas'] ?>
                </p>

                <h6>Prodi:</h6>
                <p>
                    <?= $row['prodi'] ?>
                </p>
                <h6>Tanggal:</h6>
                <p>
                    <?= $row['tgl'] ?>
                </p>

              

                <div class="col-md-12 text-right">
                    <?= form_button('', ' <i class="fa fa-backward"> </i>Kembali', [
                        'class' => 'btn btn-warning mb-3',
                        'onclick' => "location.href=('" . site_url('admin/daftar') . "')"
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>

<!-- Close Content -->
<?= $this->endSection() ?>