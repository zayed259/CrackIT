<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>CrackIT Limited - Committed to ideal service - @yield('pagetitle') </title>
	<!-- Bootstrap core CSS -->
	<link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="{{url('assets/css/all.css')}}" rel="stylesheet">
	<!-- Owl Carousel CSS -->
	<link href="{{url('assets/css/owl.carousel.min.css')}}" rel="stylesheet">
	<!-- Owl Carousel CSS -->
	<link href="{{url('assets/css/jquery.fancybox.min.css')}}" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="{{url('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
	<div class="wrapper-main">
		<!-- Top Bar -->
		<div class="top-bar bg-dark">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6">
						<div class="social-media">
							<ul>
								<li><a target="_blank" href="https://www.facebook.com/crackitltd"><i
											class="fab fa-facebook-f"></i></a></li>
								<li><a target="_blank" href="https://twitter.com/crackitltd"><i
											class="fab fa-twitter"></i></a></li>
								<li><a target="_blank" href="https://www.linkedin.com/company/crackitltd/"><i
											class="fab fa-linkedin-in"></i></a></li>
								<li><a target="_blank" href="#"><i class="fab fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="contact-details">
							<ul>
								<li><i class="fas fa-phone fa-rotate-90"></i> +8801911977900</li>
								<li><i class="fas fa-map-marker-alt"></i> H-26, R-04, Mirpur-10, Dhaka</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark top-nav">
			<div class="container-fluid bg-dark">
				<a class="navbar-brand text-light" href="{{url('/')}}">
					<h1>CrackIT Limited</h1>
				</a>
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
					data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="fas fa-bars"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link  text-light " href="{{url('/')}}">Home</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link text-light" href="{{url('about')}}" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us<i class="fas fa-sort-down"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right bg-dark"
								aria-labelledby="navbarDropdownBlog">
								<a class="dropdown-item text-light text-uppercase font-weight-normal" href="{{url('management')}}">Management</a>
								<a class="dropdown-item text-light text-uppercase font-weight-normal" href="{{url('team')}}">Our team</a>

							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link text-light" href="{{url('service')}}">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-light" href="{{url('contact')}}">Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

        @yield('content')

		
		<!--footer starts from here-->
		<footer class="footer">
			<div class="container-fluid bottom_border">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 col">
						<h5 class="headin5_amrc col_white_amrc pt2">About Us</h5>
						<!--headin5_amrc-->
						<p class="mb10">CrackIT Limited Is An Award-Winning Digital Agency In Bangladesh! We Have A
							Smart, Dynamic, And Dedicated Team Of Talented Professionals For Web, Mobile, E-Commerce &
							Digital Marketing Projects Work.

						</p>

					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
						<!--headin5_amrc-->
						<ul class="footer_ul_amrc">
							<li><a href="{{url('team')}}"><i class="fas fa-long-arrow-alt-right"></i>Our Team </a></li>
							<li><a href="{{url('about')}}"><i class="fas fa-long-arrow-alt-right"></i>About Us</a></li>
							<li><a href="{{url('service')}}"><i class="fas fa-long-arrow-alt-right"></i>Our Services</a></li>
							<li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Get In Touch</a></li>
						</ul>
						<!--footer_ul_amrc ends here-->
					</div>

					<div class="col-lg-3 col-md-6 col-sm-6 ">
						<div class="news-box">
							<h5 class="headin5_amrc col_white_amrc pt2">Newsletter</h5>
							<p>
								We Have Been Working Successfully For The Last 5+ Years! We Have Extraordinary Track
								Records Of Designing And Developing Mission-Critical Business-Focused Projects. </p>
							<form action="#">
								<div class="input-group">
									<input class="form-control" placeholder="Search for..." type="text">
									<span class="input-group-btn">
										<button class="btn btn-secondary" type="button">Go!</button>
									</span>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<h5 class="text-light mt-4">Follow Us</h5>
						<ul class="footer-social">
							<li><a class="facebook hb-xs-margin" href="https://www.facebook.com/crackitltd"><span
										class="hb hb-xs spin hb-facebook"><i class="fab fa-facebook-f"></i></span></a>
							</li>
							<li><a class="twitter hb-xs-margin" href="https://twitter.com/crackitltd"><span
										class="hb hb-xs spin hb-twitter"><i class="fab fa-twitter"></i></span></a></li>
							<li><a class="instagram hb-xs-margin" href=""><span class="hb hb-xs spin hb-instagram"><i
											class="fab fa-instagram"></i></span></a></li>

							<li><a class="instagram hb-xs-margin"
									href="https://www.linkedin.com/company/crackitltd/"><span
										class="hb hb-xs spin hb-instagram"><i class="fab fa-linkedin"></i></span></a>
							</li>


						</ul>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<p class="copyright text-center">All Rights Reserved. &copy; {{date('Y')}} <a target="_blank"
						href="https://crackit-bd.com/">CrackIT</a>
					Design By :
					<a target="_blank" href="https://www.facebook.com/crackitltd/">CrackIT Limited</a>
				</p>
			</div>
		</footer>
	</div>

	<!-- Bootstrap core JavaScript -->
	<script src="{{url('assets/js/jquery.min.js')}}"></script>
	<script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{url('assets/js/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{url('assets/js/isotope.pkgd.min.js')}}"></script>
	<script src="{{url('assets/js/filter.js')}}"></script>
	<script src="{{url('assets/js/jquery.appear.js')}}"></script>
	<script src="{{url('assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{url('assets/js/jquery.fancybox.min.js')}}"></script>
	<script src="{{url('assets/js/script.js')}}"></script>
</body>

</html>