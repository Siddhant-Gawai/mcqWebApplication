<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
		  <h3 class="box-title">Class Edit</h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Class</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>




<section class="content">
<div class="row">
    <div class="col-md-12">
      	<div class="card card-primary">
           <div class="card-header">
			   <h3 class="card-title">Class</h3> 
            </div>
			<?php echo form_open('Classroom/edit/' . $classroom['classroom_ID']); ?>
			<div class="card-body">
				<div class="row container-fluid">
					
					<div class="col-md-8">
						<label for="classroom" class="control-label">classroom</label>
						<div class="form-group">
							<input type="text" name="classroom" value="<?php echo $this->input->post('classroom_no' )? $this->input->post('classroom_no'): $classroom[ 'classroom_no']; ?>" class="form-control" id="classroom" /> <span style="color:red"><?php echo form_error('classroom'); ?></span>
                        </div>
                    </div>
				</div>
      </div>
      <div class="box-footer">
            	<button type="submit" class="btn btn-success" style="margin-left:20px; margin-bottom:10px">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
          	<?php echo form_close(); ?>
</div>
    </div>
    </div>
   
</section>




</div>
