<!doctype html>
<html lang="en">

<?php include './layout/header.php' ?>

<body class="green-theme">

	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->
	<!-- <div id="preloader">
		<div class="preloader"><span></span><span></span></div>
	</div> -->

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
        session_start();
        require 'controller/database_con.php';
        if (isset($_POST['search'])) {
            include './controller/database_con.php';

            $search = $_POST['search_allumni'];
            $fetch_allumni_data = "SELECT * FROM `users` WHERE email LIKE '%$search%' OR dept LIKE '%$search%' OR place_of_work LIKE '%$search%' OR graduation_year LIKE '%$search%' OR job_status LIKE '%$search%'";
            $quary = mysqli_query($db_connect, $fetch_allumni_data);

            $data_exist = mysqli_num_rows($quary);

            if (!($data_exist > 0)) {
                echo "Data Not Found";
            } else {
                while ($row = mysqli_fetch_array($quary)) {
        ?>
                    <section>
			<div class="container">

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



								<!--  -->

							</div>
						</div>

						<div class="col-xl-4 col-lg-4 col-md-12">
							<div class="sidefr-usr-block mb-4">

								<div class="sidefr-usr-header">

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
					<?php } ?>
				</div>
				<!-- /row -->
			</div>
		</section>
        <?php
                }
        ?>
    </div>
</section>


		<!-- ============================ Header Information End ================================== -->

		<!-- ============================ Full Candidate Details Start ================================== -->
		<section>
			<div class="container">

				<div class="row">

						

						
					<?php } ?>
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
								<a href="search.php" class="btn btn-lg btn-dark fw-medium px-xl-5 px-lg-4 me-2">View Other Allumni</a>
								<a href="Search.php" class="btn btn-lg btn-whites fw-medium px-xl-5 px-lg-4 text-primary">Search Other Allumni</a>
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

</html>