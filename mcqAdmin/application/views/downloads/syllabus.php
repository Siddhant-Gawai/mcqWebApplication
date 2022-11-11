<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="box-title">Syllabus List</h3>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Syllabus</a></li>
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
                        <div class="card-header bg-white">
                            <h3 class="card-title">Syllabus list | <a href="<?php echo base_url('Downloads/addsyllabus');?>" class="btn btn-primary text-white">Add Syllabus</a></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Exam</th>
                                        <th>Title</th>
                                        <th>Desc</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($syllabus as $s) { ?>
                                        <tr>
                                            <td> <?php echo $s['exams_name']; ?> </td>
                                            <td> <?php echo $s['syllabus_title']; ?> </td>
                                            <td> <?php echo $s['syllabus_desc']; ?> </td>
                                            <td> <a href="<?php echo site_url('Downloads/removeSyllabus/' . $s['idsyllabus']); ?>"class="btn btn-danger btn-sm text-white"><span class="fa fa-trash-alt"></span> Delete</a>
                                            <a href="<?php echo site_url('Downloads/updateSyllabus/' . $s['idsyllabus']); ?>"class="btn btn-success btn-sm text-white"><span class="fa fa-pen-alt"></span> Edit</a>
                                        </td>
                                        
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>