<section class="">
	<div class="container py-4">
		<a href="<?php echo base_url('Welcome/index') ?>" style="color:#000;">
			<i class="bi bi-arrow-bar-left"></i>Go Back
		</a>
		<h1 class="h1 text-center" id="pageHeaderTitle" style="color: #000;">Notices</h1>
		<?php foreach ($notices as $n) { ?>
			<article class="postcard dark blue">
				<!-- <a class="postcard__img_link" href="#">
				<img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
			</a> -->
				<div class="postcard__text">
					<h1 class="postcard__title blue"><a href="#"> <?php echo $n['notices_title']; ?> </a></h1>
					<div class="postcard__subtitle small">
						<time datetime="2020-05-25 12:00:00">
							<i class="fas fa-calendar-alt mr-2"></i><?php echo $n['notices_created']; ?>
						</time>
					</div>
					<div class="postcard__bar"></div>
					<div class="postcard__preview-txt"><?php echo $n['notices_desc']; ?></div>
					<ul class="postcard__tagbox">
						<li class="tag__item"><i class="fas fa-tag mr-2"></i>New</li>
						<li class="tag__item"><i class="fas fa-clock mr-2"></i>Important</li>
						<li class="tag__item play blue">
							<a href="#"><i class="fas fa-play mr-2"></i>Stay Connected</a>
						</li>
					</ul>
				</div>
			</article>
		<?php } ?>
	</div>
</section>
