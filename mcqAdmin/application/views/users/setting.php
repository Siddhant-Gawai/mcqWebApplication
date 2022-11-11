<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Profile</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">Setting</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12 col-xs-12">


        <?php if ($this->session->flashdata('success')) : ?>
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('success'); ?>
          </div>
        <?php elseif ($this->session->flashdata('error')) : ?>
          <div class="alert alert-error alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('error'); ?>
          </div>
        <?php endif; ?>
        <div class="card">
          <!-- /.box-header -->
          <form role="form" action="<?php base_url('users/index'); ?>" method="post">

            <div class="card-body">

              <?php echo validation_errors(); ?>


              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo $user_data['username']; ?>" autocomplete="off">
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $user_data['email']; ?>" autocomplete="off">
              </div>

            </div>
            <!-- </div> -->

            <div class="card-body">
              <div class="form-group">
                <div class="alert alert-info alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  Leave the password field empty if you don't want to change.
                </div>
              </div>

              <div class="form-group">
                <label for="password">Type a new Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off">
              </div>

              <div class="form-group">
                <label for="cpassword">Confirm password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password" autocomplete="off">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Save Changes</button>
                <a href="<?php echo base_url(
                            'users/'
                          ); ?>" class="btn btn-warning">Back</a>
              </div>
            </div>
        </div>

        <!-- /.box-body -->
        </form>
      </div>
    </div>
    <!-- /.box -->
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
  $(document).ready(function() {
    $("#settingMainNav").addClass('active');
  });
</script>

</div>