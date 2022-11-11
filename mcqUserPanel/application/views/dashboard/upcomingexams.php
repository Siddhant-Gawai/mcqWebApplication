<style>
	.bd-placeholder-img {
		font-size: 1.125rem;
		text-anchor: middle;
		-webkit-user-select: none;
		-moz-user-select: none;
		user-select: none;
	}

	@media (min-width: 768px) {
		.bd-placeholder-img-lg {
			font-size: 3.5rem;
		}
	}
</style>

<main>
	<div class="container py-4">
		<header class="pb-3 mb-4 border-bottom">
			<a href="<?php echo base_url('LoggedDashboard/index') ?>" style="color:#000;">
				<i class="bi bi-arrow-bar-left"></i>Go Back
			</a>
			<h1 class="h1 text-center" id="pageHeaderTitle" style="color: #000;">Upcoming Exams</h1>
		</header>
		<div class="row">
		<?php foreach($ue as $c){ ?>
			<div class="col-md-6 mt-2">
				<div class="h-100 p-2 rounded-3 border">
					<h2 class="text-primary"><?php echo $c['upcomingexams_title']; ?></h2>
					<h5 class="text-danger">Last Date to apply: <?php echo $c['upcomingexams_end']; ?></h5>
					<p><?php echo $c['upcomingexams_desc']; ?></p>
					<a href="<?php echo $c['upcomingexams_link']; ?>" class="btn btn-success" type="button" target="blank"> Apply Soon</a>
				</div>
			</div>
		<?php } ?>
		</div>
	</div>
</main>
