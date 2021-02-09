<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col ml-2 mt-3 mb-2">
        <h3>Data Admin</h3>
        <!-- <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn mt-2 mb-3 btn-primary"><i class="fas fa-plus mr-2"></i>Tambah Data</a> -->
      </div>
    </div>
    <div class="row">
      <div class="col">
        <table class="table table-striped text-center table-bordered">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">Jabatan</th>
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
                <td><?= $row['email']; ?></td>
                <td><?= $row['nama_jabatan']; ?></td>
                <td> <img src="<?= base_url('assets/gambar/admin/') . $row['gambar']; ?>" width="50px" alt="gambar"> </td>
                <td>
                  <a href="<?= base_url('dataLab/habusDataAdmin/') . $row['id']; ?>" onclick="return confirm('Yakin Ingin Menghapus..?');" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                  <a href="#" data-toggle="modal" data-target="#exampleModaladmin<?= $row['id']; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>

<!-- Button trigger modal -->

<!-- Modal -->
<?php foreach ($dosen as $row) : ?>
  <div class="modal fade" id="exampleModaladmin<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Admin.</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?= form_open_multipart('dataLab/editDataAdmin') ?>
          <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" value="<?= $row['nama'] ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" name="email" class="form-control" id="exampleInputEmail1" value="<?= $row['email'] ?>" readonly>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Gambar</label>
            <input type="hidden" name="manipulasi" value="<?= $row['gambar'] ?>">
            <input type="file" name="file" class="form-control" value="<?= $row['gambar'] ?>" id="exampleInputEmail1">
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
          <?= form_close(); ?>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>