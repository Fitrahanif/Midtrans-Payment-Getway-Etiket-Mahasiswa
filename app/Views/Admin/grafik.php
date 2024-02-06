<?= $this->extend('templates/admin_template') ?>
<?= $this->section("content") ?>
<h1 class="text-center">Data Grafik Penjualan </h1>
<div class="col-md-14 my-4">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="row">
          <div class="col-12 col-lg-15 mb-4">
            <div class="card shadow">
              <div class="card-header">
                <strong class="card-title mb-0">Column Chart</strong>
              </div>

              <head>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
              </head>

              <body>
                <?php
                
                foreach ($penjualan as $key => $value) {
                  $tgl[] = date('d F Y',strtotime ($value['tgl']));
                  $total_tiket[] = $value['total_tiket'];
                }

                ?>
                <div>
                  <canvas id="myChart"></canvas>
                </div>
                <script>
                  const ctx = document.getElementById('myChart');

                  new Chart(ctx, {
                    type: 'bar',
                    data: {
                      labels: <?php echo json_encode($tgl) ?>,
                      datasets: [{
                        label: '# Tiket yang terjual',
                        data: <?php echo json_encode($total_tiket) ?>,
                        borderWidth: 1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                </script>
              </body>


            </div> <!-- /.card -->
          </div> <!-- /. col -->
        </div> <!-- end section -->
      </div> <!-- .col-12 -->
    </div> <!-- .row -->
  </div> <!-- .container-fluid -->
</div>
<?= $this->endSection() ?>