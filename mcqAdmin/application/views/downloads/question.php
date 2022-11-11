<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="box-title">Questions List</h3>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Questions</a></li>
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
                            <h3 class="card-title">Questions list | <a href="<?php echo base_url('Downloads/addquestion');?>" class="btn btn-primary text-white">Add Questions</a></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Exam</th>
                                        <th>Question</th>
                                        <th>Option A</th>
                                        <th>Option B</th>
                                        <th>Option C</th>
                                        <th>Option D</th>
                                        <th>Answer</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($question as $d) { ?>
                                        <tr>
                                            <td> <?php echo $d['exams_name']; ?> </td>
                                            <td> <?php echo $d['questions_title']; ?> </td>
                                            <td> <?php echo $d['questions_optiona']; ?> </td>
                                            <td> <?php echo $d['questions_optionb']; ?> </td>
                                            <td> <?php echo $d['questions_optionc']; ?> </td>
                                            <td> <?php echo $d['questions_optiond']; ?> </td>
                                            <td> <?php echo $d['questions_answer']; ?> </td>
                                            <td> <a href="<?php echo site_url('Downloads/removequestion/'.$d['idquestions']); ?>"class="btn btn-danger btn-sm text-white"><span class="fa fa-trash-alt"></span> Delete</a></td>
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