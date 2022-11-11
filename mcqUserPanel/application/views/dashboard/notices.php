<section class="">
	<div class="container py-4">
		<a href="<?php echo base_url('LoggedDashboard/index') ?>" style="color:#000;">
			<i class="bi bi-arrow-bar-left"></i>Go Back
		</a>
		<h1 class="h1 text-center" id="pageHeaderTitle" style="color: #000;">Notices</h1>
		<?php foreach ($notice as $n) { ?>
			<article class="card bg-light my-4 p-4">
				<div class="postcard__text">
					<h1 class="postcard__title blue"> <?php echo $n['notices_title']; ?></h1>
					<div class="postcard__subtitle small">
						<time datetime="2020-05-25 12:00:00">
							<i class="fas fa-calendar-alt mr-2"></i><?php echo $n['notices_created']; ?>
						</time>
					</div>
					<div class="postcard__preview-txt"><?php echo $n['notices_desc']; ?></div>
				</div>
			</article>
		<?php } ?>
	</div>
</section>
