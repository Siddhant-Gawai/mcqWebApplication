<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-xs-12">
          <div class="card">
            <div class="card-header text-white" style="background-color:#20A4F3">
              <h3 class="card-title">Admin Profile</h3>
            </div>
            <!-- /.box-header -->
            <div class="card-body">
              <table class="table table-bordered table-condensed table-hovered">
                <tr>
                  <th>Username</th>
                  <td><?php echo $user_data['username']; ?></td>
                </tr>
                <tr>
                  <th>Email</th>
                  <td><?php echo $user_data['email']; ?></td>
                </tr>    
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- col-md-12 -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  </div>

