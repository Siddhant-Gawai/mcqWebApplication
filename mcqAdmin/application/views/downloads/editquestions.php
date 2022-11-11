<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="box-title">Edit Questions</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Questions</a></li>
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
                        <h3 class="card-title">Edit Questions</h3>
                    </div>
                    <?php echo form_open_multipart('Downloads/addquestion/'); ?>
                    <div class="card-body" id="myid">
                        <div class="row container-fluid">
                            <div class="col-md-12">
                            <label for="class_Name" class="control-label">Select Exam</label>
                                <select class="form-control show-tick" name="exam" id="exam">
                                    <option disabled selected value> -- Select Exams --</option>
                                    <?php foreach ($exam as $ct) { ?>
                                        <option value="<?php echo $ct['idexams']; ?>"> <?php echo $ct['exams_name']; ?> </option>
                                    <?php } ?>
                                </select>
                                <span style="color:red"><?php echo form_error('exam'); ?></span>
                            </div>
                        </div>
                        <div class="row container-fluid">
                            <div class="col-md-12 mt-4">
                                <label for="class_Name" class="control-label">Upload File</label>
                                <div class="input-group" style="margin-bottom:10px;">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-upload"></i></span>
                                    </div>
                                    <input type="file" name="upload" required accept=".csv" />
                                </div>
                                <span style="color:red"><?php if (isset($upload_error)) {
                                                            echo $upload_error;
                                                        } ?></span>
                            </div>
                        </div>

                        <div class="col-md-8 box-footer">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-plus-square"> &nbsp; </i> Edit Data
                            </button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </section>
</div>