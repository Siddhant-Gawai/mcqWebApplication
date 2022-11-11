<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="box-title">Edit your Downloads Material here</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Downloads</a></li>
                        <li class="breadcrumb-item active">Edit</li>
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
                        <h3 class="card-title">Edit Material</h3>
                    </div>
                    <?php echo form_open_multipart('Downloads/editDownload/' . $downloads['iddownloads']); ?>
                    <div class="card-body" id="myid">
                        <div class="row container-fluid">
                            <div class="col-md-12">
                                <label for="class_Name" class="control-label">Title</label>
                                <div class="input-group" style="margin-bottom:10px;">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-heading"></i></span>
                                    </div>
                                    <input type="text" placeholder="Enter title" name="title" value="<?php echo ($this->input->post('title') ? $this->input->post('title') : $downloads['downloads_title']); ?>" class="form-control" id="title" />
                                </div>
                                <span style="color:red"><?php echo form_error('title'); ?></span>
                            </div>
                        </div>
                        <div class="row container-fluid">
                            <div class="col-md-12">
                                <label for="class_Name" class="control-label">Description</label>
                                <div class="input-group" style="margin-bottom:10px;">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-file-alt"></i></span>
                                    </div>
                                    <textarea type="text" name="desc" placeholder="Enter description" class="form-control"><?php echo ($this->input->post('desc') ? $this->input->post('desc') : $downloads['downloads_desc']); ?> </textarea>
                                </div>
                                <span style="color:red"><?php echo form_error('desc'); ?></span>
                            </div>
                        </div>
                        
                        <label class="card-inside-title">Choose file</label>
                                        <div class="form-group">
                                            <input type="file" name="upload" />
                                        </div>

                        <div class="col-md-8 box-footer">
						<button type="submit" class="btn btn-primary">
							<i class="fa fa-plus-square"> &nbsp; </i>Edit Data
						</button>
					</div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </section>
</div>