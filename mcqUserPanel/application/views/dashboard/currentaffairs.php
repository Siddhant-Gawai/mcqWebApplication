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
			<h1 class="h1 text-center" id="pageHeaderTitle" style="color: #000;">Current Affairs</h1>
		</header>
		<div class="row">
			<?php foreach ($ca as $c) { ?>
				<div class="col-md-4 mt-2">
					<div class="h-100 p-2 rounded-3 border">
						<h2 class="text-primary"><?php echo $c['currentaffairs_title']; ?></h2>
						<p><?php echo $c['currentaffairs_desc']; ?></p>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</main>
