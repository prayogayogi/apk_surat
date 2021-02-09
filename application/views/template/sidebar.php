<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-4 d-flex">
      <div class="image">
        <a href="<?= base_url('dashboard'); ?>"><img src="<?= base_url('assets/gambar/admin/') . $user['gambar'] ?>" class="rounded elevation-10" width="5px" height="5px" alt="User Image"></a>
      </div>
      <div class="info mt-2">
        <a href="<?= base_url('dashboard'); ?>" class="d-block ml-1 text-uppercase"><?= $user['nama']; ?></a>
        <?php if ($user['active'] == 1) { ?>
          <small class="badge badge-success ml-1" style="color: aliceblue;">Online</small>
        <?php } ?>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
          <a href="<?= base_url('dashboard'); ?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p id="dataLab">
              Data Lab
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('dataLab/dosen'); ?> " class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Dosen Lab</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('dataLab/pegawai'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Pegawai</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('dataLab/admin'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Admin</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('dataLab/mahasiswaMagang'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Mahasiswa Magang</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Surat-Surat
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('surat/suratMasuk'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Surat Masuk</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('surat/suratKeluar'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Surat Keluar</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Galery
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('galery/arsipSurat') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Arsip Surat</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="<?= base_url('dashboard/tambahAdmin'); ?>" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Tambah Admin
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="<?= base_url('login/logout'); ?>" onclick="return confirm ('Anda Yakin Inggin Keluar..?')" ; class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Log out
            </p>
          </a>
        </li>
    </nav>
  </div>
</aside>