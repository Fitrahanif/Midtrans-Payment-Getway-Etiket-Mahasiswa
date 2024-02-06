<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="<?= base_url() ?>favicon.ico">
  <title>E-TIKET STMIK WP</title>
  <!-- Simple bar CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>css/simplebar.css">
  <!-- Fonts CSS -->
  <link
    href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <!-- Icons CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>css/feather.css">
  <link rel="stylesheet" href="<?= base_url() ?>css/select2.css">
  <link rel="stylesheet" href="<?= base_url() ?>css/dropzone.css">
  <link rel="stylesheet" href="<?= base_url() ?>css/uppy.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>css/jquery.steps.css">
  <link rel="stylesheet" href="<?= base_url() ?>css/jquery.timepicker.css">
  <link rel="stylesheet" href="<?= base_url() ?>css/quill.snow.css">
  <!-- Date Range Picker CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>css/daterangepicker.css">
  <!-- App CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>css/app-light.css" id="lightTheme">
</head>

<body class="horizontal dark  ">
  <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
    <div class="container text-light">
      <div class="w-100 d-flex justify-content-between">
        <div>
          <i class="fe fe-mail mx-2"></i>
          <a class="navbar-sm-brand text-light text-decoration-none"
            href="mailto:info@company.com">stmikwp@gmail.com</a>
          <i class="fe fe-phone-call mx-2"></i>
          <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">085713009069</a>
        </div>
        <div>
          <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i
              class="fe fe-facebook mx-2"></i></a>
          <a class="text-light" href="https://www.instagram.com/" target="_blank"><i
              class="fe fe-instagram mx-2"></i></a>
          <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fe fe-twitter mx-2"></i></a>
          <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fe fe-youtube mx-2"></i></a>
        </div>
      </div>
    </div>
  </nav>
  <div class="wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-white flex-row border-bottom shadow">
      <div class="container-fluid">
        <div class=" d-flex">
          <a class="navbar-brand mx-auto flex-fill text-center " href="./index.html">
            <img width="52px" src="<?= base_url() ?>img/logo/stmik1.png" alt="">

          </a>
        </div>
        <button class="navbar-toggler mt-2 mr-auto toggle-sidebar text-muted">
          <i class="fe fe-menu navbar-toggler-icon"></i>
        </button>

        <div class="navbar-slide bg-white ml-lg-4" id="navbarSupportedContent">
          <a href="#" class="btn toggle-sidebar d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
            <i class="fe fe-x"><span class="sr-only"></span></i>
          </a>
          <ul class="navbar-nav mr-auto">

            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/user/home') ?>">
                <span class="ml-lg-2">Home</span>
              </a>
            </li>

            <ul class="navbar-nav mr-auto">

              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/user/shop') ?>">
                  <span class="ml-lg-5">Shop</span>
                </a>
              </li>

              <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('/user/contact') ?>">
                    <span class="ml-lg-5">Contact</span>
                  </a>
                </li>


                <ul class="navbar-nav mr-auto">

                  <li class="nav-item">
                    <form action="<?= base_url("auth/logout") ?>" method="post">
                      <?= csrf_field() ?>
                      <button class="btn" type="submit">
                        <span class="ml-lg-5">Logout</span>
                      </button>
                    </form>
                  </li>

                  <ul class="navbar-nav mr-auto">
                  </ul>
                  </li>
                </ul>

        </div>
        <form class="form-inline ml-md-auto d-none d-lg-flex searchform text-muted">
          <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search"
            placeholder="Type something..." aria-label="Search">
        </form>

        <ul class="navbar-nav d-flex flex-row">
          <li class="nav-item dropdown ml-lg-0">
            <a class="nav-link dropdown-toggle text-muted" href="#" id="navbarDropdownMenuLink" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="avatar avatar-sm mt-2">
                <img src="<?= base_url() ?>./assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
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
      </div>
      <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="list-group list-group-flush my-n3">
                <div class="list-group-item bg-transparent">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="fe fe-box fe-24"></span>
                    </div>
                    <div class="col">
                      <small><strong>Package has uploaded successfull</strong></small>
                      <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                      <small class="badge badge-pill badge-light text-muted">1m ago</small>
                    </div>
                  </div>
                </div>
                <div class="list-group-item bg-transparent">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="fe fe-download fe-24"></span>
                    </div>
                    <div class="col">
                      <small><strong>Widgets are updated successfull</strong></small>
                      <div class="my-0 text-muted small">Just create new layout Index, form, table</div>
                      <small class="badge badge-pill badge-light text-muted">2m ago</small>
                    </div>
                  </div>
                </div>
                <div class="list-group-item bg-transparent">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="fe fe-inbox fe-24"></span>
                    </div>
                    <div class="col">
                      <small><strong>Notifications have been sent</strong></small>
                      <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                      <small class="badge badge-pill badge-light text-muted">30m ago</small>
                    </div>
                  </div> <!-- / .row -->
                </div>
                <div class="list-group-item bg-transparent">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="fe fe-link fe-24"></span>
                    </div>
                    <div class="col">
                      <small><strong>Link was attached to menu</strong></small>
                      <div class="my-0 text-muted small">New layout has been attached to the menu</div>
                      <small class="badge badge-pill badge-light text-muted">1h ago</small>
                    </div>
                  </div>
                </div> <!-- / .row -->
              </div> <!-- / .list-group -->
            </div>
            <div class="cart-btns">
              <a href="#">View Cart</a>
              <!-- <a href="#">Checkout <i class="fa fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
        </div>
      </div>

    </nav>

    <div class="main-panel">
      <div class="content-wrapper">
        <?= $this->renderSection('content_user') ?>
      </div>
    </div> <!-- .wrapper -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>js/jquery.min.js"></script>
    <script src="<?= base_url() ?>js/popper.min.js"></script>
    <script src="<?= base_url() ?>js/moment.min.js"></script>
    <script src="<?= base_url() ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>js/simplebar.min.js"></script>
    <script src='<?= base_url() ?>js/daterangepicker.js'></script>
    <script src='<?= base_url() ?>js/jquery.stickOnScroll.js'></script>
    <script src="<?= base_url() ?>js/tinycolor-min.js"></script>
    <script src="<?= base_url() ?>js/config.js"></script>
    <script src="<?= base_url() ?>js/d3.min.js"></script>
    <script src="<?= base_url() ?>js/topojson.min.js"></script>
    <script src="<?= base_url() ?>js/datamaps.all.min.js"></script>
    <script src="<?= base_url() ?>js/datamaps-zoomto.js"></script>
    <script src="<?= base_url() ?>js/datamaps.custom.js"></script>
    <!-- <script src="<?= base_url() ?>/Chart.min.js"></script>
    <script>
      /* defind global options */
      Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
      Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    <script src="<?= base_url() ?>js/gauge.min.js"></script>
    <script src="<?= base_url() ?>js/jquery.sparkline.min.js"></script>
    <script src="<?= base_url() ?>js/apexcharts.min.js"></script>
    <script src="<?= base_url() ?>js/apexcharts.custom.js"></script>
    <script src='<?= base_url() ?>js/jquery.mask.min.js'></script>
    <script src='<?= base_url() ?>js/select2.min.js'></script>
    <script src='<?= base_url() ?>js/jquery.steps.min.js'></script>
    <script src='<?= base_url() ?>js/jquery.validate.min.js'></script>
    <script src='<?= base_url() ?>js/jquery.timepicker.js'></script>
    <script src='<?= base_url() ?>js/dropzone.min.js'></script>
    <script src='<?= base_url() ?>js/uppy.min.js'></script>
    <script src='<?= base_url() ?>js/quill.min.js'></script> -->
    <script>
      $('.select2').select2(
        {
          theme: 'bootstrap4',
        });
      $('.select2-multi').select2(
        {
          multiple: true,
          theme: 'bootstrap4',
        });
      $('.drgpicker').daterangepicker(
        {
          singleDatePicker: true,
          timePicker: false,
          showDropdowns: true,
          locale:
          {
            format: 'MM/DD/YYYY'
          }
        });
      $('.time-input').timepicker(
        {
          'scrollDefault': 'now',
          'zindex': '9999' /* fix modal open */
        });
      /** date range picker */
      if ($('.datetimes').length) {
        $('.datetimes').daterangepicker(
          {
            timePicker: true,
            startDate: moment().startOf('hour'),
            endDate: moment().startOf('hour').add(32, 'hour'),
            locale:
            {
              format: 'M/DD hh:mm A'
            }
          });
      }
      var start = moment().subtract(29, 'days');
      var end = moment();

      function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      }
      $('#reportrange').daterangepicker(
        {
          startDate: start,
          endDate: end,
          ranges:
          {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          }
        }, cb);
      cb(start, end);
      $('.input-placeholder').mask("00/00/0000",
        {
          placeholder: "__/__/____"
        });
      $('.input-zip').mask('00000-000',
        {
          placeholder: "____-___"
        });
      $('.input-money').mask("#.##0,00",
        {
          reverse: true
        });
      $('.input-phoneus').mask('(000) 000-0000');
      $('.input-mixed').mask('AAA 000-S0S');
      $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ',
        {
          translation:
          {
            'Z':
            {
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
          [
            {
              'font': []
            }],
          [
            {
              'header': [1, 2, 3, 4, 5, 6, false]
            }],
          ['bold', 'italic', 'underline', 'strike'],
          ['blockquote', 'code-block'],
          [
            {
              'header': 1
            },
            {
              'header': 2
            }],
          [
            {
              'list': 'ordered'
            },
            {
              'list': 'bullet'
            }],
          [
            {
              'script': 'sub'
            },
            {
              'script': 'super'
            }],
          [
            {
              'indent': '-1'
            },
            {
              'indent': '+1'
            }], // outdent/indent
          [
            {
              'direction': 'rtl'
            }], // text direction
          [
            {
              'color': []
            },
            {
              'background': []
            }], // dropdown with defaults from theme
          [
            {
              'align': []
            }],
          ['clean'] // remove formatting button
        ];
        var quill = new Quill(editor,
          {
            modules:
            {
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
        var uppy = Uppy.Core().use(Uppy.Dashboard,
          {
            inline: true,
            target: uptarg,
            proudlyDisplayPoweredByUppy: false,
            theme: 'dark',
            width: 770,
            height: 210,
            plugins: ['Webcam']
          }).use(Uppy.Tus,
            {
              endpoint: 'https://master.tus.io/files/'
            });
        uppy.on('complete', (result) => {
          console.log('Upload complete! We’ve uploaded these files:', result.successful)
        });
      }
    </script>
    <script src="js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
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