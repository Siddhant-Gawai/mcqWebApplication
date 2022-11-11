<div class="container py-4">
    <a href="<?php echo base_url('LoggedDashboard/index') ?>" style="color:#000;">
        <i class="bi bi-arrow-bar-left"></i>Go Back
    </a>
    <h1 class="h1 text-center" id="pageHeaderTitle" style="color: #000;">Exam Instructions</h1>
    <div>
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
    <div class="card p-5 border border-dark border-5">
        <p class="text-justify">
            <h2> Exam Name : <?php echo $exam['exams_name'] ?> </h2> <br>
            <h5> No. of Questions : <?php echo $exam['exams_questions'] ?> </h5> <br>
            <h5> Exam Duration : <?php echo $exam['exams_time'].' minutes' ?> </h5>
			<p> <h5>Description : </h5> <?php echo $exam['exams_desc']; ?>  </p>


            <!-- The duration of this exam is [Exam duration] minutes.

            Allow adequate time to complete this exam in one sitting before the due date and time. Late submissions will not/may not be accepted.

            This is an open book/closed book/restricted open book exam. The following materials and provisions are permitted: 

            Insert as necessary (be specific and clear)

            e.g. Physical and digital prescribed textbook
            e.g. Microsoft Word (non-web version)
            e.g. Course websites / websites: http://www.online.uts.edu.au
            e.g. Any / Scientific / Non-programmable calculator
            There are X questions in this exam and will be presented one at a time/all at once.

            Each question is worth the same/different marks.

            The examination is worth X% of the marks available in this subject. The contribution each question makes to the total examination mark is indicated in points or as a percentage.

            During this exam you will/won’t be permitted to review previous questions.

            ***Add any additional instructions specific to your exam***

            If you have technical difficulties with your exam, contact the UTS exam hotline (+61 2 9514 3222) for technical support. STAFF MEMBER NAME will be available (Specify time e.g. during the first hour of the examination time) and may also be contacted via Email / MS Teams / LMS / Zoom.

            Examination Conduct
            You must only attempt this exam once. Any additional attempts should only be used in the event where a serious technical issue has occurred and supporting evidence supporting this will be required.

            You are not permitted to obtain assistance by improper means or ask for help from or give help to any other person.

            You are not permitted to take screenshots, record the screen, copy and paste questions or answers or otherwise attempt to take any of the content of this exam out of the exam for any purpose.

            You are not permitted to post any requests for clarification of exam content. Answer all questions to the best of your ability and perception of the questions’ intent, make reasonable assumptions if necessary, to answer all questions. UTS assessments never apply negative marking techniques.

            Misconduct action will be taken against you if you breach university rules.

            Student declaration
            By attempting this exam, I acknowledge that

            I agree to be bound by the university’s rules, codes of conduct, and other policies relating to examinations
            I have read and understand the examination conduct requirements for this exam
            I am aware of the university’s rules regarding misconduct during examinations
            I am not in possession of, nor do I have access to, any unauthorised material during this examination
            In attempting this examination and submitting an answer, candidates are undertaking that the work they submit is a result of their own unaided efforts and that they have not discussed the questions or possible answers with other persons during the examination period. Candidates who are found to have participated in any form of cooperation or collusion or any activity which could amount to academic misconduct in the answering of this examination will have their marks withdrawn and disciplinary action will be initiated.

            Vivas or other invigilated tasks may be used to verify student achievement of learning outcomes to ensure they have completed the work on their own and to assess their knowledge of the answers they have submitted. -->
        </p>
    </div>

    <div class="text-center mt-4">
    <a href="<?php echo base_url('Exams/startExam/'.$exam['idexams']) ?>" class="btn btn-lg btn-block btn-info"> 
    Start Exam    
</a>
    </div>

</div>
