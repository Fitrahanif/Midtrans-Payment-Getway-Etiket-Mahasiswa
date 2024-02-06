<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>e-tiket Stmik WP</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>img/logo/favicon.ico">

    <!-- all css here -->

    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="<?= base_url() ?>css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url() ?>css/owl.transitions.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="<?= base_url() ?>css/animate.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="<?= base_url() ?>css/meanmenu.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="<?= base_url() ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>css/flaticon.css">
    <!-- magnific css -->
    <link rel="stylesheet" href="<?= base_url() ?>css/magnific.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="<?= base_url() ?>style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="<?= base_url() ?>css/responsive.css">

    <!-- modernizr css -->
    <script src="<?= base_url() ?>js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body>

    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div id="preloader"></div>
    <header class="header-one">
        <!-- Start top bar -->
        <div class="topbar-area fix hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">

                    </div>
                </div>
            </div>
        </div>
        <!-- End top bar -->
        <!-- header-area start -->
        <div id="sticker" class="header-area hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="row">
                            <!-- logo start -->
                            <div class="col-md-2 col-sm-1 d-flex">
                                <div style="position: relative;right: 100px;">
                                    <!-- Brand -->
                                    <a class="navbar-brand page-scroll white" href="index-2.html">
                                        <img src="<?= base_url() ?>img/logo/stmik1.png" alt="">
                                    </a>

                                </div>
                                <!-- logo end -->
                            </div>

                            <div class="col-md-10 col-sm-10">
                                <!-- mainmenu start -->
                                <nav class="navbar navbar-default">
                                    <div class="collapse navbar-collapse" id="navbar-example">
                                        <div class="main-menu">
                                            <ul class="nav navbar-nav navbar-right">
                                                <?php if (!isAuth()): ?>
                                                    <li><a href="/auth/register">Register</a></li>
                                                    <li><a href="/auth/login">Login</a></li>
                                                <?php endif ?>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                                <!-- mainmenu end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-area end -->
    </header>
    <!-- header end -->
    <!-- Start Intro Area -->
    <div class="slide-area fix" data-stellar-background-ratio="0.6">
        <div class="display-table">
            <div class="display-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <!-- Start Slider content -->
                            <div class="slide-content text-center">
                                <h1 class="text-warning  mb-4 ">E-TIKET</h1>
                                <h4 class="title2">STMIK WIDYA PRATAMA </h4>
                                <script src="https://unpkg.com/typeit@7.0.4/dist/typeit.min.js"></script>
                                <h5 id="typing" style="color: white;">
                                    Platform ini sebagai akses penjualan tiket dari berbagai Unit Kegiatan Mahasiswa (UKM) untuk beragam kegiatan khusus mahasiswa seperti konser, seminar, festival, dan acara lainnya yang relevan dengan kepentingan mahasiswa.
                                </h5>
                                <script>
                                    function startTyping() {
                                        const instance = new TypeIt("#typing", {
                                            speed: 70,
                                            waitUntilVisible: true,
                                            loop: false,
                                            afterComplete: async (step, instance) => {
                                                await new Promise(resolve => setTimeout(resolve, 2000)); // Tunggu 1 detik setelah penyelesaian
                                                instance.reset(); // Set ulang pengetikan
                                                instance.go(); // Memulai ulang pengetikan
                                            }
                                        }).go();
                                    }

                                    document.addEventListener("DOMContentLoaded", startTyping);
                                </script>

                                <div class="layer-1-3">
                                    <a href="https://www.stmik-wp.ac.id/" class="ready-btn left-btn">Website</a>
                                    <div class="video-content">
                                        <a href="https://www.youtube.com/watch?v=rfP57OQQLA0"
                                            class="video-play vid-zone">
                                            <i class="fa fa-play"></i>
                                            <span>watch video</span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <!-- End Slider content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jquery latest version -->
    <script src="<?= base_url() ?>js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?= base_url() ?>js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="<?= base_url() ?>js/owl.carousel.min.js"></script>
    <!-- stellar js -->
    <script src="<?= base_url() ?>js/jquery.stellar.min.js"></script>
    <!-- magnific js -->
    <script src="<?= base_url() ?>js/magnific.min.js"></script>
    <!-- wow js -->
    <script src="<?= base_url() ?>js/wow.min.js"></script>
    <!-- meanmenu js -->
    <script src="<?= base_url() ?>js/jquery.meanmenu.js"></script>
    <!-- Form validator js -->
    <script src="<?= base_url() ?>js/form-validator.min.js"></script>
    <!-- plugins js -->
    <script src="<?= base_url() ?>js/plugins.js"></script>
    <!-- main js -->
    <script src="<?= base_url() ?>js/main.js"></script>
</body>

</html>