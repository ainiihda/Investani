<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Investani</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="{{ url('electro/css/bootstrap.min.css') }}"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="{{ url('electro/css/slick.css') }}"/>
 		<link type="text/css" rel="stylesheet" href="{{ url('electro/css/slick-theme.css') }}"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="{{ url('electro/css/nouislider.min.css') }}"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="{{ url('electro/css/font-awesome.min.css') }}">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="{{ url('electro/css/style.css') }}"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<!--
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
						<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
					</ul>
				</div>
			</div>
		-->
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img width="210" height="90" src="{{ asset('electro/img/Investani.png') }}" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- ACCOUNT -->
            @guest
						<div class="main-nav nav navbar-right">
							<div class="header-ctn">
							<!-- <ul class="main-nav nav navbar-right"> -->
								<!-- Wishlist -->
								<!-- <li class="hehe">
									<a href="{{ route('login') }}">
										{{ __('Login') }}
									</a>
								</li> -->
								<!-- /Wishlist -->

								<!-- Cart -->
								<!-- <li class="hehe">
									<a href="{{ route('register') }}">
										{{ __('Register') }}
									</a>
								</li> -->
								<!-- </ul> -->
								<!-- @else -->
								<!-- <ul class="main-nav nav navbar-right"> -->
								<!-- <li class="hehe">
										<a id="navbarDropdown" class="hehe" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
												{{ Auth::user()->name }} <span class="hehe"></span>
										</a>

										<div class="dropdown-menu" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="{{ route('cart.index') }}">
													{{ __('Chart') }}
											</a>
											<br>
											<a class="dropdown-item" href="{{ route('bukti') }}">
													{{ __('Bukti') }}
											</a>
											<br>
											<a class="dropdown-item" href="{{ route('proyek.listProyek') }}">
													{{ __('Proyek saya') }}
											</a>
											<br>
										
										<a class="dropdown-item" href="{{ route('logout') }}"
													 onclick="event.preventDefault();
																				 document.getElementById('logout-form').submit();">
														{{ __('Logout') }}
												</a>

												<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
														@csrf
												</form>
										</div>
								</li> -->
							<!-- </ul> -->
                <!-- @endguest -->
								<!-- SEARCH BAR -->
								<ul class="main-nav nav navbar-nav">
									<li class="hehe"><a href="#">Home</a></li>
									<li class="active"><a href="{{ route('proyek.index') }}">Proyek Pemodalan</a></li>
									<li class="hehe"><a href="#">Tentang Kami</a></li>
									<!-- <li class="hehe"><a href="#">Pertanyaan</a></li> -->


				@guest
									<li class="hehe">
										<a href="{{ route('login') }}">
											{{ __('Login') }}
										</a>
									</li>
									<li class="hehe">
										<a href="{{ route('register') }}">
											{{ __('Register') }}
										</a>
									</li>
				@else
								<li class="hehe">
									<a class="dropdown-toggle"  aria-expanded="true" href="{{ route('cart.index') }}">
										<i class="fa fa-shopping-cart"></i>
										<span> Cart (

										@if(DB::table('investasis')
														->where('user_id', Auth::user()->id)
														->where('status', 0)
														->count() > 0)
												<?php
														$adameong=DB::table('investasis')
																		->where('user_id', Auth::user()->id)
																		->where('status', 0)
																		->count();
														
														echo ($adameong);
												?>
										
											@endif
										) </span>
									</a>
								</li>
								

				<!-- <ul class="main-nav nav navbar-right"> -->
								<li class="hehe">
										<a id="navbarDropdown" class="hehe" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
												{{ Auth::user()->name }} <span class="hehe"></span>
										</a>

										<div class="dropdown-menu" aria-labelledby="navbarDropdown">
											
											<a class="dropdown-item" href="{{ route('bukti') }}">
													{{ __('Investasi saya') }}
											</a>
											<br>
											<a class="dropdown-item" href="{{ route('proyek.listProyek') }}">
													{{ __('Proyek saya') }}
											</a>
											<br>
										
										<a class="dropdown-item" href="{{ route('logout') }}"
													 onclick="event.preventDefault();
																				 document.getElementById('logout-form').submit();">
														{{ __('Logout') }}
												</a>

												<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
														@csrf
												</form>
										</div>
								</li>
							<!-- </ul> -->

				@endguest
								</ul>

								<!-- /SEARCH BAR -->
								<!-- /Cart -->

							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->


		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
							@yield('content')
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<!-- <div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Sign Up for the <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="Enter Your Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div> -->
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#">Hot deals</a></li>
									<li><a href="#">Laptops</a></li>
									<li><a href="#">Smartphones</a></li>
									<li><a href="#">Cameras</a></li>
									<li><a href="#">Accessories</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="{{ url('electro/js/jquery.min.js') }}"></script>
		<script src="{{ url('electro/js/bootstrap.min.js') }}"></script>
		<script src="{{ url('electro/js/slick.min.js') }}"></script>
		<script src="{{ url('electro/js/nouislider.min.js') }}"></script>
		<script src="{{ url('electro/js/jquery.zoom.min.js') }}"></script>
		<script src="{{ url('electro/js/main.js') }}"></script>

	</body>
</html>