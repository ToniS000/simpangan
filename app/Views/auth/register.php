<?= $this->extend('layout/auth_templates'); ?>

<?= $this->Section('auth_content'); ?>

<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-xl-6 col-lg-12 col-md-9">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                </div>
                <?php if (isset($validation)) : ?>
                  <div class="col-sm">
                    <div class="card bg-danger text-white shadow mb-3">
                      <div class="card-body small">
                        <?= $validation->listErrors(); ?>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
                <form class="user" action="/register" method="post">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="name" placeholder="Full Name" value="<?= set_value('name'); ?>" autofocus>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="password" class="form-control form-control-user" name="password1" placeholder="Password">
                    </div>
                    <div class="col-sm-6">
                      <input type="password" class="form-control form-control-user" name="password2" placeholder="Password Confirm">
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block">
                    Sign-Up
                  </button>
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="login">Already have an account? Login!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>

<?= $this->endSection(); ?>