<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?= $suratmasuk; ?></h3>

              <p>Surat Masuk</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?= $suratkeluar; ?><sup style="font-size: 20px"></sup></h3>

              <p>Surat Keluar</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?= $dataDosen; ?></h3>

              <p>Data Dosen</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?= $dataPegawai; ?></h3>

              <p>Data Pegawai</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
  </section>
  <!-- akhir -->


  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Stastistic Web Aplication</h5>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
            <div class="btn-group">
            </div>
            <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
              <i class="fas fa-times"></i>
            </button> -->
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-md-8">
              <p class="text-center">
                <strong class="h4">Table Data Surat Masuk</strong>
              </p>
              <table class="table table-striped table-bordered shadow-lg p-3 mb-5 bg-white rounded">
                <thead class="table-info">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Pengirim</th>
                    <th scope="col">No Surat</th>
                    <th scope="col">Tgl Surat</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($surat as $surats) : ?>
                    <tr>
                      <th scope="row"><?= $no++; ?></th>
                      <td><?= $surats['pengirim']; ?></td>
                      <td><?= $surats['no_surat']; ?></td>
                      <td><?= $surats['tgl_surat']; ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
              <!-- /.chart-responsive -->
            </div>
            <div class="col-sm-4">
              <p class="text-center">
                <strong>Stastitik</strong>
              </p>
              <div class="progress-group">
                Surat Masuk
                <span class="float-right"><b><?= $suratmasuk; ?></b>/100</span>
                <div class="progress progress-sm">
                  <div class="progress-bar bg-primary" style="width: <?= $suratmasuk; ?>%"></div>
                </div>
              </div>
              <!-- /.progress-group -->

              <div class="progress-group">
                Surat Keluar
                <span class="float-right"><b><?= $suratkeluar; ?></b>/100</span>
                <div class="progress progress-sm">
                  <div class="progress-bar bg-danger" style="width: <?= $suratkeluar; ?>%"></div>
                </div>
              </div>

              <!-- /.progress-group -->
              <div class="progress-group">
                <span class="progress-text">Data Dosen</span>
                <span class="float-right"><b><?= $dataDosen; ?></b>/100</span>
                <div class="progress progress-sm">
                  <div class="progress-bar bg-success" style="width: <?= $dataDosen; ?>%"></div>
                </div>
              </div>

              <!-- /.progress-group -->
              <div class="progress-group">
                Data Pegawai
                <span class="float-right"><b><?= $dataPegawai; ?></b>/100</span>
                <div class="progress progress-sm">
                  <div class="progress-bar bg-warning" style="width: <?= $dataPegawai; ?>%"></div>
                </div>
              </div>
              <!-- /.progress-group -->

            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- ./card-body -->
        <div class="card-footer">
          <div class="row">

          </div>
          <!-- /.row -->
        </div>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</div>