<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col col-8 mt-2">
        <div class="card">
          <h5 class="card-header">Tambah Data Admin</h5>
          <div class="card-body">
            <div class="modal-body">
              <?= form_open_multipart('dataLab/tambahDataAdmin') ?>
              <input type="hidden" name="id" class="form-control" id="exampleInputEmail1">
              <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">email</label>
                <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Masukan Email" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Foto</label>
                <input type="file" name="gambar" class="form-control" id="exampleInputEmail1">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Masukan Password">
                <small class="h6 ml-2">Password Minimal 4 Karakter..!</small>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save </button>
              </div>
              <?= form_close(); ?>
              <a href="<?= base_url('dashboard'); ?>" class="btn btn-sm btn-dark"><i class="fas fa-backward"></i> <small class="h5 ml-2">Back</small> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>