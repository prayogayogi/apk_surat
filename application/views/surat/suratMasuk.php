<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col ml-2 mt-3 mb-2">
        <h3>Daftar Surat Masuk</h3>
        <a href="<?= base_url('surat/tambahSuratMasuk'); ?>" class="btn mt-2 mb-3 btn-primary"><i class="fas fa-plus mr-2"></i>Tambah Data</a>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <table class="table mt-3 table-striped table-bordered text-center">
          <thead>
            <tr>
              <th scope="col">No Agenda</th>
              <th scope="col">Pengirim</th>
              <th scope="col">No Surat</th>
              <th scope="col">Tgl Surat</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $row) : ?>
              <tr>
                <th><?= $row['no_agenda']; ?></th>
                <td><?= $row['pengirim']; ?></td>
                <td><?= $row['no_surat']; ?></td>
                <td>1<?= $row['isi_surat']; ?></td>
                <td>
                  <a href="<?= base_url('surat/hapusSuratMasuk/') . $row['id']; ?>" class="btn btn-warning ml-2"><i class="fas fa-trash-alt"></i></a>
                  <a href="<?= site_url('surat/editSuratMasuk/') . $row['id']; ?>" class="btn btn-info"><i class="far fa-edit"></i></a>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?= base_url('dataLab/tambahData'); ?>">
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
          <div class="modal-footer">
            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>