<?= $this->extend('templates/user_template') ?>
<?= $this->section("content_user") ?>

<body>
    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img rounded-0 img-fluid" src="<?= base_url() ?>img/tiket/<?= $s['foto'] ?>">
                    </div>
                    <div class="row">
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-dark fas fa-chevron-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </div>
                        <!--End Controls-->

                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-dark fas fa-chevron-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">

                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2"><?= $s['judul'] ?></h1>

                            <p class="h3 py-2">Rp.  <?= format_number($s['hrg']) ?></p>
                            <h6>Description:</h6>
                            <p><?= $s['deskripsi'] ?></p>

                            <h6>Benefit:</h6>
                            <ul class="list-unstyled pb-3">
                                <li><?= $s['benefit'] ?></li>


                            </ul>

                            <div class="row pb-3 ">

                                <div class="col d-flex mx-auto">
                                    <a href="<?= base_url('/user/payment/'.$s['id_tkt']) ?>" class="btn btn-outline-info btn-lg">Buy<span class="fe fe-dollar-sign fe-16 ml-2"></span></a>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->

    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-primary border-bottom pb-3 border-light logo">Stmik Widya Pratama</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li class="d-flex"> <i class="fe fe-map-pin mx-2"></i>
                            <a class="navbar-sm-brand text-light text-decoration-none" style="display: inline-block" href="">Patriot No.25, Dukuh, Kec. Pekalongan Utara, Kota Pekalongan, Jawa Tengah 51146</a>
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
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fe fe-32 fe-chrome fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item  text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fe fe-32 fe-facebook fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item  text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fe fe-32 fe-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item  text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fe fe-32 fe-youtube fa-lg fa-fw"></i></a>
                        </li>




                    </ul>
                </div>

            </div>
        </div>



    </footer>
    <!-- End Footer -->

</body>

</html>
<?= $this->endSection() ?>