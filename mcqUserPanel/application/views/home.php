<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Study Karo ⌛</title>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
</head>

<body>

	<!-- Header Start -->
	<div class="container">
		<header class="blog-header py-3">
			<div class="row flex-nowrap justify-content-between align-items-center">
				<div class="col-4 d-flex justify-content-start align-items-center">
					<a class="blog-header-logo link-dark" href="<?php echo base_url('Welcome/index') ?>">
						<h3> <i class="bi bi-house-door-fill"></i> </h3>
					</a>
				</div>
				<div class="col-4 text-center">
					<a class="blog-header-logo text-dark" style="text-decoration: none;" href="#">
					Study Karo ⌛
					</a>
				</div>
				<div class="col-4 d-flex justify-content-end align-items-center">
					<a class="btn btn-sm btn-outline-secondary" href="<?php echo base_url('Welcome/goToLogin'); ?>">Sign In</a>
				</div>
			</div>
		</header>
		<div class="nav-scroller py-1 mb-2">
			<nav class="nav d-flex justify-content-between">
				<a class="p-2 link-secondary" href="<?php echo base_url('Dashboard/notices'); ?>" style="text-decoration: none; font-weight:600;"><span class="p-2 text-dark">Notices</span></a>
				<a class="p-2 link-secondary" href="<?php echo base_url('Dashboard/downloads'); ?>" style="text-decoration: none; font-weight:600;"><span class="p-2 text-dark">Download Material</span></a>
				<a class="p-2 link-secondary" href="<?php echo base_url('Dashboard/news'); ?>" style="text-decoration: none; font-weight:600;"><span class="p-2 text-dark">Latest News</span></a>
				<a class="p-2 link-secondary" href="<?php echo base_url('Dashboard/upcoming'); ?>" style="text-decoration: none; font-weight:600;"><span class="p-2 text-dark">Upcoming Exams</span></a>
			</nav>
		</div>
	</div>
	<!-- Header End -->
	<main class="container p-0">
		<marquee class="text-danger bg-light" behavior="" direction="">
			<h4><i class="bi bi-star-fill"></i> <?php echo $martext['marquee_text']; ?> </h4>
		</marquee>
	</main>
	<!-- Full Width Feature Start -->
	<main class="container">
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
		<div class="mb-4 text-white rounded" style="background-image: url('<?php echo base_url('assets/img/bg-books.jpg'); ?>');">
			<div class="p-4 p-md-5 " style="background: rgba(0, 0, 0, 0.5);">
				<div class="col-md-8 px-0">
					<h1 class="display-4 fst-italic">Prepare for Competitive exams Popular goals
					</h1>
					<p class="lead my-3">* UPSC CSE - GS
						* IIT JEE * NEET UG * Bank Exams * GATE & ESE * UPSC CSE - Optional</p>
					<p class="lead mb-0"><a href="#" style="text-decoration: none;" class="text-white fw-bold">Download lessons and learn anytime, anywhere with this site.</a></p>
				</div>
			</div>
		</div>

	</main>
	<!-- Full Width Feature End -->

	<!-- Quote Start -->
	<div class="px-4 py-5 my-5 text-center">
		<h1 class="display-5 fw-bold">Better Learning. Better Results. <br>
			One platform for all your learning needs</h1>
		<div class="col-lg-6 mx-auto">
			<div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
				<a href="<?php echo base_url('Welcome/goToSignUp'); ?>" type="button" class="btn btn-primary btn-lg px-4 gap-3">Sign Up</a>
				<a href="<?php echo base_url('Welcome/goToLogin'); ?>" type="button" class="btn btn-outline-secondary btn-lg px-4">Sign In</a>
			</div>
		</div>
	</div>
	<!-- Quote End -->

	<!-- Features start -->
	<div class="container px-4 py-5" id="custom-cards">
		<h2 class="pb-2 border-bottom">Features</h2>
		<!-- first start -->
		<div class="modal fade" id="first" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Daily Live Quizzes</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<h4>Quizzes raise confidence</h4>
						<p>Well targeted, tailor-made quizzes can boost self esteem and confidence. When pupils can challenge themselves but are able to succeed, their confidence can grow.

							An individual quiz takes off the pressure that a ‘test’ can bring and enables children to make mistakes privately. Even if used in teams or pairs, the nature of a funquiz can also help those children less confident to make mistakes, especially if the quiz allows them to try again.</p>
						<br>
						<h4>Quizzes can support individualised learning</h4>
						<p>Quizzes are easy to differentiate, whilst enabling all children to participate in the same task.

							For example, you can apply the same design to the a quiz and learning materials, but with different questions. This is a subtle form of differentiation.

							It can also help you provide just the right level of challenge and pinpoint how to support each pupil to reach their full potential.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- first end  -->
		<!-- second start -->
		<div class="modal fade" id="second" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Practice and revise</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<ul>
							<li>
								Revision helps recall the details of the topic you have studied.
							</li>
							<li>
								Revising the topics helps students gain more confidence to attempt any related question in the exam.
							</li>
							<li>
								Timely revision helps reduce the anxiety and stress levels a student is likely to have during the exams.
							</li>
							<li>
								Revision makes students well-prepared for the examinations. It complements their efforts of studying.
							</li>
							<li>
								Revision helps students gauge their strengths and knowledge in a particular subject.
							</li>
						</ul>
						</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- second end  -->
		<!-- third start -->
		<div class="modal fade" id="third" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Learn Anytime Anywhere</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<h4>1. Flexibility</h4>
						<p>
							Many people turn to online learning for its flexibility. Learning virtually from anywhere allows you or your team to pursue coursework without having to commute to a physical campus. While some online courses require learners to attend live lectures, you can otherwise factor your coursework into your already busy schedule and move at your own pace.
						</p>
						<br>
						<h4>2. Ability to Advance a Career</h4>
						<p>
							In the Emeritus survey, career advancement was respondents’ main motivation for furthering their education. This is also very much the case in online education broadly speaking. Career advancement may include upskilling or reskilling, earning a promotion or salary increase, or switching career fields. Since online learning is a flexible option, this format appeals to working professionals.
						</p>
						<h4> 3. Wider Range of Courses and Programs</h4>
						<p>
							One of the great advantages of online learning is that professionals can learn from schools around the world and find the program that best meets their needs without uprooting their lives. In contrast, those studying on campus are limited to local options or must move to another city for a full-time program. Many renowned, well-established universities now offer online courses.
						</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- third end  -->
		<div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
			<div class="col">
				<div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('<?php echo base_url('assets/img/hostory.jpg'); ?>');">
					<div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
						<h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Daily Live Quizes</h2>
						<ul class="d-flex list-unstyled mt-auto">
							<li class="me-auto">
								<img src="<?php echo base_url('assets/img/live.png'); ?>" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
							</li>
							<li class="d-flex align-items-center">
								<svg class="bi me-2" width="1em" height="1em">
									<use xlink:href="#calendar3" />
								</svg>
								<small>
									<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#first">
										View More
									</button>
								</small>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('<?php echo base_url('assets/img/science.jpg'); ?>');">
					<div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
						<h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Practice and Revise</h2>
						<ul class="d-flex list-unstyled mt-auto">
							<li class="me-auto">
								<img src="<?php echo base_url('assets/img/practice.png'); ?>" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
							</li>

							<li class="d-flex align-items-center">
								<svg class="bi me-2" width="1em" height="1em">
									<use xlink:href="#calendar3" />
								</svg>
								<small><button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#second">
										View More
									</button></small>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('<?php echo base_url('assets/img/law.jpg'); ?>');">
					<div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
						<h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Learn Anytime Anywhere</h2>
						<ul class="d-flex list-unstyled mt-auto">
							<li class="me-auto">
								<img src="<?php echo base_url('assets/img/navigation.png'); ?>" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
							</li>

							<li class="d-flex align-items-center">
								<svg class="bi me-2" width="1em" height="1em">
									<use xlink:href="#calendar3" />
								</svg>
								<small><button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#third">
										View More
									</button></small>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Features End -->

	<!-- Footer Start -->
	<div class="container">
		<footer class="py-5">
			<div class="row">
				<div class="col-2">
					<h5>Section</h5>
					<ul class="nav flex-column">
						<li class="nav-item mb-2"><a href="<?php echo base_url('Welcome/index') ?>" class="nav-link p-0 text-muted">Home</a></li>
						<li class="nav-item mb-2"><a href="#custom-cards" class="nav-link p-0 text-muted">Features</a></li>
						<li class="nav-item mb-2"><a href="<?php echo base_url('Welcome/index') ?>" class="nav-link p-0 text-muted">About</a></li>
					</ul>
				</div>

				<div class="col-8 offset-1">
					<!-- subscribe -->
					<?php echo form_open('Welcome/subscribe/'); ?>
					<h5>Subscribe to our newsletter</h5>
					<p>Monthly digest of whats new and exciting from us.</p>
					<div class="d-flex w-100 gap-2">
						<label for="newsletter1" class="visually-hidden">Email address</label>
						<input id="newsletter1" type="text" name="email" class="form-control" placeholder="Email address">
						<button class="btn btn-primary" type="submit">Subscribe</button>
					</div>
					<?php echo form_close(); ?>
				</div>
			</div>

			<div class="d-flex justify-content-between py-4 my-4 border-top">
				<p>&copy; 2021 Quiz, Inc. All rights reserved.</p>
				<ul class="list-unstyled d-flex">
					<li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
								<use xlink:href="#twitter" />
							</svg></a></li>
					<li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
								<use xlink:href="#instagram" />
							</svg></a></li>
					<li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
								<use xlink:href="#facebook" />
							</svg></a></li>
				</ul>
			</div>
		</footer>
	</div>
	<!-- Footer End -->
	<!-- Bootstrap Scipts -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>
