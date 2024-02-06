<?= $this->extend('templates/admin_template') ?>

<?= $this->section("content") ?>
<h1 class="text-center">Edit Data Tiket</h1>
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
    window.onload = function () {
        setTimeout(function () {
            let alert = document.querySelector('.alert.errorNamaTiket');
            if (alert) {
                alert.remove();
            }
        }, 1000); // Mengatur waktu hilangnya alert (dalam milidetik)
    };
</script>
<div class="form-group">
    <a href="<?= site_url('/admin/Tiket') ?>" class="btn btn-warning mb-3">
        <i class="fe fe-chevrons-left"></i> Kembali
    </a>
</div>

<?= form_open_multipart(base_url('/admin/formeditTiket/' . $id)) ?>

<div class="form-group">
    <label for="judul">Judul</label>
    <?= form_input('judul', $judul, [
        'class' => 'form-control',
        'id' => 'judul',
        'autofocus' => 'true',
    ]) ?>
</div>

<div class="form-group">
    <label for="hrg">Harga</label>
    <?= form_input('hrg', $hrg, [
        'class' => 'form-control',
        'id' => 'hrg',
    ]) ?>
</div>

<div class="form-group">
    <label for="deskripsi">Deskripsi</label>
    <?= form_textarea('deskripsi', $deskripsi, [
        'class' => 'form-control',
        'id' => 'deskripsi',
        'rows' => '4',
    ]) ?>
</div>

<div class="form-group">
    <label for="benefit">Benefit</label>
    <?= form_input('benefit', $benefit, [
        'class' => 'form-control',
        'id' => 'benefit',
    ]) ?>
</div>

<div class="form-group">
    <label for="customFile">Foto</label>
    <td>
        <div class="image-wrapper">
            <img src="<?= base_url() ?>img/tiket/<?= $foto ?> " style="width:20%;">
        </div>
        <input type="file" name="foto" id="foto">
    </td>
</div>


<div class="form-group mb-3">
    <?= form_submit('', 'Update', [
        'class' => 'btn btn-primary'
    ]) ?>
</div>
<?= form_close() ?>
<?= $this->endSection() ?>