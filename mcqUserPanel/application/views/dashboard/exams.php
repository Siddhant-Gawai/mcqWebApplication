<main>
	<div class="container py-4">
		<header class="pb-3 mb-4 border-bottom">
			<a href="<?php echo base_url('LoggedDashboard/index') ?>" style="color:#000;">
				<i class="bi bi-arrow-bar-left"></i>Go Back
			</a>
			<h1 class="h1 text-center" id="pageHeaderTitle" style="color: #000;">Exams List</h1>
		</header>
		<div class="accordion" id="accordionExample">
			<?php $i = 1;
			foreach ($exams as $e) { ?>
				<div class="card mt-3 border border-dark">
					<div class="card-header" style="background-color: #007EA7">
						<h3 style="color:#fff;"> <?php echo $e['exams_name']; ?> </h3>
					</div>
					<div class="card-body">
						<!-- <h5 class="card-title">...</h5> -->
						<p class="card-text"><?php echo $e['exams_desc']; ?></p>
						<a href="<?php echo base_url('Exams/preview/' . $e['idexams']) ?>" class="btn btn-info">Start Exam</a>
					</div>
				</div>

				<!-- <div class="accordion-item mt-2">
					<h2 class="accordion-header" id="<?php echo 'heading' . $i; ?>">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo 'collapse' . $i; ?>" aria-expanded="true" aria-controls="<?php echo  'collapse' . $i; ?>">
							<?php echo $e['exams_name']; ?>
						</button>
						<div class="d-flex flex-row-reverse">
							<a href="<?php echo base_url('Exams/preview/' . $e['idexams']) ?>" class="btn btn-primary m-2"> Start Exam </a>
						</div>
					</h2>
					<div id="<?php echo 'collapse' . $i; ?>" class="accordion-collapse collapse show" aria-labelledby="<?php echo  'heading' . $i; ?>" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<strong><?php echo $e['exams_desc']; ?>
							</strong>
						</div>
					</div>
				</div>
		</div> -->
			<?php $i++;
			} ?>

		</div>
</main>
