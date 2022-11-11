<style>
	body {
		height: 100%;
	}

	body {
		display: flex;
		align-items: center;
		padding-top: 150px;
		padding-bottom: 40px;
		background-color: #f5f5f5;
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
	}

	.form-signin {
		color: #000;
		border-radius: 12px;
		background-color: #003249;
		width: 100%;
		max-width: 400px;
		padding: 15px;
		margin: auto;
	}

	.form-signin .checkbox {
		font-weight: 400;
	}

	.form-signin .form-floating:focus-within {
		z-index: 2;
	}

	.form-signin input[type="email"] {
		margin-bottom: -1px;
		/* border-bottom-right-radius: 0; */
		/* border-bottom-left-radius: 0; */
	}

	.form-signin input[type="password"] {
		margin-bottom: 10px;
		/* border-top-left-radius: 0; */
		/* border-top-right-radius: 0; */
	}

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

<body style="background-image: url('<?php echo base_url('assets/img/welcome-2.png'); ?>');">
	<main class="form-signin">
		<form action="<?php echo base_url('Auth/login') ?>" method="POST">
			<a href="<?php echo base_url('Welcome/index') ?>" style="text-decoration: none;">
				<h1 class="font-weight-bold text-center text-white"> Study Karo ⌛ </h1>
			</a>
			<h1 class="h3 mb-3 mt-5 text-white fw-normal">Please Sign In</h1>
			<div class="d-flex">
				<div class="w-100">
					<?php if (!empty($errors)) {
						echo $errors;
					} ?>
				</div>
			</div>
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
			
			<div class="form-floating">
				<input type="email" class="form-control mt-2" id="floatingInput" placeholder="name@example.com" name="email">
				<label for="floatingInput">Email address</label>
				<span style="color:red"><?php echo form_error('email'); ?></span>
			</div>
			<div class="form-floating">
				<input type="password" class="form-control mt-2" id="floatingPassword" placeholder="Password" name="password">
				<label for="floatingPassword">Password</label>
				<span style="color:red"><?php echo form_error('password'); ?></span>
			</div>

			<button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
		</form>
			<a class="text-white mt-5" href="<?php echo base_url('Welcome/goToSignUp'); ?>"> Not a User? Sign Up <i class="bi bi-box-arrow-in-right"></i></a>
			<a class="text-white mt-5 btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Resend verification link? <i class="bi bi-box-arrow-in-right"></i></a>
			<p class="mt-5 mb-3 text-muted">&copy; 2022–2023</p>
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					<form action="<?php echo base_url('Auth/resendVerificationLink') ?>" method="POST">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
								<div class="form-floating">
									<input type="email" class="form-control mt-2" id="floatingInput" placeholder="name@example.com" name="email">
									<label for="floatingInput">Email address</label>
									<span style="color:red"><?php echo form_error('email'); ?></span>
								</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Save changes</button>
						</div>
						</form>

					</div>
				</div>
			</div>
			<!-- Modal End -->
	</main>
</body>
