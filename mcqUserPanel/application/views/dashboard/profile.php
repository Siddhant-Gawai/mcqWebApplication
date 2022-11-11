<head>
	<style>
		.field {
			margin-top: 4px;
			font-weight: 500;
			padding: 4px;
			color: #000;
		}
	</style>
</head>
<main>
	<div class="container py-4">
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
		<header class="pb-3 mb-4 border-bottom">
			<a href="<?php echo base_url('LoggedDashboard/index') ?>" style="color:#000;">
				<i class="bi bi-arrow-bar-left"></i>Go Back
			</a>
			<h1 class="h1 text-center" id="pageHeaderTitle" style="color: #000;"> <?php echo $user['users_name']; ?>' Profile </h1>
		</header>

		<section style="background-image: url(<?php echo base_url('assets/img/profile-section-bg.jpg') ?>); background-position: center; background-repeat: no-repeat; background-size: cover;" class="border b-3 p-4 border-primary text-center">
			<h3> User Profile Details </h3>
		</section>

		<section class="mt-5">
			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
				<li class="nav-item" role="presentation">
					<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Details</a>
				</li>
				<li class="nav-item" role="presentation">
					<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Change Password</a>
				</li>
				<li class="nav-item" role="presentation">
					<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Exams History</a>
				</li>
			</ul>
			<div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
					<div id="details">
						<div class="field">
							Name : <?php echo $user['users_name']; ?>
						</div>
						<div class="field">
							Email : <?php echo $user['users_email']; ?>
						</div>
						<div class="field">
							Number : <?php echo $user['users_number']; ?>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
					<?php echo form_open('LoggedDashboard/updatePass'); ?>
					<div class="row">
						<div class="col-md-12">
							<label for="class_Name" class="control-label">Old Password</label>
							<div class="input-group" style="margin:10px;">
								<input type="password" placeholder="Enter Old Password" name="oldpass" value="" class="form-control" />
							</div>
							<span style="color:red"><?php echo form_error('oldpass'); ?></span>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<label for="class_Name" class="control-label">New Password</label>
							<div class="input-group" style="margin:10px;">
								<input type="password" placeholder="Enter New Password" name="newpass" value="" class="form-control" />
							</div>
							<span style="color:red"><?php echo form_error('newpass'); ?></span>
						</div>
					</div>
					<div class="col-md-8 box-footer">
						<button type="submit" class="btn btn-danger">
							Update Password
						</button>
					</div>
					<?php echo form_close(); ?>

				</div>
				<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
					<div class="row">
						<?php foreach ($exams as $e) { ?>
							<div class="col-md-4 mt-2">
								<div class="card border-2 border-primary p-3">
									<h4>Exam Name : <?php echo $e['exams_name'] ?> </h4>
									<h5>Total Questions :<?php echo $e['exams_questions'] ?> </h5>
									<h5 class="text-primary"> No. Of Questions Solved: <?php echo $e['solved'] ?>  </h5>
									<h5 class="text-success"> Correct Answers: <?php echo $e['marks'] ?>  </h5>
								</div>
							</div>
						<?php } ?>

					</div>

				</div>

		</section>
	</div>
</main>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
