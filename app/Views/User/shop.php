<?= $this->extend('templates/user_template') ?>
<?= $this->section("content_user") ?>
<div class="container py-5">

    <div class="row">
        <div class="col-lg-12">
            <?php
            if (session()->getFlashdata('pesan')) {
                echo '<div class="alert alert-success pesan" role="alert" >';
                echo session()->getFlashdata('pesan');
                echo '</div>';
            }
            ?>

            <!-- Script JavaScript untuk menutup alert secara otomatis -->
            <script>
                window.onload = function () {
                    setTimeout(function () {
                        let alert = document.querySelector('.pesan');
                        if (alert) {
                            alert.remove();
                        }
                    }, 1000); // Mengatur waktu hilangnya alert (dalam milidetik)
                };
            </script>
        </div>

    </div>

    <div class="row">
        <?php foreach ($tampildata as $s): ?>
            <div class="col-md-4 mb-4">
                <?= form_open('user/cart/' . $s['id_tkt']); ?>
                <div class="card shadow ">
                    <div class="card-body">
                        <img class="card-img rounded-0 img-fluid" src="<?= base_url() ?>img/tiket/<?= $s['foto'] ?>"
                            width="200px" height="150px">
                    </div>

                    <div class="card-body">
                        <a href="shop-single.html" class="h4 text-decoration-none">
                            <?= $s['judul'] ?>
                        </a>

                        <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                            <p class="text-center mb-0">Rp.
                                <?= format_number($s['hrg']) ?>
                            </p>

                            <li class="pt-2">
                                <br>
                                <a href="<?= base_url('/user/shop/' . $s['id_tkt']) ?>"
                                    class="btn mb-2 btn-outline-success">View
                                    <span class="fe fe-clipboard fe-16 ml-2"></span></a>
                                </br>
                            </li>
                    </div>
                     
                    <?= form_close(); ?>
                </div>

            </div>
        <?php endforeach ?>
    </div>
    <div div="row">
        <ul class="pagination pagination-lg justify-content-end">
        <?= $pager->links('Admin', 'paging'); ?>
        </ul>
    </div>
</div>

</div>
</div>


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


</body>
<?= $this->endSection() ?>