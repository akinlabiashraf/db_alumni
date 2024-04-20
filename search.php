<!doctype html>
<html lang="en">

<?php include './layout/header.php';

session_start();
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
		<?php include './layout/nav.php' ?>
		<!-- End Navigation -->
		<div class="clearfix"></div>
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->


		<!-- ============================ Page Title Start================================== -->
		<div class="page-title primary-bg-dark" style="background:url(assets/img/bg2.png) no-repeat;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">

						<h2 class="ipt-title">Search For Alumni</h2>
						<!-- <div class="breadcrumbs light">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="JavaScript:Void(0);">Home</a></li>
										<li class="breadcrumb-item"><a href="JavaScript:Void(0);">Candidate</a></li>
										<li class="breadcrumb-item active" aria-current="page">Candidate Grid 01</li>
									</ol>
								</nav>
							</div> -->
					</div>
				</div>
			</div>
		</div>
		<!-- ============================ Page Title End ================================== -->

		<!-- ============================ All List Wrap ================================== -->
		<section>
			<div class="container">
				<div class="row">

					<!-- Search Sidebar -->
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="side-widget-blocks">

							<div class="sidebar_header d-flex align-items-center justify-content-between px-4 py-3 br-bottom">
								<h4 class="fs-bold fs-5 mb-0">Search Filter</h4>
								<div class="ssh-header">
									<a href="javascript:void(0);" class="clear_all ft-medium text-muted">Clear All</a>
									<a href="#search_open" data-bs-toggle="collapse" aria-expanded="false" role="button" class="collapsed _filter-ico ml-2"><i class="fa-solid fa-filter"></i></a>
								</div>
							</div>

							<!-- Find New Property -->
							<div class="sidebar-widgets collapse miz_show" id="search_open" data-bs-parent="#search_open" style="height: 700px;">
								<div class="search-inner">
									<form action="search.php" method="POST">
										<div class="side-widget-inner">

											<div class="form-group">
												<label>Search By Keyword</label>
												<div class="form-group-inner">
													<input type="text" class="form-control" placeholder="Search by keywords..." name="search_allumni">
												</div>
											</div>

											<div class="form-group">
												<label>Search by Department</label>
												<div class="form-group" >
													<select name="search_allumni">
														<option value="">Select Department</option>
														<option value="Computer Science">Computer Science</option>
														<option value="Biochemistry">Biochemistry</option>
														<option value="Microbiology">Microbiology</option>
														<option value="Mass Communication">Mass Communication</option>
														<option value="Accounting">Accounting</option>
														<option value="Economics">Economics</option>
														<option value="Business Administration">Business Administration</option>
														<option value="Political Science">Political Science</option>
													</select>
												</div>
											</div>

											<div class="form-group mb-1">
												<button type="submit" class="btn btn-lg btn-primary fs-6 fw-medium full-width" name="search2">Search Allumni</button>
											</div>

										</div>

									</form>

								</div>
							</div>
						</div>
					</div>
					<!-- Sidebar End -->

					<!-- Job List Wrap -->
					<div class="col-lg-8 col-md-12 col-sm-12">
						<!-- Shorting Box -->
						<div class="row justify-content-center mb-4">
							<div class="col-lg-12 col-md-12">
								<div class="item-shorting-box">
									<div class="item-shorting clearfix">
										<div class="left-column">
											<!-- <h4 class="m-sm-0 mb-2">Showing 1 - 10 of 20 Results</h4> -->

										</div>
									</div>

								</div>
							</div>
						</div>
						<!-- Shorting Wrap End -->

						<!-- Start All List -->
						<?php
						// require 'controller/database_con.php';
						// $get_data = "SELECT id, `email`, `full_name`, `phone`, `place_of_work`, `profile_picture`, `graduation_year`, `password`, `bio`, dept, job_status FROM `users` ORDER BY id LIMIT 6";
						// $quary = mysqli_query($db_connect, $get_data);

						require 'controller/database_con.php';
						if (isset($_POST['search']) OR isset($_POST['search2'])) {
							include './controller/database_con.php';

							$search = $_POST['search_allumni'];
							$fetch_allumni_data = "SELECT * FROM `users` WHERE email LIKE '%$search%' OR dept LIKE '%$search%' OR place_of_work LIKE '%$search%' OR graduation_year LIKE '%$search%' OR job_status LIKE '%$search%'";
							$quary = mysqli_query($db_connect, $fetch_allumni_data);

							$data_exist = mysqli_num_rows($quary);

						?>
							<div class="row justify-content-center gx-3 gy-4">

								<?php
								if (!($data_exist > 0)) {
									echo "Data Not Found";
								} else {
									while ($row = mysqli_fetch_array($quary)) {

								?>
										<!-- Single Item -->
										<!-- <?php
												// while ($row = mysqli_fetch_array($quary)) {
												?> -->
										<div class="col-xl-4 col-lg-6 col-md-6 col-12">
											<div class="jbs-grid-usrs-block border">
												<div class="jbs-grid-usrs-thumb">
													<div class="jbs-grid-yuo jbs-verified">
														<a href="candidate-detail.html">
															<figure><img src="<?php echo $row['profile_picture'] ?>" class="img-fluid circle" alt=""></figure>
														</a>
													</div>
												</div>
												<div class="jbs-grid-usrs-caption">
													<div class="jbs-kioyer">
														<!-- <div class="jbs-kioyer-groups">
															<span class="fa-solid fa-star active"></span>
															<span class="fa-solid fa-star active"></span>
															<span class="fa-solid fa-star active"></span>
															<span class="fa-solid fa-star active"></span>
															<span class="fa-solid fa-star"></span>
															<span class="aal-reveis">4.6</span>
														</div> -->
													</div>
													<div class="jbs-tiosk">
														<h4 class="jbs-tiosk-title"><a href="details.php?id=<?= $row['id']; ?>"><?php echo $row['full_name'] ?></a></h4>
														<div class="jbs-tiosk-subtitle"><span><?php echo $row['email'] ?></span></div>
													</div>
												</div>
												<div class="jbs-grid-usrs-info">
													<div class="jbs-info-ico-style bold">
														<div class="jbs-single-y1 style-2"><span><i class="fa-solid fa-briefcase"></i></span><?php echo $row['job_status'] ?></div>
														<div class="jbs-single-y1 style-3"><span><i class="fa-solid fa-location-dot me-1"></i></span><?php echo $row['place_of_work'] ?></div>
													</div>
												</div>
												<div class="jbs-grid-usrs-contact">
													<div class="jbs-btn-groups">
														<a href="#" class="btn btn-md btn-gray px-4"><?php echo $row['graduation_year'] ?></a>
														<a href="details.php?id=<?= $row['id']; ?>" class="btn btn-md btn-primary px-4">View Detail</a>
													</div>
												</div>
											</div>
										</div>

									<?php } ?>

								<?php } ?>
							<?php } ?>
							</div>
							<!-- End All Job List -->

							<!-- Pagination -->
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<nav aria-label="Page navigation example">
										<ul class="pagination">
											<li class="page-item">

											</li>

											</li>
										</ul>
									</nav>
								</div>
							</div>

					</div>
					<!-- Job List Wrap End-->

				</div>
			</div>
		</section>
		<!-- ============================ All List Wrap ================================== -->

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
		</section><br>
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

<!-- Mirrored from shreethemes.net/jobstock-landing-2.2/jobstock/candidate-grid-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Apr 2024 12:04:06 GMT -->

</html>