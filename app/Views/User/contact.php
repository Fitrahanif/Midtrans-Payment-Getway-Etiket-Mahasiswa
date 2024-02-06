<?= $this->extend('templates/user_template') ?>
<?= $this->section("content_user") ?>
<!-- Start Content Page -->
<div class="container-fluid bg-light py-4">
    <div class="col-md-6 m-auto text-center">
        <h1>Contact Us</h1>
        <p>if there is a problem with the system</p>
    </div>
</div>
<?php 
if (session()->getFlashdata('sukses')) {
    echo '<div class="alert  sukses" role="alert" >';
    echo session()->getFlashdata('sukses');
    echo '</div>';
}
?>

<?php if (session()->getFlashdata('errorNamaPelayanan')): ?>
    <div class="alert alert-danger errorNamaPelayanan" role="alert">
        <p>Somthing error here!</p>
        <ul>
            <?php foreach (session()->getFlashdata('errorNamaPelayanan') as $err): ?>
                <li>
                    <?= $err ?>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>

<!-- Script JavaScript untuk menutup alert secara otomatis -->
<script>
window.onload = function() {
    setTimeout(function() {
        let suksesAlert = document.querySelector('.sukses');
        if(suksesAlert) {
            suksesAlert.remove();
        }

        let errorAlert = document.querySelector('.alert.errorNamaPelayanan');
        if(errorAlert) {
            errorAlert.remove();
        }
    }, 1000); // Mengatur waktu hilangnya alert (dalam milidetik)
};
</script>

<!-- Start Contact -->
<div class="container">
    <div class="row py-3">
        <form class="col-md-9 m-auto" action="<?= base_url() ?>user/contact" method="post" role="form">
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
                        <label for="inputnama">Nama</label>
                        <?= form_input('nama', '', [
                            'class' => 'form-control mt-1',
                            'id' => 'nama',
                            'autofocus' => 'true',
                            'placeholder' => 'isikan Nama'
                        ]) ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Email</label>
                    <?= form_input('email', '', [
                        'class' => 'form-control mt-1',
                        'id' => 'email',
                        'autofocus' => 'true',
                        'placeholder' => 'isikan email'
                    ]) ?>
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Phone</label>
                    <?= form_input('phone', '', [
                        'class' => 'form-control mt-1',
                        'id' => 'phone',
                        'autofocus' => 'true',
                        'placeholder' => 'isikan Phone'
                    ]) ?>
                </div>
                <div class="mb-3">
                    <label for="inputmessage">Message</label>
                    <textarea class="form-control mt-1" id="pesan" name="pesan" placeholder="Message"
                        rows="8"></textarea>
                </div>


                <div class="row">
                    <div class="col text-end mt-2">
                    <?= form_submit('', 'Simpan', [
        'class' => 'btn btn-primary'
    ])
        ?>
                    </div>
                </div>
        </form>
    </div>
</div>
<!-- End Contact -->


<!-- Start Footer -->
<footer class="bg-dark" id="tempaltemo_footer">
    <div class="container">
        <div class="row">

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-primary border-bottom pb-3 border-light logo">Stmik Widya Pratama</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li class="d-flex"> <i class="fe fe-map-pin mx-2"></i>
                        <a class="navbar-sm-brand text-light text-decoration-none" style="display: inline-block"
                            href="">Patriot No.25, Dukuh, Kec. Pekalongan Utara, Kota Pekalongan, Jawa Tengah 51146</a>
                    </li>
                    <li><i class="fe fe-phone-call mx-2"></i>
                        <a class="navbar-sm-brand text-light text-decoration-none" href="">085713009069</a>
                    </li>
                    <li> <i class="fe fe-mail mx-2"></i>
                        <a class="navbar-sm-brand text-light text-decoration-none" href="">stmikwp@gmail.com</a>
                    </li>


                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-primary border-bottom pb-3 border-light">UKM</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li>Pengembangan Komputer (PK)</li>
                    <li>Ikatan Keluarga Muslim (IKM)</li>
                    <li>Korps Sukarela KSR</li>
                    <li>Pikma Patriot</li>
                    <li>Kesenian</li>
                    <li>Makompala</li>
                    <li>Olahraga</li>

                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-primary border-bottom pb-3 border-light">Further Info</h2>
                <ul class="list-unstyled text-light footer-link-list">

                    <li><a class="navbar-sm-brand text-light text-decoration-none" href="">Home</a></li>
                    <li><a class="navbar-sm-brand text-light text-decoration-none" href="">Shop</a></li>
                    <li><a class="navbar-sm-brand text-light text-decoration-none" href="">Contact</a></li>
                    <li><a class="navbar-sm-brand text-light text-decoration-none" href="">Logout</a></li>
                </ul>
            </div>

        </div>

        <div class="row text-light ">
            <div class="col-12 mb-3">
                <div class="w-100 my-3 border-top border-light"></div>
            </div>
            <div class="col-auto me-auto">
                <ul class="list-inline text-left footer-icons">
                    <li class="list-inline-item  text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i
                                class="fe fe-32 fe-chrome fa-lg fa-fw"></i></a>
                    </li>
                    <li class="list-inline-item  text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i
                                class="fe fe-32 fe-facebook fa-lg fa-fw"></i></a>
                    </li>
                    <li class="list-inline-item  text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i
                                class="fe fe-32 fe-instagram fa-lg fa-fw"></i></a>
                    </li>
                    <li class="list-inline-item  text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i
                                class="fe fe-32 fe-youtube fa-lg fa-fw"></i></a>
                    </li>




                </ul>
            </div>

        </div>
    </div>



</footer>
<!-- End Footer -->

</body>




<?= $this->endSection() ?>