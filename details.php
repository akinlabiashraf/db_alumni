<!doctype html>
<html lang="en">

<?php include './layout/header.php' ?>

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
		<?php include './layout/nav.php' ?>
		<!-- End Navigation -->
		<div class="clearfix"></div>
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->

		<!-- ============================ Header Information Start================================== -->
		<section class="gray-simple">
			<div class="container">
				<?php
				require 'controller/database_con.php';
				$id = $_GET['id'];
				$get_data = "SELECT  `email`, `full_name`, `phone`, `place_of_work`, `profile_picture`, `graduation_year`, `password`, `bio`, dept, job_status FROM `users` WHERE id = $id";
				$quary = mysqli_query($db_connect, $get_data);
				$row = mysqli_fetch_array($quary)

				?>
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="cndt-head-block">

							<div class="cndt-head-left">
								<div class="cndt-head-thumb">
									<figure><img src="<?php echo $row['profile_picture'] ?>" class="img-fluid circle" alt=""></figure>
								</div>
								<div class="cndt-head-caption">
									<div class="cndt-head-caption-top">
										<div class="cndt-yior-1"><span class="label text-sm-muted text-success bg-light-success">SUNO</span></div>
										<div class="cndt-yior-2">
											<h4 class="cndt-title"><?php echo $row['full_name'] ?></h4>
										</div>
										<div class="cndt-yior-3">
											<span><i class="fa-solid fa-user-graduate me-1"></i><?php echo $row['dept'] ?></span>
											<span><i class="fa-solid fa-location-dot me-1"></i><?php echo $row['place_of_work'] ?></span>
											<span><i class="fa-solid fa-sack-dollar me-1"></i><?php echo $row['graduation_year'] ?></span>
											<span><i class="fa-solid fa-cake-candles me-1"></i><?php echo $row['job_status'] ?></span>
										</div>
									</div>

								</div>
							</div>
							<div class="cndt-head-right">
								<button type="button" class="btn btn-primary">Download CV<i class="fa-solid fa-download ms-2"></i></button>
								<button type="button" class="btn btn-outline-primary ms-2"><i class="fa-solid fa-bookmark"></i></button>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ============================ Header Information End ================================== -->

		<!-- ============================ Full Candidate Details Start ================================== -->
		<section>
			<div class="container">
				<!-- row Start -->
				<div class="row">

					<div class="col-xl-8 col-lg-8 col-md-12">
						<div class="cdtsr-groups-block">

							<div class="single-cdtsr-block">
								<div class="single-cdtsr-header">
									<h5>About <?php echo $row['full_name'] ?></h5>
								</div>
								<div class="single-cdtsr-body">
									<p><?php echo $row['bio'] ?>
									<p>

								</div>
							</div>

							<div class="single-cdtsr-block">
								<div class="single-cdtsr-header">
									<h5>All Information</h5>
								</div>
								<div class="single-cdtsr-body">
									<div class="row align-items-center justify-content-between gy-4">
										<div class="col-xl-6 col-lg-6 col-md-6">
											<div class="cdtx-infr-box">
												<div class="cdtx-infr-icon"><i class="fa-solid fa-envelope-open-text"></i></div>
												<div class="cdtx-infr-captions">
													<h5><?php echo $row['email'] ?></h5>
													<p>Mail Address</p>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6">
											<div class="cdtx-infr-box">
												<div class="cdtx-infr-icon"><i class="fa-solid fa-phone-volume"></i></div>
												<div class="cdtx-infr-captions">
													<h5><?php echo $row['phone'] ?></h5>
													<p>Phone No.</p>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6">
											<div class="cdtx-infr-box">
												<div class="cdtx-infr-icon"><i class="fa-regular fa-user"></i></div>
												<div class="cdtx-infr-captions">
													<h5>Male</h5>
													<p>Gender</p>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6">
											<div class="cdtx-infr-box">
												<div class="cdtx-infr-icon"><i class="fa-solid fa-cake-candles"></i></div>
												<div class="cdtx-infr-captions">
													<h5><?php echo $row['graduation_year'] ?></h5>
													<p>Graduation Year</p>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6">
											<div class="cdtx-infr-box">
												<div class="cdtx-infr-icon"><i class="fa-solid fa-wallet"></i></div>
												<div class="cdtx-infr-captions">
													<h5><?php echo $row['job_status'] ?></h5>
													<p>Job Status</p>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6">
											<div class="cdtx-infr-box">
												<div class="cdtx-infr-icon"><i class="fa-solid fa-briefcase"></i></div>
												<div class="cdtx-infr-captions">
													<h5><?php echo $row['dept'] ?></h5>
													<p>Experience</p>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6">
											<div class="cdtx-infr-box">
												<div class="cdtx-infr-icon"><i class="fa-solid fa-user-graduate"></i></div>
												<div class="cdtx-infr-captions">
													<h5>Master Degree</h5>
													<p>Qualification</p>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6">
											<div class="cdtx-infr-box">
												<div class="cdtx-infr-icon"><i class="fa-solid fa-layer-group"></i></div>
												<div class="cdtx-infr-captions">
													<h5><?php echo $row['place_of_work'] ?></h5>
													<p>Place Of Work</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>



							<div class="single-cdtsr-block">
								<div class="single-cdtsr-header">
									<h5>Other Allumni</h5>
								</div>
								<div class="single-cdtsr-body">
									<!-- Start All List -->
									<?php $get_data = "SELECT  * FROM `users` ";
									$quary = mysqli_query($db_connect, $get_data);
									$row = mysqli_fetch_array($quary)
									?>
									<div class="row justify-content-start gx-3 gy-4">

										<?php
										while ($row = mysqli_fetch_array($quary)) {
										?>
											<!-- Single Item -->
											<div class="col-xl-12 col-lg-12 col-md-12 col-12">
												<div class="jbs-list-box border">
													<div class="jbs-list-head m-0">
														<div class="jbs-list-head-thunner">
															<div class="jbs-list-usrs-thumb jbs-verified"><a href="candidate-detail.html">
																	<figure><img src="<?php echo $row['profile_picture'] ?>" class="img-fluid circle" alt=""></figure>
																</a></div>
															<div class="jbs-list-job-caption">
																<div class="jbs-job-title-wrap">
																	<h4><a href="#" class="jbs-job-title"><?php echo $row['full_name'] ?></a></h4>
																</div>
																<div class="jbs-job-mrch-lists">
																	<div class="single-mrch-lists">
																		<span><?php echo $row['email'] ?></span>.<span><i class="fa-solid fa-location-dot me-1"></i><?php echo $row['place_of_work'] ?></span>
																	</div>
																</div>
															</div>
														</div>
														<div class="jbs-list-head-middle">
															<div class="elsocrio-jbs sm">
																<div class="ilop-tr"><i class="fa-solid fa-coins"></i></div>
																<h5 class="jbs-list-pack"><?php echo $row['graduation_year'] ?></h5>
															</div>
														</div>
														<div class="jbs-list-head-last">
															<a href="details.php?id=<?= $row['id']; ?>" class="btn btn-md btn-primary px-3">View Detail</a>
														</div>
													</div>
												</div>
											</div>
										<?php } ?>

									</div>
									<!-- End All Job List -->
								</div>
							</div>

						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="sidefr-usr-block mb-4">
							<div class="sidefr-usr-header">
								<?php
								require 'controller/database_con.php';
								$id = $_GET['id'];
								$get_data = "SELECT  `email`, `full_name`, `phone`, `place_of_work`, `profile_picture`, `graduation_year`, `password`, `bio`, dept, job_status FROM `users` WHERE id = $id";
								$quary = mysqli_query($db_connect, $get_data);
								$row = mysqli_fetch_array($quary)

								?>
								<h4 class="sidefr-usr-title">Contact <?php echo $row['full_name'] ?></h4>
							</div>
							<div class="sidefr-usr-body">
								<form>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Your Name">
									</div>
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Email Address">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Phone.">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Subject">
									</div>
									<div class="form-group">
										<textarea class="form-control" placeholder="Your Message"></textarea>
									</div>
									<div class="form-group m-0">
										<button type="button" class="btn btn-primary fw-medium full-width">Send Message</button>
									</div>
								</form>
							</div>
						</div>

						<div class="sidefr-usr-block">
							<div class="cndts-share-block">
								<div class="cndts-share-title">
									<h5>Share Profile</h5>
								</div>
								<div class="cndts-share-list">
									<ul>
										<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-facebook-f"></i></a></li>
										<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-twitter"></i></a></li>
										<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-google-plus-g"></i></a></li>
										<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-instagram"></i></a></li>
									</ul>
								</div>
							</div>
						</div>

					</div>

				</div>
				<!-- /row -->
			</div>
		</section>
		<!-- ============================ Full Candidate Details End ================================== -->

		<!-- ============================ Call To Action ================================== -->
		<section class="bg-cover primary-bg-dark" style="background:url(assets/img/footer-bg-dark.png)no-repeat;">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-7 col-lg-10 col-md-12 col-sm-12">

						<div class="call-action-wrap">
							<div class="sec-heading center">
								<h2 class="lh-base mb-3 text-light">Find The Perfect Job<br>on Job Stock That is Superb For You</h2>
								<p class="fs-6 text-light">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
							</div>
							<div class="call-action-buttons mt-3">
								<a href="JavaScript:Void(0);" class="btn btn-lg btn-dark fw-medium px-xl-5 px-lg-4 me-2">Upload resume</a>
								<a href="JavaScript:Void(0);" class="btn btn-lg btn-whites fw-medium px-xl-5 px-lg-4 text-primary">Join Our Team</a>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- ============================ Call To Action End ================================== -->

		<!-- ============================ Footer Start ================================== -->


		<?php include './layout/footer.php' ?>


		<!-- ============================ Footer End ================================== -->




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

<!-- Mirrored from shreethemes.net/jobstock-landing-2.2/jobstock/candidate-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Apr 2024 12:04:15 GMT -->

</html>