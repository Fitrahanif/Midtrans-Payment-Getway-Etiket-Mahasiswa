<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="  <?= base_url() ?>favicon.ico">
    <title>E-TIKET STMIK WP</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="  <?= base_url() ?>css/simplebar.css">
    <!-- Fonts CSS -->

    <link
        href="  <?= base_url() ?>https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="  <?= base_url() ?>css/feather.css">
    <link rel="stylesheet" href="  <?= base_url() ?>css/select2.css">
    <link rel="stylesheet" href="  <?= base_url() ?>css/dropzone.css">
    <link rel="stylesheet" href="  <?= base_url() ?>css/uppy.min.css">
    <link rel="stylesheet" href="  <?= base_url() ?>css/jquery.steps.css">
    <link rel="stylesheet" href="  <?= base_url() ?>css/jquery.timepicker.css">
    <link rel="stylesheet" href="  <?= base_url() ?>css/quill.snow.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="  <?= base_url() ?>css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="  <?= base_url() ?>css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="  <?= base_url() ?>css/app-dark.css" id="darkTheme" disabled>
</head>

<body class="vertical  dark  ">
    <div class="wrapper">
        <nav class="topnav navbar navbar-light">
            <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
                <i class="fe fe-menu navbar-toggler-icon"></i>
            </button>
            <form class="form-inline mr-auto searchform text-muted">
                <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search"
                    placeholder="Type something..." aria-label="Search">
            </form>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="dark">
                        <i class="fe fe-sun fe-16"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted my-2" href="  <?= base_url() ?>./#" data-toggle="modal"
                        data-target=".modal-shortcut">
                        <span class="fe fe-grid fe-16"></span>
                    </a>
                </li>
                <li class="nav-item nav-notif">
                    <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
                        <span class="fe fe-bell fe-16"></span>
                        <span class="dot dot-md bg-success"></span>
                    </a>
                </li>
                <li class="nav-item dropdown ml-lg-0">
                    <a class="nav-link dropdown-toggle text-muted" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="avatar avatar-sm mt-2">
                            <img src="<?= base_url() ?>./assets/avatars/face-1.jpg" alt="..."
                                class="avatar-img rounded-circle">
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="#">Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="#">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="<?= base_url("auth/logout") ?>">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
            <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
                <i class="fe fe-x"><span class="sr-only"></span></i>
            </a>
            <nav class="vertnav navbar navbar-light">
                <!-- nav bar -->
                <div class="w-100 mb-4 d-flex">
                    <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                        <img width="150px" src="<?= base_url() ?>img/logo/stmik1.png" alt="">

                    </a>
                </div>

                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Components</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="<?= base_url('/admin/dashboard') ?>">
                            <i class="fe fe-home fe-16"></i>
                            <span class="ml-3 item-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item w-100">
                        <a class="nav-link" href="<?= base_url('/admin/grafik') ?>">
                            <i class="fe fe-pie-chart fe-16"></i>
                            <span class="ml-3 item-text">Grafik Penjualan</span>
                        </a>
                    </li>
                    <li class="nav-item w-100">
                        <a class="nav-link" href="<?= base_url('/admin/daftar') ?>">
                            <i class="fe fe-shield fe-16"></i>
                            <span class="ml-3 item-text">Data Pendaftar</span>
                        </a>
                    </li>
                    <li class="nav-item w-100">
                        <a class="nav-link" href="<?= base_url('/admin/Tiket') ?>">
                            <i class="fe fe-file fe-16"></i>
                            <span class="ml-3 item-text">Upload Tiket</span>
                        </a>
                    </li>

                    <li class="nav-item w-100">
                        <a class="nav-link" href="<?= base_url('/admin/pelayanan') ?>">
                            <i class="fe fe-users fe-16"></i>
                            <span class="ml-3 item-text">Pelayanan</span>
                        </a>
                    </li>
                    <li class="nav-item w-100">
                        <form action="<?= base_url("auth/logout") ?>" method="post">
                            <?= csrf_field() ?>
                            <button class="nav-link btn"
                                onclick="return confirm('Yakin ingin keluar dari sistem ini ?')" type="submit">
                                <i class="fe fe-log-out fe-16"></i>
                                <span class="ml-3 item-text">Logout</span>
                            </button>
                        </form>
                    </li>

            </nav>
        </aside>
        <main role="main" class="main-content">
            <div class="container-fluid">
                <?= $this->renderSection('content') ?>
            </div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous"></script>

            <script src="  <?= base_url() ?>js/jquery.min.js"></script>
            <script src="  <?= base_url() ?>js/popper.min.js"></script>
            <script src="  <?= base_url() ?>js/moment.min.js"></script>
            <script src="  <?= base_url() ?>js/bootstrap.min.js"></script>
            <script src="  <?= base_url() ?>js/simplebar.min.js"></script>
            <script src='  <?= base_url() ?>js/daterangepicker.js'></script>
            <script src='  <?= base_url() ?>js/jquery.stickOnScroll.js'></script>
            <script src="  <?= base_url() ?>js/tinycolor-min.js"></script>
            <script src="  <?= base_url() ?>js/config.js"></script>
            <script src="  <?= base_url() ?>js/d3.min.js"></script>
            <script src="  <?= base_url() ?>js/topojson.min.js"></script>
            <script src="  <?= base_url() ?>js/datamaps.all.min.js"></script>
            <script src="  <?= base_url() ?>js/datamaps-zoomto.js"></script>
            <script src="  <?= base_url() ?>js/datamaps.custom.js"></script>
            <!-- <script src="  <?= base_url() ?>js/Chart.min.js"></script> 
             <script>
                /* defind global options */
                Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
                Chart.defaults.global.defaultFontColor = colors.mutedColor;
            </script> 
            <script src=" <?= base_url() ?>js/gauge.min.js"></script>
            <script src=" <?= base_url() ?>js/jquery.sparkline.min.js"></script>
            <script src="  <?= base_url() ?>js/apexcharts.min.js"></script>
            <script src="  <?= base_url() ?>js/apexcharts.custom.js"></script>
            <script src='  <?= base_url() ?>js/jquery.mask.min.js'></script>
            <script src='  <?= base_url() ?>js/select2.min.js'></script>
            <script src='  <?= base_url() ?>js/jquery.steps.min.js'></script>
            <script src='  <?= base_url() ?>js/jquery.validate.min.js'></script>
            <script src='  <?= base_url() ?>js/jquery.timepicker.js'></script>
            <script src='  <?= base_url() ?>js/dropzone.min.js'></script>
            <script src='  <?= base_url() ?>js/uppy.min.js'></script>
            <script src='  <?= base_url() ?>js/quill.min.js'></script> -->
            <script>
                $('.select2').select2({
                    theme: 'bootstrap4',
                });
                $('.select2-multi').select2({
                    multiple: true,
                    theme: 'bootstrap4',
                });
                $('.drgpicker').daterangepicker({
                    singleDatePicker: true,
                    timePicker: false,
                    showDropdowns: true,
                    locale: {
                        format: 'MM/DD/YYYY'
                    }
                });
                $('.time-input').timepicker({
                    'scrollDefault': 'now',
                    'zindex': '9999' /* fix modal open */
                });
                /** date range picker */
                if ($('.datetimes').length) {
                    $('.datetimes').daterangepicker({
                        timePicker: true,
                        startDate: moment().startOf('hour'),
                        endDate: moment().startOf('hour').add(32, 'hour'),
                        locale: {
                            format: 'M/DD hh:mm A'
                        }
                    });
                }
                var start = moment().subtract(29, 'days');
                var end = moment();

                function cb(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                }
                $('#reportrange').daterangepicker({
                    startDate: start,
                    endDate: end,
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    }
                }, cb);
                cb(start, end);
                $('.input-placeholder').mask("00/00/0000", {
                    placeholder: "__/__/____"
                });
                $('.input-zip').mask('00000-000', {
                    placeholder: "____-___"
                });
                $('.input-money').mask("#.##0,00", {
                    reverse: true
                });
                $('.input-phoneus').mask('(000) 000-0000');
                $('.input-mixed').mask('AAA 000-S0S');
                $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
                    translation: {
                        'Z': {
                            pattern: /[0-9]/,
                            optional: true
                        }
                    },
                    placeholder: "___.___.___.___"
                });
                // editor
                var editor = document.getElementById('editor');
                if (editor) {
                    var toolbarOptions = [
                        [{
                            'font': []
                        }],
                        [{
                            'header': [1, 2, 3, 4, 5, 6, false]
                        }],
                        ['bold', 'italic', 'underline', 'strike'],
                        ['blockquote', 'code-block'],
                        [{
                            'header': 1
                        },
                        {
                            'header': 2
                        }
                        ],
                        [{
                            'list': 'ordered'
                        },
                        {
                            'list': 'bullet'
                        }
                        ],
                        [{
                            'script': 'sub'
                        },
                        {
                            'script': 'super'
                        }
                        ],
                        [{
                            'indent': '-1'
                        },
                        {
                            'indent': '+1'
                        }
                        ], // outdent/indent
                        [{
                            'direction': 'rtl'
                        }], // text direction
                        [{
                            'color': []
                        },
                        {
                            'background': []
                        }
                        ], // dropdown with defaults from theme
                        [{
                            'align': []
                        }],
                        ['clean'] // remove formatting button
                    ];
                    var quill = new Quill(editor, {
                        modules: {
                            toolbar: toolbarOptions
                        },
                        theme: 'snow'
                    });
                }
                // Example starter JavaScript for disabling form submissions if there are invalid fields
                (function () {
                    'use strict';
                    window.addEventListener('load', function () {
                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                        var forms = document.getElementsByClassName('needs-validation');
                        // Loop over them and prevent submission
                        var validation = Array.prototype.filter.call(forms, function (form) {
                            form.addEventListener('submit', function (event) {
                                if (form.checkValidity() === false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                }
                                form.classList.add('was-validated');
                            }, false);
                        });
                    }, false);
                })();
            </script>
            <script>
                var uptarg = document.getElementById('drag-drop-area');
                if (uptarg) {
                    var uppy = Uppy.Core().use(Uppy.Dashboard, {
                        inline: true,
                        target: uptarg,
                        proudlyDisplayPoweredByUppy: false,
                        theme: 'dark',
                        width: 770,
                        height: 210,
                        plugins: ['Webcam']
                    }).use(Uppy.Tus, {
                        endpoint: 'https://master.tus.io/files/'
                    });
                    uppy.on('complete', (result) => {
                        console.log('Upload complete! We’ve uploaded these files:', result.successful)
                    });
                }
            </script>
            <script src="  <?= base_url() ?>js/apps.js"></script>
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="  <?= base_url() ?>https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
            <script>
                window.dataLayer = window.dataLayer || [];

                function gtag() {
                    dataLayer.push(arguments);
                }
                gtag('js', new Date());
                gtag('config', 'UA-56159088-1');
            </script>
</body>

</html>