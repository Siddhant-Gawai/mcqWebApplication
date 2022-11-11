<style>
	.b-example-divider {
		height: 3rem;
		background-color: rgba(0, 0, 0, .1);
		border: solid rgba(0, 0, 0, .15);
		border-width: 1px 0;
		box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
	}

	@media (min-width: 992px) {
		.rounded-lg-3 {
			border-radius: .3rem;
		}
	}
</style>

<div class="container col-xxl-8 px-4 py-5">
	<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
		<div class="col-10 col-sm-8 col-lg-6">
			<img src="<?php echo base_url('assets/img/home-hero.png'); ?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
		</div>
		<div class="col-lg-6">
			<h1 class="display-5 fw-bold lh-1 mb-3">Welcome, <br> <?php echo $user['users_name']; ?> </h1>
			<p class="lead"> “It’s strange how dreams get under your skin and give your heart a test for what’s real and what’s imaginary.”</br>
			<p class="text-right">― Jason Mraz</p>
			</p>
			<div class="d-grid gap-2 d-md-flex justify-content-md-start">
				<a href="<?php echo base_url('LoggedDashboard/exams'); ?>" type="button" class="btn btn-primary btn-lg px-4 me-md-2">See All Exams</a>
				<a href="<?php echo base_url('LoggedDashboard/syllabus'); ?>" type="button" class="btn btn-outline-secondary btn-lg px-4">Syllabus</a>
			</div>
		</div>
	</div>
</div>

<main>
	<div class="container px-4 py-5" id="icon-grid">
		<h2 class="pb-2 border-bottom">Features Of QUIZ ⌛</h2>

		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
			<div class="col d-flex align-items-start">
				<svg class="bi text-muted flex-shrink-0 me-3" xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
					<path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
					<path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
				</svg>
				<div>
					<h4 class="fw-bold mb-0">Updated regularly</h4>
					<p>All the data on this site is updated regulary and all the links are tested regulary.</p>
				</div>
			</div>
			<div class="col d-flex align-items-start">
				<svg xmlns="http://www.w3.org/2000/svg" class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em" fill="currentColor" class="bi bi-bullseye" viewBox="0 0 16 16">
					<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
					<path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10zm0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" />
					<path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" />
					<path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
				</svg>

				<div>
					<h4 class="fw-bold mb-0">Instant Scores</h4>
					<p>Our quiz tool automatically provides scores and tracks participation in real time.</p>
				</div>
			</div>
			<div class="col d-flex align-items-start">
				<svg xmlns="http://www.w3.org/2000/svg" class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
					<path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z" />
					<path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z" />
				</svg>
				<div>
					<h4 class="fw-bold mb-0">No Time Wasted</h4>
					<p>All the data here is hosted on blazing fast servers and can be accessed at fastly from anywhere.</p>
				</div>
			</div>
			<div class="col d-flex align-items-start">
				<svg xmlns="http://www.w3.org/2000/svg" class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em" fill="currentColor" class="bi bi-credit-card-2-back" viewBox="0 0 16 16">
					<path d="M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1z" />
					<path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm13 2v5H1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm-1 9H2a1 1 0 0 1-1-1v-1h14v1a1 1 0 0 1-1 1z" />
				</svg>
				<div>
					<h4 class="fw-bold mb-0">Free of Cost</h4>
					<p>All the data on this site is available for free of cost and can be used for any purposes.</p>
				</div>
			</div>
			<div class="col d-flex align-items-start">
				<svg xmlns="http://www.w3.org/2000/svg" class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
					<path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z" />
					<path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
				</svg>
				<div>
					<h4 class="fw-bold mb-0">Resources</h4>
					<p>All the resources are checked and then uploaded by verifying them manually by the admins.</p>
				</div>
			</div>
			<div class="col d-flex align-items-start">
				<svg xmlns="http://www.w3.org/2000/svg" class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em" fill="currentColor" class="bi bi-bar-chart-line" viewBox="0 0 16 16">
					<path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z" />
				</svg>
				<div>
					<h4 class="fw-bold mb-0">Quizzes</h4>
					<p>You can access all the quizzes any time and can attempt anytime from anywhere.</p>
				</div>
			</div>
			<div class="col d-flex align-items-start">
				<svg xmlns="http://www.w3.org/2000/svg" class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
					<path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z" />
					<path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z" />
				</svg>
				<div>
					<h4 class="fw-bold mb-0">Current Affairs</h4>
					<p>Current affairs content are updated every day and you can access them anytime.</p>
				</div>
			</div>
			<div class="col d-flex align-items-start">
				<svg xmlns="http://www.w3.org/2000/svg" class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em" fill="currentColor" class="bi bi-arrow-return-right" viewBox="0 0 16 16">
					<path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z" />
				</svg>
				<div>
					<h4 class="fw-bold mb-0">Upcoming Exams</h4>
					<p>Upcoming exams data are also updated regularly and all the links will be available at one place.</p>
				</div>
			</div>
		</div>
	</div>
</main>
