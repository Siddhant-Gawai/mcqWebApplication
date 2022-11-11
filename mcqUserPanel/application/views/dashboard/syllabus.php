<main>
	<div class="container py-4">
	<header class="pb-3 mb-4 border-bottom">
			<a href="<?php echo base_url('LoggedDashboard/index') ?>" style="color:#000;">
				<i class="bi bi-arrow-bar-left"></i>Go Back
			</a>
			<h1 class="h1 text-center" id="pageHeaderTitle" style="color: #000;">Syllabus Data</h1>
		</header>
		<div class="accordion" id="accordionExample">
			<?php $i = 1;
			foreach ($syllabus as $e) { ?>
				<div class="accordion-item mt-2">
					<h2 class="accordion-header" id="<?php echo 'heading' . $i; ?>">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo 'collapse' . $i; ?>" aria-expanded="true" aria-controls="<?php echo  'collapse' . $i; ?>">
						Exam: <?php echo $e['exams_name']; ?> </br>
						<?php echo $e['syllabus_title']; ?>
						</button>
					</h2>
					<div id="<?php echo 'collapse' . $i; ?>" class="accordion-collapse collapse show" aria-labelledby="<?php echo  'heading' . $i; ?>" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<strong><?php echo $e['syllabus_desc']; ?>
							</strong>
						</div>
					</div>
				</div>
		</div>
	<?php $i++;
			} ?>

	</div>
</main>
