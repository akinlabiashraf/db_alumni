<!doctype html>
<html lang="en">

<?php
session_start();

include "layout/header.php";

?>

<body class="green-theme">

	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->
	<div id="preloader">
		<div class="preloader"><span></span><span></span></div>
	</div>

	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper">

		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->
		<!-- Start Navigation -->
		<?php include "layout/nav.php" ?>
		<!-- End Navigation -->
		<div class="clearfix"></div>
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->

		<!-- ============================ Page Title Start================================== -->
		<section class="bg-cover primary-bg-dark" style="background:url(assets/img/bg2.png)no-repeat;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">

						<h2 class="ipt-title text-light">Create An Account</h2>
						<span class="text-light opacity-75">Create an account or signin</span>

					</div>
				</div>
			</div>
		</section>
		<!-- ============================ Page Title End ================================== -->

		<!-- ============================ Login Form Start ================================== -->
		<section class="gray-simple">
			<div class="container">
				<!-- row Start -->
				<div class="row justify-content-center">

					<!-- Single blog Grid -->
					<div class="col-xl-6 col-lg-8 col-md-12">
						<div class="vesh-detail-bloc">
							<div class="vesh-detail-bloc-body pt-3">
								<ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
									<li class="nav-item">
										<button class="nav-link active" id="signin-tab" data-bs-toggle="pill" data-bs-target="#signin" type="button" role="tab" aria-controls="signin" aria-selected="true">Login Account</button>
									</li>
									<li class="nav-item">
										<button class="nav-link" id="register-tab" data-bs-toggle="pill" data-bs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="false" tabindex="-1">Create Account</button>
									</li>
								</ul>
								<div class="tab-content" id="pills-tabContent">
									<div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab" tabindex="0">
										<div class="row gx-3 gy-4">
											<div class="modal-login-form">
												<?php if (isset($_SESSION['status'])) : ?>
													<?php if ($_SESSION['status_type'] === 'success') : ?>
														<div class="alert alert-success">
															<?php echo $_SESSION['status']; ?>
														</div>
													<?php elseif ($_SESSION['status_type'] === 'error') : ?>
														<div class="alert alert-danger">
															<?php echo $_SESSION['status']; ?>
														</div>
													<?php endif; ?>
													<?php unset($_SESSION['status']); ?>
													<?php unset($_SESSION['status_type']); ?>
												<?php endif; ?>
												<form method="POST" action="./controller/signin.php" enctype="multipart/form-data">

													<div class="form-floating mb-4">
														<input type="text" class="form-control" name="matric" placeholder="name@example.com">
														<label>Matric Number</label>
													</div>

													<div class="form-floating mb-4">
														<input type="password" class="form-control" name="password" placeholder="Password">
														<label>Password</label>
													</div>

													<div class="form-group">
														<button type="submit" name="login" class="btn btn-primary full-width font--bold btn-lg">Log In</button>
													</div>

												</form>
											</div>

										</div>
									</div>

									<div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab" tabindex="0">
										<div class="row gx-3 gy-4">
											<div class="modal-login-form">
												<form method="POST" action="controller/signup.php" enctype="multipart/form-data">

													<?php if (isset($_SESSION['status'])) : ?>
														<?php if ($_SESSION['status_type'] === 'success') : ?>
															<div class="alert alert-success">
																<?php echo $_SESSION['status']; ?>
															</div>
														<?php elseif ($_SESSION['status_type'] === 'error') : ?>
															<div class="alert alert-danger">
																<?php echo $_SESSION['status']; ?>
															</div>
														<?php endif; ?>
														<?php unset($_SESSION['status']); ?>
														<?php unset($_SESSION['status_type']); ?>
													<?php endif; ?>

													<div class="form-floating mb-4">
														<input type="text" class="form-control" name="name" required placeholder="Your Full Name">
														<label>Full Name</label>
													</div>
													<div class="form-floating mb-4">
														<input type="email" class="form-control" name="email" required placeholder="name@example.com">
														<label>Email</label>
													</div>
													<div class="form-floating mb-4">
														<input type="text" class="form-control" name="matric" required placeholder="Matric Number">
														<label>Matric Number</label>
													</div>
													<div class="form-floating mb-4">
														<input type="password" class="form-control" name="password" required placeholder="*************">
														<label>Password</label>
													</div>
													<div class="form-floating mb-4">
														<input type="text" class="form-control" name="phone" required placeholder="+234 *** *** ****">
														<label>Phone</label>
													</div>
													<div class="form-floating mb-4">
														<input type="text" class="form-control" name="place_of_work" required placeholder="Password">
														<label>Place Of Work</label>
													</div>
													<div class="form-floating mb-4">
														<input type="text" class="form-control" name="dept" required placeholder="Computer Sciencee">
														<label>Department</label>
													</div>
													<div class="form-floating mb-4">
														<select name="college">
															<option  value=""></option>
															<option value="CONAS">CONAS</option>
															<option value="COMAS">COMAS</option>
															<option value="COHAS">COHAS</option>
														</select>
														<label>Graduation Year</label>
													</div>
													<div class="form-floating mb-4">
														<input type="File" class="form-control" name="profile_pictures" required placeholder="Profile Picture" accept="image/*">
														<label>Profile Picture</label>
													</div>
													<div class="form-floating mb-4">
														<select name="year_of_graduation">
															<option name="year" value=""></option>
															<option value="2023/2024">2023/2024</option>
															<option value="2022/2023">2022/2023</option>
															<option value="2021/2022">2021/2022</option>
															<option value="2020/2021">2020/2021</option>
														</select>
														<label>Graduation Year</label>
													</div>
													<div class="form-floating mb-4">
														<label>Employment Status</label>
														<select name="job_status">
															<option name="" value="">----</option>
															<option value="Civil Servant">Civil Servant</option>
															<option value="Self Employed">Self Employed</option>
															<option value="Unemployed">Unemployed</option>
														</select>
														<label>Employment Status</label>
													</div>
													<div class="form-floating mb-4">
														<label>Gender</label>
														<select name="gender">
															<option name="" value="">----</option>
															<option value="Male">Male</option>
															<option value="Female">Female</option>
														</select>
														<label>Employment Status</label>
													</div>
													<div class="form-floating mb-4">
														<textarea class="form-control" name="bio" id="" cols="30" rows="10"></textarea>
														<label>Biography</label>
													</div>

													<div class="form-group">
														<button type="submit" name="submit" class="btn btn-primary full-width font--bold btn-lg">Create An Account</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
		</section>
		<!-- ============================ Login Form End ================================== -->



		<!-- ============================ Footer Start ================================== -->
		<?php include "layout/footer.php" ?>
		<!-- ============================ Footer End ================================== -->






		<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


	</div>
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->

	<!-- Color Switcher -->


	<!-- ============================================================== -->
	<!-- All Jquery -->
	<!-- ============================================================== -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/rangeslider.js"></script>
	<script src="assets/js/jquery.nice-select.min.js"></script>
	<script src="assets/js/slick.js"></script>
	<script src="assets/js/counterup.min.js"></script>


	<script src="assets/js/custom.js"></script>
	<script src="assets/js/cl-switch.js"></script>
	<!-- ============================================================== -->
	<!-- This page plugins -->
	<!-- ============================================================== -->

</body>

<!-- Mirrored from shreethemes.net/jobstock-landing-2.2/jobstock/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Apr 2024 12:04:59 GMT -->

</html>