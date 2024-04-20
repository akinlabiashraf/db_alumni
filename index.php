<!doctype html>
<html lang="en">
<?php



include "layout/header.php";

include "controller/database_con.php";

?>

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
		<?php include "layout/nav.php" ?>
		<!-- End Navigation -->
		<div class="clearfix"></div>
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->


		<!-- ============================ Hero Banner  Start================================== -->
		<div class="image-bg hero-header gray-simple">
			<div class="container position-relative">
				<div class="row justify-content-center">
					<div class="col-lg-9 col-md-11 col-sm-12">
						<div class="inner-banner-text text-center">
							<div class="inner-banner-eclips mb-4"><span class="label p-2 px-4 rounded-5 fw-medium text-light bg-primary">Meet Our Alumni</span></div>
							<h1>Summit University Allumnus </h1>
							<p class="fs-5">A website to give Summit University Alumni the opportunity to get intouch with eachother.</p>
						</div>
						<div class="search-from-clasic mt-5">
							<div class="hero-search-content">
								<form method="POST" action="search.php">
									<div class="row">

										<div class="col-xl-10 col-lg-10 col-md-9 col-sm-12 pe-xl-0 pe-lg-0 pe-md-0">
											<div class="classic-search-box">
												<div class="form-group full">
													<div class="input-with-icon">
														<input type="text" class="form-control" placeholder="Department, Graduation Year, Place Of Work" name="search_allumni">
														<img src="assets/img/pin.svg" width="20" alt="">
													</div>
												</div>

											</div>
										</div>

										<div class="col-xl-2 col-lg-2 col-md-3 col-sm-12">
											<div class="form-group">
												<button type="submit" class="btn btn-primary full-width" name="search">Search Alumni</button>
											</div>
										</div>




									</div>
								</form>
							</div>
						</div>




					</div>
				</div>

				<div class="position-absolute start-0 top-0 pt-5 ps-4">
					<div class="square--60 bg-light-primary circle text-primary fs-4"><i class="fa-brands fa-wordpress"></i></div>
				</div>
				<div class="position-absolute end-0 top-50 pt-5 ps-4">
					<div class="square--60 bg-light-danger circle text-danger fs-4"><i class="fa-solid fa-blog"></i></div>
				</div>
			</div>

			<div class="position-absolute start-0 bottom-0 pb-5 ps-5">
				<div class="square--60 bg-light-purple circle text-purple fs-4"><i class="fa-solid fa-shield-halved"></i></div>
			</div>
			<div class="position-absolute start-50 top-0 pt-5 ps-5">
				<div class="square--60 bg-light-warning circle text-warning fs-4"><i class="fa-brands fa-squarespace"></i></div>
			</div>
			<div class="position-absolute start-50 bottom-0 pb-5">
				<div class="square--60 bg-light-info circle text-info fs-4"><i class="fa-brands fa-slack"></i></div>
			</div>
		</div>
		<!-- ============================ Hero Banner End ================================== -->


		<!-- ============================ High Candidates Start ================================== -->
		<section class="position-relative p-0">
			<div class="position-absolute start-0 end-0 top-0 ht-150 gray-simple rounded-bottom-pill"></div>
			<div class="container position-relative">

				<div class="row align-items-center justify-content-center g-3">
					<div class="col">
						<figure class="m-0 p-2 border border-4 rounded-pill rounded-pill z-2">
							<img src="assets/img/cand-4.png" class="img-fluid rounded-pill" alt="">
						</figure>
					</div>

					<div class="col">
						<figure class="m-0 p-2 border border-4 rounded-pill z-2">
							<img src="assets/img/cand-2.png" class="img-fluid rounded-pill" alt="">
						</figure>
					</div>

					<div class="col">
						<figure class="m-0 p-2 border border-4 rounded-pill z-2">
							<img src="assets/img/cand-1.png" class="img-fluid rounded-pill" alt="">
						</figure>
					</div>

					<div class="col">
						<figure class="m-0 p-2 border border-4 rounded-pill z-2">
							<img src="assets/img/cand-3.png" class="img-fluid rounded-pill" alt="">
						</figure>
					</div>

					<div class="col">
						<figure class="m-0 p-2 border border-4 rounded-pill z-2">
							<img src="assets/img/cand-5.png" class="img-fluid rounded-pill" alt="">
						</figure>
					</div>
				</div>

			</div>
		</section>
		<div class="clearfix"></div>
		<!-- ============================ Top Candidates End ================================== -->


		<!-- ============================ Featured Jobs Start ================================== -->
		<section>
			<div class="container">

				<div class="row justify-content-center">
					<div class="col-xl-6 col-lg-7 col-md-10 text-center">
						<div class="sec-heading center">
							<h2>Our Alumni</h2>
							<p>At Summit University We know the Importance of networking and the role it plays in the world so we came up with the idea of developing a website that bring our Allumni together</p>
						</div>
					</div>
				</div>
				<?php
				require 'controller/database_con.php';
				$get_data = "SELECT  `email`, `full_name`, `phone`, `place_of_work`, `profile_picture`, `graduation_year`, `password`, `bio`, dept, job_status FROM `users` ORDER BY id LIMIT 8";
				$quary = mysqli_query($db_connect, $get_data);

				?>


				<div class="row justify-content-center gx-xl-3 gx-3 gy-4">

					<!-- Single Item -->
					<?php
					while ($row = mysqli_fetch_array($quary)) {
					?>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">

							<div class="job-instructor-layout border">
								<div class="left-tags-capt">
									<span class="featured-text"><a href="https://wa.me/<?php $row['phone'] ?>"><?php echo $row['job_status'] ?></a></span>
									<!-- <span class="urgent">Urgent</span> -->
								</div>
								<div class="brows-job-type"><span class="full-time"><?php echo $row['graduation_year'] ?></span></div>
								<div class="job-instructor-thumb">
									<a href="#"><img src="<?php echo $row['profile_picture'] ?>" class="img-fluid" alt="" height="5000"></a>
								</div>
								<div class="job-instructor-content">

									<h4 class='instructor-title'><a href='#'> <?php echo $row['full_name'] ?> </a></h4>
									<div class="instructor-skills">
										<?php echo $row['email']  ?>
									</div>
								</div>
								<div class="job-instructor-footer">
									<div class="instructor-students">
										<h5 class="instructor-scount"><?php echo $row['dept']; ?></h5>
									</div>
									<div class="instructor-corses">
										<!-- <span class="c-counting"><?php echo $row['dept']; ?></span> -->
									</div>
								</div>

							</div>
						</div>
					<?php } ?>


				</div>

			</div>
		</section>

		<section class="pt-0">
			<div class="container">

				<div class="row align-items-center justify-content-between">

					<div class="col-xl-6 col-lg-6 col-md-12 col-12">
						<div class="p-lg-5 p-md-0 pt-md-5">
							<!-- Heading -->
							<div class="mb-4 mb-sm-7">
								<span class="fw-medium label-light-success px-3 py-2 rounded">Our Showcase</span>
								<h2 class="mt-2 lh-base">Best Networking platform<br>For you to meet our Allumni</h2>
								<p>At Summit University We know the Importance of networking and the role it plays in the world so we came up with the idea of developing a website that bring our Allumni together.</p>
							</div>
							<!-- End Heading -->

							<div class="features-groupss my-4">
								<ul class="row gx-3 gy-4 p-0">
									<li class="fw-medium col-xl-6 col-lg-6 col-6"><span class="square--30 circle d-inline-flex align-items-center justify-content-center text-success bg-light-success me-2"><i class="fa-solid fa-check"></i></span>Corporate Business jobs</li>
									<li class="fw-medium col-xl-6 col-lg-6 col-6"><span class="square--30 circle d-inline-flex align-items-center justify-content-center text-success bg-light-success me-2"><i class="fa-solid fa-check"></i></span>Company Showcase</li>
									<li class="fw-medium col-xl-6 col-lg-6 col-6"><span class="square--30 circle d-inline-flex align-items-center justify-content-center text-success bg-light-success me-2"><i class="fa-solid fa-check"></i></span>Creative Services</li>
									<li class="fw-medium col-xl-6 col-lg-6 col-6"><span class="square--30 circle d-inline-flex align-items-center justify-content-center text-success bg-light-success me-2"><i class="fa-solid fa-check"></i></span>Easy To Upload Resume</li>
									<li class="fw-medium col-xl-6 col-lg-6 col-6"><span class="square--30 circle d-inline-flex align-items-center justify-content-center text-success bg-light-success me-2"><i class="fa-solid fa-check"></i></span>Online E-commerce</li>
									<li class="fw-medium col-xl-6 col-lg-6 col-6"><span class="square--30 circle d-inline-flex align-items-center justify-content-center text-success bg-light-success me-2"><i class="fa-solid fa-check"></i></span>Hire Expert Candidates</li>
								</ul>
							</div>

							<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-6">
									<a class="btn btn-primary fw-medium px-4" href="#">Meet Our Allumni</a>
								</div>
							</div>
						</div>

					</div>

					<div class="col-xl-5 col-lg-5 col-md-12 col-12">
						<div class="side-thumber-wrap mt-md-0 mt-4">
							<div class="side-effect"></div>
							<div class="side-thumber-img position-relative">
								<div class="square--80 circle bg-white shadow position-absolute start-0 top-0 mt-5 ms-5 animate-bounce"><img src="assets/img/l-4.png" class="img-fluid" width="40" alt=""></div>
								<div class="square--80 circle bg-white shadow position-absolute end-0 top-0 mt-5 me-5 animate-bounce"><img src="assets/img/l-7.png" class="img-fluid" width="40" alt=""></div>
								<div class="square--80 circle bg-white shadow position-absolute start-50 bottom-0 mb-4 animate-bounce"><img src="assets/img/l-10.png" class="img-fluid" width="40" alt=""></div>
								<figure><img src="assets/img/pay-2.png" class="img-fluid rounded" alt=""></figure>
							</div>
						</div>
					</div>

				</div>

			</div>
		</section>
		<div class="clearfix"></div>
		<!-- ============================ Why Choose Us End ====================== -->





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

<!-- Mirrored from shreethemes.net/jobstock-landing-2.2/jobstock/home-11.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Apr 2024 12:02:39 GMT -->

</html>