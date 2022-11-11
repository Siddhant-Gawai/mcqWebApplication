<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
		 <h3 class="box-title">Classroom List</h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Classroom</a></li>
              <li class="breadcrumb-item active">Index</li>
            </ol>
          </div>
        </div>
      </div>
    </div>


  <!-----flash messages--->
  <div class="container-fluid">
  <div id="mydivs">   
            <?php echo $this->session->flashdata('success'); ?>

            <script> 
        setTimeout(function() {
            $('#mydivs').hide('fast');
        }, 3000);
    </script>
    </div>
    <div id="mydiv1">   
            <?php echo $this->session->flashdata('danger'); ?>

            <script> 
        setTimeout(function() {
            $('#mydiv1').hide('fast');
        }, 3000);
    </script>
    </div>
    </div>
      <!-----flash messages end--->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Customer list
                            </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="classroomlist" class="table table-bordered table-striped">
                  <thead>
                  <tr>
						<th>User name</th>
						<th>Phone Number</th>
						<th>Email-Id</th>

            <th>Action</th>
                  </tr>
                  </thead>
                
                 
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>

