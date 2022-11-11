<div class="container py-4 border border-primary">
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

    <div class="card text-center">
        <div class="p-2">
            <h2> Total No. of questions: <?php echo $users['exams_questions']; ?> </h2>
            <h2> Total No. of questions solved: <?php echo $solved; ?> </h2>
            <h2> Total No. of Correct answers: <?php echo $correctans; ?> </h2>
            <h2> Passing marks: 40</h2>
        </div>

        <a href="<?php echo base_url('LoggedDashboard/index') ?>" style="color:#000;">
        Finish<i class="bi bi-arrow-bar-right"></i>
        </a>
    </div>

</div>