<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col ml-2 mt-3 mb-2">
        <h3>Daftar Surat Keluar</h3>
        <a href="<?= base_url('surat/tambahSuratKeluar'); ?>" class="btn mt-2 mb-3 btn-primary"> <i class="fas fa-plus mr-2"></i>Tambah Data</a>
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
                  <a href="<?= site_url('surat/hapusSuratKeluar/') . $row['id']; ?>" class="btn btn-warning ml-2"><i class="fas fa-trash-alt"></i></a>
                  <a href="http://" class="btn btn-info"><i class="far fa-edit"></i></a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>