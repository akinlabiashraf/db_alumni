<!doctype html>
<html lang="en">

<?php
session_start();

if (!$_SESSION['email']) {

	header('location:index.php');
	
}

include "./layout/header.php";

include "controller/database_con.php";

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
		<div class="header header-light head-fixed">
			<div class="container">
				<nav id="navigation" class="navigation navigation-landscape">
					<div class="nav-header">
						<a class="nav-brand" href="#">
							<img src="assets/img/logo.png" class="logo" alt="">
						</a>
						<div class="nav-toggle"></div>

					</div>
					<div class="nav-menus-wrapper">
						<ul class="nav-menu">



						</ul>

						<ul class="nav-menu nav-menu-social align-to-right dhsbrd">

							<li>
								<?php
								require 'controller/database_con.php';
								$get_data = "SELECT  `email`, `full_name`, `phone`, `place_of_work`, `profile_picture`, `graduation_year`, `password`, `bio`, dept, job_status FROM `users` ORDER BY id LIMIT 6";
								$quary = mysqli_query($db_connect, $get_data);
								$row = mysqli_fetch_array($quary);
								?>
								<div class="btn-group account-drop">
									<button type="button" class="btn btn-order-by-filt" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<img src="<?php echo $row['profile_picture'] ?>" class="img-fluid circle" alt="">
									</button>
									<div class="dropdown-menu pull-right animated flipInX">
										<div class="drp_menu_headr bg-primary">
											<h4>Hi, <?php echo $row['full_name'] ?></h4>
											<div class="drp_menu_headr-right"><button type="button" class="btn btn-whites"<?php session_destroy(); ?>>Logout</button></div>
										</div>
										<ul>

										</ul>
									</div>
								</div>
							</li>
							<li class="list-buttons ms-2">
								<a href="#"><?php echo $row['email'] ?></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
		<!-- End Navigation -->
		<div class="clearfix"></div>
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->

		<!-- ======================= dashboard Detail ======================== -->
		<div class="dashboard-wrap bg-light">
			<a class="mobNavigation" data-bs-toggle="collapse" href="#MobNav" role="button" aria-expanded="false" aria-controls="MobNav">
				<i class="fas fa-bars mr-2"></i>Dashboard Navigation
			</a>
			<div class="collapse" id="MobNav">
				<div class="dashboard-nav">
					<div class="dash-user-blocks pt-5">
						<div class="jbs-grid-usrs-thumb">
							<div class="jbs-grid-yuo">
								<a href="candidate-detail.html">
									<figure><img src="<?php echo $row['profile_picture'] ?>" class="img-fluid circle" alt=""></figure>
								</a>
							</div>
						</div>
						<div class="jbs-grid-usrs-caption mb-3">
							<div class="jbs-kioyer">
								<span class="label text-light theme-bg">05 Openings</span>
							</div>
							<div class="jbs-tiosk">
								<h4 class="jbs-tiosk-title"><a href="candidate-detail.html"><?php echo $row['full_name'] ?></a></h4>
								<div class="jbs-tiosk-subtitle"><span><i class="fa-solid fa-location-dot me-2"></i><?php echo $row['job_status'] ?></span></div>
							</div>
						</div>
					</div>
					<div class="dashboard-inner">
						<ul data-submenu-title="Main Navigation">
							<li><a href="dashboard.php"><i class="fa-solid fa-gauge-high me-2"></i>My Dashboard</a></li>

							<li><a href="index.html"><i class="fa-solid fa-power-off me-2"></i>Log Out</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="dashboard-content">
				<div class="dashboard-tlbar d-block mb-4">
					<div class="row">
						<div class="colxl-12 col-lg-12 col-md-12">
							<h1 class="mb-1 fs-3 fw-medium"><?php echo 'Welcome ' . $row['full_name'] ?> !!!</h1>
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item text-muted"><a href="#"><?php $row['full_name'] ?></a></li>
									<li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="#" class="text-primary">My Profile</a></li>
								</ol>
							</nav>
						</div>
					</div>
				</div>

				<div class="dashboard-widg-bar d-block">

					<div class="dashboard-profle-wrapper mb-4">
						<div class="dash-prf-start">
							<div class="dash-prf-start-upper mb-2">
								<div class="dash-prf-start-thumb jbs-verified">
									<figure class="mb-0"><img src=" <?php echo $row['profile_picture'] ?>" class="img-fluid rounded" alt=""></figure>
								</div>
							</div>
							<div class="dash-prf-start-bottom">
								<div class="upload-btn-wrapper small">
									<!-- <button class="btn">Change Profile</button> -->
									<input type="file" name="myfile">
								</div>
							</div>
						</div>
						<div class="dash-prf-end">
							<div class="dash-prfs-caption emplyer">
								<div class="dash-prfs-flexfirst">
									<div class="dash-prfs-title">
										<h4> <?php $row['full_name'] ?></h4>
									</div>
									<div class="dash-prfs-subtitle">
										<div class="jbs-job-mrch-lists">
											<div class="single-mrch-lists">
												<span> <?php echo $row['full_name'] ?></span>.<span><i class="fa-solid fa-location-dot me-1"></i><?php echo $row['place_of_work'] ?></span>
											</div>
										</div>
									</div>
								</div>
								<div class="dash-prfs-flexends">
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
										<label class="form-check-label" for="flexSwitchCheckChecked">Show Profile</label>
									</div>
								</div>
							</div>
							<div class="dash-prf-caption-end">
								<div class="dash-prf-infos">
									<div class="single-dash-prf-infos">
										<div class="single-dash-prf-infos-icons"><i class="fa-solid fa-envelope-open-text"></i></div>
										<div class="single-dash-prf-infos-caption">
											<p class="text-sm-muted mb-0">Email</p>
											<h5><?php echo $row['email'] ?></h5>
										</div>
									</div>
									<div class="single-dash-prf-infos">
										<div class="single-dash-prf-infos-icons"><i class="fa-solid fa-phone-volume"></i></div>
										<div class="single-dash-prf-infos-caption">
											<p class="text-sm-muted mb-0">Phone</p>
											<h5><?php echo $row['phone'] ?></h5>
										</div>
									</div>
									<div class="single-dash-prf-infos">
										<div class="single-dash-prf-infos-icons"><i class="fa-solid fa-briefcase"></i></div>
										<div class="single-dash-prf-infos-caption">
											<p class="text-sm-muted mb-0">Employment Status</p>
											<h5><?php echo $row['job_status'] ?></h5>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>

					<!-- Card Row -->
					<div class="card">
						<div class="card-header">
							<h4>Edit Profile</h4>
						</div>
						<div class="card-body">
							<form method="POST" action="./controller/update_profile.php" enctype="multipart/form-data">
								<div class="row">

									<div class="col-xl-6 col-lg-6 col-md-12">
										<div class="form-group">
											<label>Full Name</label>
											<input type="text" required class="form-control" name="fullname">
										</div>
									</div>

									<div class="col-xl-6 col-lg-6 col-md-12">
										<div class="form-group">
											<label>Email</label>
											<input type="text" required class="form-control" name="email">
										</div>
									</div>

									<div class="col-xl-6 col-lg-6 col-md-12">
										<div class="form-group">
											<label>Phone No.</label>
											<input type="text" required class="form-control" name="phone">
										</div>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-12">
										<div class="form-group">
											<label>Place Of Work</label>
											<input type="text" required class="form-control" name="place_of_work">
										</div>
									</div>

									<div class="col-xl-6 col-lg-6 col-md-12">
										<div class="form-group">
											<label>Graduation Year</label>
											<div class="select-ops">
												<select name="graduation_year">
													<option value="">-----</option>
													<option value="2019 / 2020">2019 / 2020</option>
													<option value="2020 / 2021">2020 / 2021</option>
													<option value="2022 / 2023">2022 / 2023</option>
													<option value="2023 / 2024">2023 / 2024</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-12">
										<div class="form-group">
											<label>Employment Status</label>
											<div class="select-ops">
												<select name="job_status">
													<option value="">-----</option>
													<option value="Civil Servant">Civil Servant</option>
													<option value="Employed">Employed</option>
													<option value="Unemployed">Unemployed</option>
													<option value="Self Employed">Self Employed</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-12">
										<div class="form-group">
											<label>Profile Picture</label>
											<input type="file" required class="form-control" name="profile_pictures" accept="image/*">
										</div>
									</div>

									<div class="col-xl-12 col-lg-12 col-md-12">
										<div class="form-group">
											<label>Biography</label>
											<textarea required class="form-control ht-80" name="bio"></textarea>
										</div>
									</div>
										<div class="col-lg-12 col-md-12">
											<button type="submit" class="btn ft--medium btn-primary" name="update_profile">Update Profile</button>
										</div>
								</div>
							</form>
						</div>
					</div>

					<!-- Submit Busston -->


				</div>

				<!-- footer -->
				<div class="row">
					<div class="col-md-12">
						<div class="py-3 text-center">© SUNO Allumni</div>
					</div>
				</div>

			</div>

		</div>
		<!-- ======================= dashboard Detail End ======================== -->

		<!-- Award Modal -->
		<div class="modal fade" id="award" tabindex="-1" role="dialog" aria-labelledby="messagemodal" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered award-pop-form" role="document">
				<div class="modal-content" id="awardmodal">
					<span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="fas fa-close"></i></span>
					<div class="modal-body">
						<div class="text-center">
							<h4 class="mb-3">Add your Award</h4>
						</div>
						<div class="added-form">
							<form>
								<div class="row mb-3">
									<label class="col-md-12 col-form-label">Award Title</label>
									<div class="col-md-12">
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="row mb-3">
									<label class="col-md-12 col-form-label">Award Year</label>
									<div class="col-md-12">
										<input type="date" class="form-control">
									</div>
								</div>
								<div class="row mb-3">
									<label class="col-md-12 col-form-label">Description</label>
									<div class="col-md-12">
										<textarea class="form-control ht-80"></textarea>
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-md-12">
										<button type="submit" class="btn full-width btn-primary">Save Award</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal -->

		<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


	</div>
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->

	<!-- Color Switcher -->
	<div class="style-switcher">
		<div class="css-trigger shadow"><a href="#"><i class="fa-solid fa-paintbrush"></i></a></div>
		<div>
			<ul id="themecolors" class="m-t-20">
				<li><a href="javascript:void(0)" data-skin="green-theme" class="green-theme">1</a></li>
				<li><a href="javascript:void(0)" data-skin="red-theme" class="red-theme">2</a></li>
				<li><a href="javascript:void(0)" data-skin="blue-theme" class="blue-theme">3</a></li>
				<li><a href="javascript:void(0)" data-skin="yellow-theme" class="yellow-theme">4</a></li>
				<li><a href="javascript:void(0)" data-skin="purple-theme" class="purple-theme">5</a></li>
				<li><a href="javascript:void(0)" data-skin="orange-theme" class="orange-theme">6</a></li>
				<li><a href="javascript:void(0)" data-skin="brown-theme" class="brown-theme">7</a></li>
				<li><a href="javascript:void(0)" data-skin="cadmium-theme" class="cadmium-theme">8</a></li>
			</ul>
		</div>
	</div>

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

<!-- Mirrored from shreethemes.net/jobstock-landing-2.2/jobstock/employer-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Apr 2024 12:05:13 GMT -->

</html>