<div class="login-box">
  <div class="login-logo">
    <div class="flash-data"> </div>
    <br><br>
    <a href="#"><b><?= $judul; ?></b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card mb-5">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your Username</p>

      <form action="<?= base_url('login'); ?>" method="post">
        <?= form_error('email', '  <small class="text-danger  mb-3 ml-2">', '</small>') ?>
        <div class="input-group mb-3">
          <input type="text" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <?= form_error('password', '  <small class="text-danger  mb-3 ml-2">', '</small>') ?>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4 justify-content-end">
            <button type="submit" class="btn btn-primary btn-block ">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->

      <!-- <p class="mb-0">
        <a href="<?= base_url('register/registrasi'); ?>" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
  <div class="pesan mt-5"><?= $this->session->flashdata('pesan'); ?></div>
</div>
<!-- /.login-box -->