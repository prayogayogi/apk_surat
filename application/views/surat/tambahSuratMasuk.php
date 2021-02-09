<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 mb-4">
        <h3 class="judul mt-4 h3 text-gray-800">Tambah Surat Masuk</h3>
        <?= form_open_multipart('surat/aksiTambahSuratMasuk'); ?>
        <div class="row mt-4">
          <div class="col">
            <input type="hidden" name="id">
            <div class="form-group">
              <label for="no_agenda">No. Agenda</label>
              <input type="text" name="no_agenda" id="no_agenda" class="form-control border-left-primary" value="" autocomplete="off">
              <div class="invalid-feedback">
              </div>
            </div>
            <div class="form-group">
              <label for="pengirim">Pengirim</label>
              <input type="text" name="pengirim" id="pengirim" class="form-control border-left-primary" value="" autocomplete="off">
              <div class="invalid-feedback">
              </div>
            </div>
            <div class="form-group">
              <label for="no_surat">No. Surat</label>
              <input type="text" name="no_surat" id="no_surat" class="form-control border-left-primary" value="" autocomplete="off">
              <div class="invalid-feedback">
              </div>
            </div>
            <div class="form-group">
              <label for="isi">Isi Ringkas</label>
              <textarea name="isi_surat" id="isi" cols="30" rows="4" class="form-control border-left-primary"></textarea>
              <div class="invalid-feedback">
              </div>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="tgl_surat">Tanggal Surat</label>
              <input type="date" name="tgl_surat" id="tgl_surat" class="form-control border-left-primary" value="">
              <div class="invalid-feedback">
              </div>
            </div>
            <div class="form-group">
              <label for="tgl_diterima">Tanggal Diterima</label>
              <input type="date" name="tgl_diterima" id="tgl_diterima" class="form-control border-left-primary" value="">
              <div class="invalid-feedback">
              </div>
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan</label> <sup>*opsional</sup>
              <input type="text" name="keterangan" id="keterangan" class="form-control border-left-primary" value="" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="file">Upload File</label>
              <div class="custom-file">
                <input type="file" name="file" class="custom-file-input" id="file">
                <label class="custom-file-label" for="file">Choose file</label>
                <small class="text-sm text-info">Format file yang diizinkan .jpg, .png, .pdf dan ukuran maks 2 MB!</small>
              </div>
            </div>
            <!-- User Saved -->
            <div class="form-group">
              <button type="submit" class="float-right btn btn-primary">Tambah Data</button>
              <a href="<?= base_url('surat/suratMasuk'); ?>" class="float-right btn btn-warning mr-2">Kembali</a>
            </div>
          </div>
        </div>
        <?= form_close(); ?>
      </div>
    </div>
  </div>
</div>