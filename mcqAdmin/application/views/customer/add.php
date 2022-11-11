<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3 class="box-title">Add Classroom here</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Classroom</a></li>
            <li class="breadcrumb-item active">Add</li>
          </ol>
        </div>
      </div>
    </div>
  </div>



  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Classroom</h3>
          </div>
          <?php echo form_open('Classroom/add'); ?>
          <div class="card-body">
            <div class="row container-fluid">
              <div class="col-md-8">
                <label for="classroom" class="control-label">Classroom</label>
                <div class="form-group">
                  <input type="text" placeholder="Enter classroom" name="classroom" value="<?php echo $this->input->post('classroom'); ?>" class="form-control" id="classroom" /><span style="color:red"><?php echo form_error('classroom'); ?></span>
                </div>
              </div>
            </div>
          </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-primary" style="margin-left:20px; margin-bottom:10px">
              <i class="fa fa-check"></i> Submit
            </button>
          </div>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>

  </section>
</div>