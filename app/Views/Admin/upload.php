<?= $this->extend('templates/admin_template') ?>
<?= $this->section("content") ?>
<!-- Start Content Page -->
<h1 class="text-center">Tambah Data Tiket</h1>
<?php if (session()->getFlashdata('errorNamaTiket')): ?>
    <div class="alert alert-danger errorNamaTiket" role="alert">
        <p>Somthing error here!</p>
        <ul>
            <?php foreach (session()->getFlashdata('errorNamaTiket') as $err): ?>
                <li>
                    <?= $err ?>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>
<script>
window.onload = function() {
    setTimeout(function() {
        let alert = document.querySelector('.alert.errorNamaTiket');
        if(alert) {
            alert.remove();
        }
    }, 1000); // Mengatur waktu hilangnya alert (dalam milidetik)
};
</script>
<div class="form group">
    <?= form_button('', ' <i class="fe fe-chevrons-left"> </i>Kembali', [
        'class' => 'btn btn-warning mb-3',
        'onclick' => "location.href=('" . site_url('/admin/Tiket') . "')"
    ]) ?>
</div>
<form action="<?= base_url('admin/upload') ?>" method="post" role="form" enctype="multipart/form-data">
    <div class="form-group">
        <div class="form-group">
            <label for="inputJudul">Judul</label>
            <?= form_input('judul', '', [
                'class' => 'form-control',
                'id' => 'judul',
                'autofocus' => 'true',
                'placeholder' => 'isikan judul tiket'
            ]) ?>
        </div>
    </div>

    <div class="form-group mb-3">
        <label for="custom-money">Harga</label>
        <?= form_input('hrg', '', [
            'class' => 'form-control',
            'id' => 'hrg',
            'autofocus' => 'true',
            'placeholder' => 'isikan Harga Tiket'
        ]) ?>
    </div>
    <div class="form-group">
        <label for="inputDeskripsi">Deskripsi</label>
        <?= form_textarea('deskripsi', '', [
            'class' => 'form-control mt-1',
            'id' => 'deskripsi',
            'autofocus' => 'true',
            'placeholder' => 'isikan deskripsi Tiket',  'rows'=>'8'
        ]) ?>
    </div>
    
    <div class="form-group">
        <label for="inputmessage">Benefit</label>
        <?= form_textarea('benefit', '', [
            'class' => 'form-control mt-1',
            'id' => 'benefit',
            'autofocus' => 'true',
            'placeholder' => 'isikan benefit Tiket'
        ]) ?>
    </div>


    <div class="form-group mb-3">
        <label for="customFile">Foto</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="foto" id="foto">
            <label class="custom-file-label" for="customFile">Choose file</label>

        </div>
    </div>

    <hr class="my-4">
    <div class="col-md-12 text-right">
    <?= form_submit('', 'Simpan', [
        'class' => 'btn btn-primary'
    ])
        ?>
</div>


    </div>


</form>
</div>
</div>
<?= $this->endSection() ?>