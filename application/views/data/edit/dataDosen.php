<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col col-8 mt-2">
        <div class="card">
          <h5 class="card-header">Edit Data Dosen</h5>
          <div class="card-body">
            <div class="modal-body">
              <?= form_open_multipart('dataLab/aksiEditDataDosen') ?>
              <?php foreach ($edit as $edits) : ?>
                <input type="hidden" name="id" class="form-control" id="exampleInputEmail1" value="<?= $edits['id_dosen']; ?>">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputEmail1" value="<?= $edits['nama']; ?>" autocomplete="off" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jabatan</label>
                  <input type="text" name="jabatan" class="form-control" id="exampleInputEmail1" value="<?= $edits['jabatan']; ?>" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">No Hp</label>
                  <input type="number" name="no_hp" class="form-control" id="exampleInputEmail1" value="<?= $edits['no_hp']; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Foto</label>
                  <input type="file" name="gambar" class="form-control" id="exampleInputEmail1" value="<?= $edits['gambar']; ?>">
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              <?php endforeach; ?>
              <?= form_close(); ?>
              <a href="<?= base_url('dataLab/dosen'); ?>" class="btn btn-sm btn-dark"><i class="fas fa-backward"></i> <small class="h5 ml-2">Back</small> </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col" style="margin-left: 100px; margin-top:140px;">
        <?php foreach ($edit as $edits) : ?>
          <?php if ($edits['gambar'] == !null) { ?>
            <img src="<?= base_url('assets/gambar/') . $edits['gambar']; ?>" width="200px" alt="gambar" class="img-thumbnail">
          <?php }; ?>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>