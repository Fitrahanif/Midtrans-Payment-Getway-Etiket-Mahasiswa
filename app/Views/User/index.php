<?= $this->extend('templates/user_template') ?>
<?= $this->section("content_user") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-TIKET STMIK WIDYA PRATAMA PEKALONGAN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
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

    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">


        <div style="position: relative;">
            <div class="img_container ">
                <div class="img-box">
                    <img src="<?= base_url() ?>img/logo/Capture.png" alt="" style="width:100%;">

                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-5 d-flex align-items-center" style="position: absolute;top: 5px;;bottom: 5px;">
            <div class="text-align-left align-self-center">
                <h1 class="h1 text-danger">E-TIKET</h1>
                <h3 class="h2 text-light">STMIK WIDYA PRATAMA PEKALONGAN</h3>
                <br>
                <a href="<?= base_url('/user/shop') ?>" class="btn mb-2 btn-primary btn-lg">Shop Now<span
                        class="fe fe-arrow-right fe-16 ml-2"></span></a>
            </div>
        </div>
    </div>
   
</body>

</html>

<?= $this->endSection() ?>