<div class="container py-4">
	<a href="<?php echo base_url('Welcome/index') ?>" style="color:#000;">
		<i class="bi bi-arrow-bar-left"></i>Go Back
	</a>
	<h1 class="h1 text-center" id="pageHeaderTitle" style="color: #000;">Downloads</h1>
</div>
<?php foreach ($downloads as $d) { ?>
	<div class="card bg-dark mt-2 br-5 m-5">
		<h5 class="card-header text-white">Title :&nbsp; <?php echo $d['downloads_title']; ?></h5>
		<div class="card-body">
			<p class="card-text text-white">Description :&nbsp; <?php echo $d['downloads_desc']; ?></p>
			<!-- <a href="<?php echo $d['downloads_links']; ?>" class="btn btn-primary" download><i class="bi bi-cloud-arrow-down-fill"></i> Click here to download</a> -->
		</div>
	</div>
<?php } ?>
