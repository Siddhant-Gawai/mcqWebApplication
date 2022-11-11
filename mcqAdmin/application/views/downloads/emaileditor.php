<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="box-title">Send Email</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Email</a></li>
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
                        <h3 class="card-title">Send Email</h3>
                    </div>
                    <?php echo form_open('Downloads/sendEmail'); ?>
                    <div class="card-body" id="myid">
                        <div class="row container-fluid">
                            <div class="col-md-12">
                                <label for="class_Name" class="control-label">Email Subject</label>
                                <div class="input-group" style="margin-bottom:10px;">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-heading"></i></span>
                                    </div>
                                    <input type="text" placeholder="Enter Email Subject" name="subject" value="" class="form-control" id="subject" />
                                </div>
                                <span style="color:red"><?php echo form_error('subject'); ?></span>
                            </div>
                        </div>
                        <div class="row container-fluid">
                            <div class="col-md-12">
                                <label for="desc" class="control-label">Description</label>
                                <div class="input-group" style="margin-bottom:10px;">
                                    <!-- <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-file-alt"></i></span>
                                    </div> -->
                                    <textarea type="text" name="desc" class="form-control"></textarea>
                                </div>
                                <span style="color:red"><?php echo form_error('desc'); ?></span>
                            </div>
                        </div>
                        <div class="col-md-8 box-footer">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-plus-square"> &nbsp; </i> Send Email
                            </button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- code for on submit and on page refresh form should not be submit -->
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>

<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('desc');
</script>