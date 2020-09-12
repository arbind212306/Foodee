<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{'assets/css/animate.css'}}">
	
	<link rel="stylesheet" href="{{'assets/css/owl.carousel.min.css'}}">
	<link rel="stylesheet" href="{{'assets/css/owl.theme.default.min.css'}}">
	<link rel="stylesheet" href="{{'assets/css/magnific-popup.css'}}">

	<link rel="stylesheet" href="{{'assets/css/bootstrap-datepicker.css'}}">
	<link rel="stylesheet" href="{{'assets/css/jquery.timepicker.css'}}">

	
	<link rel="stylesheet" href="{{'assets/css/flaticon.css'}}">
	<link rel="stylesheet" href="{{'assets/css/style.css'}}">
</head>
<body>

	<div class="wrap">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-12 col-md d-flex align-items-center">
					<p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="#">+00 1234 567</a> or <span class="mailus">email us:</span> <a href="#">emailsample@email.com</a></p>
				</div>
				<div class="col-12 col-md d-flex justify-content-md-end">
					<p class="mb-0">Mon - Fri / 9:00-21:00, Sat - Sun / 10:00-20:00</p>
					<div class="social-media">
						<p class="mb-0 d-flex">
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
						</p>
                    </div>
                    <div class="user-panel">
					@guest
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        <a href="#">|</a>
						@if (Route::has('register'))
                        	<a href="{{ route('register') }}">{{ __('Register') }}</a>
						@endif
					@else
						<a id="navbarDropdown" class=" dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Welcome {{ Auth::user()->name }}</a>
						<div class="dropdown-menu dropdown-menu-right position-fixed" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="{{ route('logout') }}"
								onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">
								{{ __('Logout') }}
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
								@csrf
							</form>
						</div>
					@endguest
                    </div>
				</div>
			</div>
		</div>
	</div>
	
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">Taste.<span>it</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="/home" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="/about" class="nav-link">About</a></li>
					<li class="nav-item"><a href="/menu" class="nav-link">Menu</a></li>
					<li class="nav-item"><a href="/reservation" class="nav-link">Reservation</a></li>
					<li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
    
    @yield('content')

	<footer class="ftco-footer ftco-no-pb ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Taste.it</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
							<li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Open Hours</h2>
						<ul class="list-unstyled open-hours">
							<li class="d-flex"><span>Monday</span><span>9:00 - 24:00</span></li>
							<li class="d-flex"><span>Tuesday</span><span>9:00 - 24:00</span></li>
							<li class="d-flex"><span>Wednesday</span><span>9:00 - 24:00</span></li>
							<li class="d-flex"><span>Thursday</span><span>9:00 - 24:00</span></li>
							<li class="d-flex"><span>Friday</span><span>9:00 - 02:00</span></li>
							<li class="d-flex"><span>Saturday</span><span>9:00 - 02:00</span></li>
							<li class="d-flex"><span>Sunday</span><span> Closed</span></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Instagram</h2>
						<div class="thumb d-sm-flex">
							<a href="#" class="thumb-menu img" style="background-image: url({{ url('assets/images/insta-1.jpg') }});">
							</a>
							<a href="#" class="thumb-menu img" style="background-image: url({{ url('assets/images/insta-2.jpg') }});">
							</a>
							<a href="#" class="thumb-menu img" style="background-image: url({{ url('assets/images/insta-3.jpg') }});">
							</a>
						</div>
						<div class="thumb d-flex">
							<a href="#" class="thumb-menu img" style="background-image: url({{ url('assets/images/insta-4.jpg') }});">
							</a>
							<a href="#" class="thumb-menu img" style="background-image: url({{ url('assets/images/insta-5.jpg') }});">
							</a>
							<a href="#" class="thumb-menu img" style="background-image: url({{ url('assets/images/insta-6.jpg') }});">
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Newsletter</h2>
						<p>Far far away, behind the word mountains, far from the countries.</p>
						<form action="#" class="subscribe-form">
							<div class="form-group">
								<input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
								<input type="submit" value="Subscribe" class="form-control submit px-3">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid px-0 bg-primary py-3">
			<div class="row no-gutters">
				<div class="col-md-12 text-center">

					<p class="mb-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div>
				</div>
			</div>
		</footer>
		

		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


		<script src="{{'assets/js/jquery.min.js'}}"></script>
		<script src="{{'assets/js/jquery-migrate-3.0.1.min.js'}}"></script>
		<script src="{{'assets/js/popper.min.js'}}"></script>
		<script src="{{'assets/js/bootstrap.min.js'}}"></script>
		<script src="{{'assets/js/jquery.easing.1.3.js'}}"></script>
		<script src="{{'assets/js/jquery.waypoints.min.js'}}"></script>
		<script src="{{'assets/js/jquery.stellar.min.js'}}"></script>
		<script src="{{'assets/js/owl.carousel.min.js'}}"></script>
		<script src="{{'assets/js/jquery.magnific-popup.min.js'}}"></script>
		<script src="{{'assets/js/jquery.animateNumber.min.js'}}"></script>
		<script src="{{'assets/js/bootstrap-datepicker.js'}}"></script>
		<script src="{{'assets/js/jquery.timepicker.min.js'}}"></script>
		<script src="{{'assets/js/scrollax.min.js'}}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="{{'assets/js/google-map.js'}}"></script>
		<script src="{{'assets/js/main.js'}}"></script>
        
        @yield('scripts')
	</body>
	</html>