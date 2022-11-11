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
			<?php echo form_open('SClass/edit/'.$class['class_ID']); ?>
			<div class="card-body">
				<div class="row container-fluid">
					<div class="col-md-8">
						<label for="class_Name" class="control-label">Class Name</label>
						<div class="form-group">
							<input type="text" name="class_Name" value="<?php echo ($this->input->post('class_Name') ? $this->input->post('class_Name') : $class['class_Name']); ?>" class="form-control" id="class_Name" />
                            <span style="color:red"><?php echo form_error('class_Name'); ?></span>
                        </div>
					</div>
					<div class="col-md-8">
						<label for="class_division" class="control-label">class Division</label>
						<div class="form-group">
							<input type="text" name="class_division" value="<?php echo ($this->input->post('class_division') ? $this->input->post('class_division') : $class['class_division']); ?>" class="form-control" id="class_division" />
                            <span style="color:red"><?php echo form_error('class_division'); ?></span>
                        </div>
					</div>
					<div class="col-md-8">
						<label for="class_teacher" class="control-label">Class Teacher </label>
						<div class="form-group">
                            <select class="custom-select form-control" name="class_teacher" required id="class_teacher">
							<option disabled selected value> -- select an teacher --</option> 
							 <?php
							 foreach($teacher as $t){?>
								<option value="<?php echo $t['teacher_id'];?>">  <?php echo $t['first_name'];' '.$t['last_name']; ?> </option>
								<?php } ?>  

                        </select>
						<span style="color:red"><?php echo form_error('class_teacher'); ?></span>
						</div>
					</div>

					<div class="col-md-8">
						<label for="fees" class="control-label">Tution Fees</label>
						<div class="form-group">
							<input type="text" name="fees" value="<?php echo ($this->input->post('fees') ? $this->input->post('fees') : $class['fees']); ?>" class="form-control" id="fees" />
                            <span style="color:red"><?php echo form_error('fees'); ?></span>
                        </div>
					</div>
					<div class="col-md-8">
						<label for="total" class="control-label">Total Fees</label>
						<div class="form-group">
							<input type="text" name="total" value="<?php echo ($this->input->post('total') ? $this->input->post('total') : $class['total']); ?>" class="form-control" id="total" />
                            <span style="color:red"><?php echo form_error('total'); ?></span>
                        </div>
					</div>	
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
</section>




</div>
