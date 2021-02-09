<!-- <div class="register-box">
  <div class="register-logo">
    <a href="#"><b><?= $judul; ?></b></a>
  </div>

  <div class="row">
    <div class="col col-12">
      <div class="card">
        <div class="card-body register-card-body">
          <p class="login-box-msg">Register a new membership</p>

          <form action="<?= base_url('register/registrasi'); ?>" method="post">
            <?= form_error('namaLengkap', '  <small class="text-danger  mb-3 ml-2">', '</small>') ?>
            <div class="input-group  mb-3">
              <input type="text" class="form-control" value="<?= set_value('namaLengkap') ?>" name="namaLengkap" placeholder="Full name">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <?= form_error('email', '  <small class="text-danger  mb-3 ml-2">', '</small>') ?>
            <div class="input-group mb-3">
              <input type="text" class="form-control" value="<?= set_value('email') ?>" name="email" placeholder="Email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <?= form_error('password1', '  <small class="text-danger  mb-3 ml-2">', '</small>') ?>
            <div class="input-group mb-3">
              <input type="password" class="form-control" name="password1" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <?= form_error('password2', '  <small class="text-danger  mb-3 ml-2">', '</small>') ?>
            <div class="input-group mb-3">
              <input type="password" class="form-control" name="password2" id="password2" placeholder="Retype password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" class="checkbox" id="checkbox" name="checkbox" value="agree">
                  <label for="checkbox">
                    Show Password
                  </label>
                </div>
              </div>
              <!-- /.col -->
<div class="col-4">
  <button type="submit" class="btn btn-primary btn-block">Register</button>
</div>
<!-- /.col -->
</div>
</form>
<a href="<?= base_url('login') ?>" class="text-center">I already have a membership</a>
</div>
</div>
</div>
</div>

</div> -->