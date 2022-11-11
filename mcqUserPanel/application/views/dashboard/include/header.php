<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Study Karo ⌛</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
	<div class="container">
		<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
			<a href="<?php echo base_url('LoggedDashboard/index'); ?>" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
				<span class="fs-4">Study Karo ⌛</span>
			</a>

			<ul class="nav nav-pills">
				<li class="nav-item"><a href="<?php echo base_url('LoggedDashboard/notice'); ?>" class="nav-link">Notices</a></li>
				<li class="nav-item"><a href="<?php echo base_url('LoggedDashboard/downloads'); ?>" class="nav-link">Download Material</a></li>
				<li class="nav-item"><a href="<?php echo base_url('LoggedDashboard/currentaffairs'); ?>" class="nav-link">Current Affairs</a></li>
				<li class="nav-item"><a href="<?php echo base_url('LoggedDashboard/upcomingexams'); ?>" class="nav-link">Upcoming Exams</a></li>
				<li class="nav-item"><a href="<?php echo base_url('LoggedDashboard/profile'); ?>" class="nav-link">Profile</a></li>
				<li class="nav-item"><a href="<?php echo base_url('Auth/logout'); ?>" class="nav-link active bg-danger"><i class="bi bi-shield-lock"></i> &nbsp;Sign Out</a></li>
			</ul>
		</header>
	</div>
	<!-- <div class="b-example-divider"></div> -->
