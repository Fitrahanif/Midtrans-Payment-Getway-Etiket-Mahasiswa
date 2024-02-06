<?= $this->extend('templates/admin_template') ?>
<?= $this->section("content") ?>
<h1 class="text-center">Edit Data Tiket</h1>
<?php if (session()->getFlashdata('errorNamaTiket')): ?>
    <div class="alert alert-danger" role="alert">
        <p>Sesuatu ada yang salah!</p>
        <ul>
            <?php foreach (session()->getFlashdata('errorNamaTiket') as $err): ?>
                <li>
                    <?= $err ?>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>
<div class="form-group">
    <a href="<?= site_url('/admin/Tiket') ?>" class="btn btn-warning mb-3">
        <i class="fa fa-backward"></i> Kembali
    </a>
</div>
<?= form_open_multipart('admin/updatedataTiket/'.$id) ?>
<input type="hidden" name="idtiket" value="<?= $id ?>">

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
    <div class="custom-file">
        <input type="file" class="custom-file-input" name="foto" id="foto">
        <label class="custom-file-label" for="foto">Pilih file</label>
    </div>
</div>

<div class="form-group mb-3">
    <?= form_submit('', 'Update', [
        'class' => 'btn btn-primary'
    ]) ?>
</div>
<?= form_close() ?>
<?= $this->endSection() ?>