<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h3 class="text-center mt-3">Galery Surat</h3>
        <div class="row">
          <div class="col">
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-2" style="margin-left: 140px;">
      <div class="col mt-4">
        <h4 style="margin-left: 120px;">Surat Masuk</h4>
        <?php foreach ($suratmasuk as $row) : ?>
          <div class="card mb-3 mt-3" style="max-width: 420px;">
            <div class="row">
              <div class="col">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="<?= base_url('assets/file/suratmasuk/') . $row['file']; ?>" class="img-thumbnail" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><?= $row['pengirim'] ?></h5>
                      <p class="card-text"><?= $row['isi_surat'] ?></p>
                      <p class="card-text"><small class="text-muted"><?= $row['tgl_surat'] ?></small></p>
                      <a href="<?= base_url('index.php/galery/proses_download/') ?>" class="badge badge-success">Download</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="col mt-4">
        <h4 style="margin-left: 120px;">Surat Keluar</h4>
        <?php foreach ($suratkeluar as $row) : ?>
          <div class="card mb-3 mt-3" style="max-width: 420px;">
            <div class="row">
              <div class="col">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="<?= base_url('assets/file/suratkeluar/') . $row['file']; ?>" class="img-thumbnail" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><?= $row['pengirim'] ?></h5>
                      <p class="card-text"><?= $row['isi_surat'] ?></p>
                      <p class="card-text"><small class="text-muted"><?= $row['tgl_surat'] ?></small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>