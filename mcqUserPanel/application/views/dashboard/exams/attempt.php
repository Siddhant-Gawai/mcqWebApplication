<div class="m-4 p-4 border border-primary">
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
	<b> <i> No. Of questions :</i> <?php echo $exam['exams_questions']; ?> </b>
	<br>
	<b> <i> Duration :</i> <?php echo $exam['exams_time'] . 'minutes'; ?> </b>

	<!-- <div class="d-flex flex-row-reverse m-2"> -->
	<!-- <h3> Time remaining: <span id="timer"></span> </h3> -->
	<!-- </div> -->
	<div class="row">
		<div class="col-md-3">
			<div class="btn-group mr-2 flex-wrap" role="group">
				<?php foreach ($sr as $q) { ?>
					<?php if($que['qid'] == $q['qid']) { ?>
					<?php if ($q['completed'] == 0) { ?>
						<a class="btn btn-secondary border-3 border-danger m-1" style="text-decoration: none; border-radius: 0 !important;" type="button" href="<?php echo base_url('Exams/particular/' . $q['id'] . '/' . $exam['idexams']) ?>"> <?php echo ($q['srno']) ?> </a>
					<?php } else { ?>
						<a class="btn btn-success border-3 border-danger m-1" style="text-decoration: none; border-radius: 0 !important;" type="button" href="<?php echo base_url('Exams/particular/' . $q['id'] . '/' . $exam['idexams']) ?>"> <?php echo ($q['srno']) ?> </a>
				<?php } } else {  ?>
					<?php if ($q['completed'] == 0) { ?>
						<a class="btn btn-secondary m-1" style="text-decoration: none; border-radius: 0 !important;" type="button" href="<?php echo base_url('Exams/particular/' . $q['id'] . '/' . $exam['idexams']) ?>"> <?php echo ($q['srno']) ?> </a>
					<?php } else { ?>
						<a class="btn btn-success m-1" style="text-decoration: none; border-radius: 0 !important;" type="button" href="<?php echo base_url('Exams/particular/' . $q['id'] . '/' . $exam['idexams']) ?>"> <?php echo ($q['srno']) ?> </a>
					<?php } } } ?>
			</div>
		</div>
		<div class="col-md-9">
			<div class="p-2 card border-0 mt-2">
				<?php echo form_open('Exams/addAnswers/' . $que['qid'] . '/' . $exam['idexams']); ?>
				<div class="d-flex flex-row-reverse m-2">
					<h3> Time remaining: <span id="timer"></span> </h3>
					<input type="hidden" name="time" id="time" value="">
				</div>
				Question: <span> <?php echo $que['questions_title'] ?> </span>
				Answers:
				<div class="form-check">
					<?php if ($que['exams_sdata_selected'] == 'A') { ?>
						<input class="form-check-input" type="radio" name="flexRadioDefault" value="A" id="flexRadioDefault1" checked>
					<?php } else { ?>
						<input class="form-check-input" type="radio" name="flexRadioDefault" value="A" id="flexRadioDefault1">
					<?php } ?>
					<label class="form-check-label" for="flexRadioDefault1">
						<?php echo $que['questions_optiona'] ?>
					</label>
				</div>
				<div class="form-check">
					<?php if ($que['exams_sdata_selected'] == 'B') { ?>
						<input class="form-check-input" type="radio" name="flexRadioDefault" value="B" id="flexRadioDefault2" checked>
					<?php } else { ?>
						<input class="form-check-input" type="radio" name="flexRadioDefault" value="B" id="flexRadioDefault2">
					<?php } ?>
					<label class="form-check-label" for="flexRadioDefault2">
						<?php echo $que['questions_optionb'] ?>
					</label>
				</div>
				<div class="form-check">
					<?php if ($que['exams_sdata_selected'] == 'C') { ?>
						<input class="form-check-input" type="radio" name="flexRadioDefault" value="C" id="flexRadioDefault2" checked>
					<?php } else { ?>
						<input class="form-check-input" type="radio" name="flexRadioDefault" value="C" id="flexRadioDefault2">
					<?php } ?>
					<label class="form-check-label" for="flexRadioDefault3">
						<?php echo $que['questions_optionc'] ?>
					</label>
				</div>
				<div class="form-check">
					<?php if ($que['exams_sdata_selected'] == 'D') { ?>
						<input class="form-check-input" type="radio" name="flexRadioDefault" value="D" id="flexRadioDefault2" checked>
					<?php } else { ?>
						<input class="form-check-input" type="radio" name="flexRadioDefault" value="D" id="flexRadioDefault2">
					<?php } ?>
					<label class="form-check-label" for="flexRadioDefault4">
						<?php echo $que['questions_optiond'] ?>
					</label>
				</div>
				<div class="d-flex justify-content-start mt-5">
					<?php if ($que['srno'] != '1') { ?>
						<a href="<?php echo base_url('Exams/previous/' . $que['id'] . '/' . $exam['idexams']) ?>" class="btn btn-info"> Previous </a>
					<?php } else { ?>
						<a href="<?php echo base_url('Exams/previous/' . $que['id'] . '/' . $exam['idexams']) ?>" class="btn btn-info disabled"> Previous </a>
					<?php } ?>

				</div>
				<div class="d-flex justify-content-center" style="margin-top:-38px;">
					<button class="btn btn-success" type="submit"> SAVE </button>
				</div>
				<div class="d-flex justify-content-end" style="margin-top:-38px;">
					<?php if ($que['srno'] == $exam['exams_questions']) { ?>
						<a href="<?php echo base_url('Exams/next/' . $que['id'] . '/' . $exam['idexams']) ?>" class="btn btn-info disabled"> Next </a>
					<?php } else { ?>
						<a href="<?php echo base_url('Exams/next/' . $que['id'] . '/' . $exam['idexams']) ?>" class="btn btn-info"> Next </a>
					<?php } ?>
				</div>
				<!-- <button class="btn btn-primary"  type="submit"> Save </button> -->
				<?php echo form_close(); ?>
			</div>
			<div class="d-flex justify-content-end mt-5">
				<a id="autosubmit" href="<?php echo base_url('Exams/submit/' . $exam['idexams']) ?>" class="btn btn-danger"> Submit Test </a>
			</div>
		</div>
	</div>
</div>
<script>

document.getElementById('timer').innerHTML = '<?php echo ($users['exams_users_time']) ?>'

	startTimer();

	function startTimer() {
		var presentTime = document.getElementById('timer').innerHTML;
		var timeArray = presentTime.split(/[:]+/); n.;ihghnb;nr56f
		var m = timeArray[0];
		var s = checkSecond((timeArray[1] - 1));
		if (s == 59) {
			m = m - 1
		}
		if (m < 0) {
			return
		}
		document.getElementById('timer').innerHTML =
			m + ":" + s;
		document.getElementById("time").value = m + ":" + s;
		if (m == 00 && s == 00) {
			document.getElementById("autosubmit").click();
		}
		setTimeout(startTimer, 1000);
	}

	function checkSecond(sec) {
		if (sec < 10 && sec >= 0) {
			sec = "0" + sec
		}; // add zero in front of numbers < 10
		if (sec < 0) {
			sec = "59"
		};
		return sec;
	}
</script>
