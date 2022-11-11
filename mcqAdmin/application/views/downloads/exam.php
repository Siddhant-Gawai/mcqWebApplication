<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="box-title">Exams List</h3>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Exams</a></li>
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
                            <h3 class="card-title">Exams list | <a href="<?php echo base_url('Downloads/addExam');?>" class="btn btn-primary text-white">Add Exams</a></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Exam Name</th>
                                        <th>Desc</th>
                                        <th>Time(In minutes)</th>
                                        <th>No. Of questions</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($exam as $d) { ?>
                                        <tr>
                                            <td> <?php echo $d['exams_name']; ?> </td>
                                            <td> <?php echo $d['exams_desc']; ?> </td>
                                            <td> <?php echo $d['exams_time']; ?> </td>
                                            <td> <?php echo $d['exams_questions']; ?> </td>
                                            <td> <?php if($d['exams_status']){
                                                echo'<span class="badge badge-primary">Active</span>';
                                            } else {
                                                echo'<span class="badge badge-danger">Disabled</span>';
                                            } ?> </td>
                                            <td> <a href="<?php echo site_url('Downloads/removeExam/' . $d['idexams']); ?>"class="btn btn-danger btn-sm text-white"><span class="fa fa-trash-alt"></span> Delete</a>
                                            <a href="<?php echo site_url('Downloads/changeStatus/' . $d['idexams']); ?>"class="btn btn-warning btn-sm"><span class="fa fa-sync"></span> Change Status</a>                    
                                            <a href="<?php echo site_url('Downloads/editExam/' . $d['idexams']); ?>"class="btn btn-primary btn-sm"><span class="fa fa-pen-alt"></span> Edit</a>
                                        
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