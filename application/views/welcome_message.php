<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('konsumen/include/head') ?>

<body class="alt-menu sidebar-noneoverflow">
	<!-- BEGIN LOADER -->
	<div id="load_screen">
		<div class="loader">
			<div class="loader-content">
				<div class="spinner-grow align-self-center"></div>
			</div>
		</div>
	</div>
	<!--  END LOADER -->

	<!--  BEGIN NAVBAR  -->
	<?php $this->load->view('konsumen/include/nav_bar_non') ?>
	<!--  END NAVBAR  -->

	<!--  BEGIN MAIN CONTAINER  -->
	<div class="main-container" id="container">

		<div class="overlay"></div>
		<div class="search-overlay"></div>

		<!--  BEGIN TOPBAR  -->
		<?php $this->load->view('konsumen/include/top_bar_non') ?>
		<!--  END TOPBAR  -->

		<!--  BEGIN CONTENT PART  -->
		<div id="content" class="main-content">
			<div class="layout-px-spacing">
				<br>
				<div class="row" id="cancel-row">

					<div class="col-lg-12 layout-spacing">
						<div class="statbox widget box box-shadow">
							<div class="widget-header">
								<div class="row">
									<div class="col-xl-12 col-md-12 col-sm-12 col-12">
										<h4>Daftar Produk</h4>
									</div>
								</div>
							</div>
							<div class="widget-content widget-content-area">
								<div class="container">
									<div id="pricingWrapper" class="row">
										<div class="col-md-6 col-lg-4">
											<div class="card stacked mt-5">
												<div class="card-header pt-0">
													<span class="card-price">$49</span>
													<h3 class="card-title mt-3 mb-1">Freelancer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
												</div>
												<div class="card-body">
													<ul class="list-group list-group-minimal mb-3">
														<li class="list-group-item d-flex justify-content-between align-items-center">Support forum
														</li>
														<li class="list-group-item d-flex justify-content-between align-items-center">Free hosting
														</li>
														<li class="list-group-item d-flex justify-content-between align-items-center">2 hours of support
														</li>
														<li class="list-group-item d-flex justify-content-between align-items-center">5GB of storage space
														</li>
													</ul>
													<a href="" class="btn btn-block btn-primary">Buy Now</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-lg-4">
											<div class="card stacked mt-5">
												<div class="card-header pt-0">
													<span class="card-price">$89</span>
													<h3 class="card-title mt-3 mb-1">Small business</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
												</div>
												<div class="card-body">
													<ul class="list-group list-group-minimal mb-3">
														<li class="list-group-item d-flex justify-content-between align-items-center">Unlimited calls
														</li>
														<li class="list-group-item d-flex justify-content-between align-items-center">Free hosting
														</li>
														<li class="list-group-item d-flex justify-content-between align-items-center">10 hours of support
														</li>
														<li class="list-group-item d-flex justify-content-between align-items-center">100GB of storage space
														</li>
													</ul>
													<a href="" class="btn btn-block btn-primary">Buy Now</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-lg-4">
											<div class="card stacked mt-5">
												<div class="card-header pt-0">
													<span class="card-price">$129</span>
													<h3 class="card-title mt-3 mb-1">Larger business</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
												</div>
												<div class="card-body">
													<ul class="list-group list-group-minimal mb-3">
														<li class="list-group-item d-flex justify-content-between align-items-center">Unlimited calls
														</li>
														<li class="list-group-item d-flex justify-content-between align-items-center">Free hosting
														</li>
														<li class="list-group-item d-flex justify-content-between align-items-center">Unlimited hours of support
														</li>
														<li class="list-group-item d-flex justify-content-between align-items-center">1TB of storage space
														</li>
													</ul>
													<a href="" class="btn btn-block btn-primary">Buy Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
			<div class="footer-wrapper">
				<div class="footer-section f-section-1">
					<p class="">Copyright © 2020 <a target="_blank" href="https://designreset.com">DesignReset</a>, All rights reserved.</p>
				</div>
				<div class="footer-section f-section-2">
					<p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
							<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
						</svg></p>
				</div>
			</div>
		</div>
		<!--  END CONTENT PART  -->

	</div>
	<!-- END MAIN CONTAINER -->
	<?php $this->load->view('konsumen/include/footer.php') ?>
</body>

</html>