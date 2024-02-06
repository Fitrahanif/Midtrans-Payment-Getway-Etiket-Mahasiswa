<?= $this->extend('templates/admin_template') ?>
<?= $this->section("content") ?>
<section class="bg-light">
    <div class="col-lg-7 mt-4">

        <div class="card">
            <div class="card-body">
                <h2 class="text-center">Detail Tiket</h2>
                <hr>
                <br>
                <h6>Judul:</h6>
                <p>
                    <?= $row['judul'] ?>
                </p>

                <h6>Harga:</h6>
                <p>
                    <?= $row['hrg'] ?>
                </p>

                <h6>Deskripsi:</h6>
                <p>
                    <?= $row['deskripsi'] ?>
                </p>

                <h6>Benefit:</h6>
                <p>
                    <?= $row['benefit'] ?>
                </p>

                <h6>Foto:</h6>
                <p><img src="<?= base_url() ?>img/tiket/<?= $row['foto'] ?> " style="width:50%;"></p>
               
                <div class="col-md-12 text-right">
                    <?= form_button('', ' <i class="fa fa-backward"> </i>Kembali', [
                        'class' => 'btn btn-warning mb-3',
                        'onclick' => "location.href=('" . site_url('admin/Tiket') . "')"
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