<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col ml-2 mt-3 mb-2">
        <h3>Data Dosen Lab</h3>
        <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn mt-2 mb-3 btn-primary"><i class="fas fa-plus mr-2"></i>Tambah Data</a>
        <?= $this->session->flashdata('pesanDosen'); ?>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <table class="table table-bordered text-center">
          <thead class="thead-light">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Jabatan</th>
              <th scope="col">No Hp</th>
              <th scope="col">Gambar</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($dosen as $row) : ?>
              <tr>
                <th scope="row"> <?= $no++; ?> </th>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['jabatan']; ?></td>
                <td><?= $row['no_hp']; ?></td>
                <td>
                  <img src="<?= base_url('assets/gambar/') . $row['gambar']; ?>" width="50px" alt="">
                </td>
                <td>
                  <a href="<?= base_url('dataLab/hapus/') . $row['id_dosen']; ?>" onclick="return confirm('Yakin Inggin Hapus..?')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                  <a href="<?= base_url('dataLab/editDataDosen/') . $row['id_dosen']; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>

<!-- modal tambah data -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Dosen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open_multipart('dataLab/tambahDataDosen') ?>
        <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Jabatan</label>
          <input type="text" name="jabatan" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jabatan" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">No Hp</label>
          <input type="number" name="no_hp" class="form-control" id="exampleInputEmail1" placeholder="Masukan No Hp">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Foto</label>
          <input type="file" name="gambar" class="form-control" id="exampleInputEmail1" placeholder="Masukan Foto">
        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        <?= form_close(); ?>
      </div>
    </div>
  </div>
</div>
<!-- akhir modal -->