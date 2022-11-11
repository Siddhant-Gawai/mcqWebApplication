<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="box-title">Students List</h3>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Students</a></li>
                        <li class="breadcrumb-item active">Index</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
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

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title">Students list </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <h2> Total No. of questions: <?php echo $users['exams_questions']; ?> </h2>
                            <h2> Total No. of questions solved: <?php echo $solved; ?> </h2>
                            <h2> Total No. of Correct answers: <?php echo $correctans; ?> </h2>
                            <h2> Passing marks: 40</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>