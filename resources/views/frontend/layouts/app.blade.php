<!DOCTYPE html>
<html lang="en">

<!-- Theme -->
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Home Page 1 :: School, Coaching, Institute Course booking</title>

	<link rel="stylesheet" href="{{asset('front/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('front/css/fontawesome-all.css')}}">
	<link rel="stylesheet" href="{{asset('front/css/flaticon.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('front/css/meanmenu.css')}}">
	<link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('front/css/video.min.css')}}">
	<link rel="stylesheet" href="{{asset('front/css/lightbox.css')}}">
	<link rel="stylesheet" href="{{asset('front/css/progess.css')}}">
	<link rel="stylesheet" href="{{asset('front/css/animate.min.css')}}">
	<link rel="stylesheet" href="{{asset('front/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('front/css/style1.css')}}">
	<link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	

	<link rel="stylesheet"  href="{{asset('front/css/colors/switch.css')}}">
	<link href="{{asset('front/css/colors/color-2.css')}}" rel="alternate stylesheet" type="text/css" title="color-2">
	<link href="{{asset('front/css/colors/color-3.css')}}" rel="alternate stylesheet" type="text/css" title="color-3">
	<link href="{{asset('front/css/colors/color-4.css')}}" rel="alternate stylesheet" type="text/css" title="color-4">
	<link href="{{asset('front/css/colors/color-5.css')}}" rel="alternate stylesheet" type="text/css" title="color-5">
	<link href="{{asset('front/css/colors/color-6.css')}}" rel="alternate stylesheet" type="text/css" title="color-6">
	<link href="{{asset('front/css/colors/color-7.css')}}" rel="alternate stylesheet" type="text/css" title="color-7">
	<link href="{{asset('front/css/colors/color-8.css')}}" rel="alternate stylesheet" type="text/css" title="color-8">
	<link href="{{asset('front/css/colors/color-9.css')}}" rel="alternate stylesheet" type="text/css" title="color-9">
    
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

    <script src="https://cdn.bootcss.com/select2/3.4.5/select2.min.js"></script>
    <link href="https://cdn.bootcss.com/select2/3.4.5/select2.min.css" rel="stylesheet">


</head>

<body>

	<div id="preloader"></div>


	<div id="switch-color" class="color-switcher">
		<div class="open"><i class="fas fa-cog fa-spin"></i></div>
		<h4>COLOR OPTION</h4>
		<ul>
			<li><a class="color-2" onclick="setActiveStyleSheet('color-2'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
			<li><a class="color-3" onclick="setActiveStyleSheet('color-3'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
			<li><a class="color-4" onclick="setActiveStyleSheet('color-4'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
			<li><a class="color-5" onclick="setActiveStyleSheet('color-5'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
			<li><a class="color-6" onclick="setActiveStyleSheet('color-6'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
			<li><a class="color-7" onclick="setActiveStyleSheet('color-7'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
			<li><a class="color-8" onclick="setActiveStyleSheet('color-8'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
			<li><a class="color-9" onclick="setActiveStyleSheet('color-9'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
		</ul>
		<button class="switcher-light">WIDE </button>
		<button class="switcher-dark">BOX </button>
		<a class="rtl-v" href="RTL_Genius/index.html">RTL </a>
	</div>


	<!-- Start of Header section
		============================================= -->
		<header>
			<div id="main-menu"  class="main-menu-container">
				<div  class="main-menu">
					<div class="container">
						<div class="navbar-default">
							<div class="navbar-header float-left">
								<a class="navbar-brand text-uppercase logo_tutor_mobile" href="index.php"><img class="logo_tutor_mobile" src="{{asset('front/img/logo/tutors2home.png')}}"  alt="logo"></a>
							</div><!-- /.navbar-header -->

							<div class="select-lang">
								<select>
									<option value="9" selected>ENG</option>
									<option value="10">BAN</option>
									<option value="11">ARB</option>
									<option value="12">FRN</option>
								</select>
							</div>
							<div class="cart-search float-right ul-li">
								<ul>
									<li><a href="#"><i class="fas fa-shopping-bag"></i></a></li>
									<li>
										<button type="button" class="toggle-overlay search-btn">
											<i class="fas fa-search"></i>
										</button>
										<div class="search-body">
											<div class="search-form">
												<form action="#">
													<input class="search-input" type="search" placeholder="Search Here">
													<div class="outer-close toggle-overlay">
														<button type="button" class="search-close">
															<i class="fas fa-times"></i>
														</button>
													</div>
												</form>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="log-in float-right">
							    @if(!Auth::check()) 
  								<a href="{{ route('login') }}">log in</a>
								<a href="{{ route('signup') }}">Signup</a>
								@endif
								@if(isset(Auth::user()->id) && Auth::user()->role_id==4) 
						<a href="{{ route('parent-dashboard') }}">Dashboard</a>
						@endif		
						  @if(Auth::check()) 
						 <form action="{{ route('logout') }}" method="post">
                          @csrf
                          <a  href="javascript:void(0);" onclick="$(this).closest('form').submit();">Logout</a>
                        </form>
						@endif
						@if(isset(Auth::user()->id) && Auth::user()->role_id==2) 
						<a href="{{ route('teacher-dashboard') }}">Dashboard</a>
						@endif
						@if(isset(Auth::user()->id) && Auth::user()->role_id==3) 
						<a href="{{ route('student-dashboard') }}">Dashboard</a>
						@endif
						
								<!-- The Modal -->
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">

											<!-- Modal Header -->
											<div class="modal-header backgroud-style">
												<div class="gradient-bg"></div>
												<div class="popup-logo">
													<img src="{{asset('front/img/logo/p-logo.jpg')}}" alt="">
												</div>
												<div class="popup-text text-center">
													<h2> <span>Login</span> Your Account.</h2>
													<p>Login to our website, or <span>REGISTER</span></p>
												</div>
											</div>

											<!-- Modal body -->
											<div class="modal-body">
												<div class="facebook-login">
													<a href="#">
														<div class="log-in-icon">
															<i class="fab fa-facebook-f"></i>
														</div>
														<div class="log-in-text text-center">
															Login with Facebook
														</div>
													</a>
												</div>
												<div class="alt-text text-center"><a href="#">OR SIGN IN</a> </div>
												<form class="contact_form" action="#" method="POST" enctype="multipart/form-data">
													<div class="contact-info">
														<input class="name" name="Email" type="email" placeholder="Your@email.com*">
													</div>
													<div class="contact-info">
														<input class="pass" name="name" type="password" placeholder="Your password*">
													</div>
													<div class="nws-button text-center white text-capitalize">
														<button type="submit" value="Submit">LOg in Now</button> 
													</div> 
												</form>
												<div class="log-in-footer text-center">
													<p>* Denotes mandatory field.</p>
													<p>** At least one telephone number is required.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<nav class="navbar-menu float-right">
								<div class="nav-menu ul-li">
									<ul>
										<li><a href="{{ route('find-tutors') }}">Find a Tutor</a></li>
										<li><a href="{{ route('become-tutors') }}">Become A Tutor</a></li>
										<li><a href="#footer-area">About Us</a></li>
										<!--<li><a href="#best-product">shop</a></li>-->
										<!-- <li><a href="#contact-area">Contact Us</a></li> -->
										<!--<li class="menu-item-has-children ul-li-block">
											<a href="#!">Pages</a>
											<ul class="sub-menu">
												<li><a href="teacher.html">Teacher</a></li>
												<li><a href="teacher-details.html">Teacher Details</a></li>
												<li><a href="blog.html">Blog</a></li>
												<li><a href="blog-single.html">Blog Single</a></li>
												<li><a href="course.html">Course</a></li>
												<li><a href="course-details.html">Course Details</a></li>
												<li><a href="faq.html">FAQ</a></li>
												<li><a href="check-out.html">Check Out</a></li>
											</ul>
										</li>-->
										<!--<li class="menu-item-has-children ul-li-block">
											<a href="#">Resgister</a>
											<ul class="sub-menu">
												<li><a href="student_registration.php">Student Registration</a></li>
												<li><a href="teacher_registration.php">Teacher Registration</a></li>
											</ul>
										</li>-->
									</ul>
								</div>
							</nav>

							<div class="mobile-menu">
								<div class="logo logo.tutor.mobile"><a href="/"><img src="{{asset('front/img/logo/tutors2home.png')}}"  alt="Logo"></a></div>
								<nav>
									<ul>
										<li><a href="{{ route('find-tutors') }}">Find a Tutor</a></li>
										<li><a href="{{ route('become-tutors') }}">Become A Tutor</a></li>
										<li><a href="#footer-area">About</a></li>
										<!-- <li><a href="blog.html">Blog</a>
											<ul>
												<li><a href="blog.html">Blog</a></li>
												<li><a href="blog-single.html">Blog sinlge</a></li>
											</ul>
										</li> -->
										<li><a href="#best-product">Shop</a>
										</li>
										<li><a href="#contact-area">Contact</a></li>
										<!--<li><a href="#">Pages</a>
											<ul>
												<li><a href="course.html">Course</a></li>
												<li><a href="course-details.html">course sinlge</a></li>
												<li><a href="teacher.html">teacher</a></li>
												<li><a href="teacher-details.html">teacher details</a></li>
												<li><a href="faq.html">FAQ</a></li>
												<li><a href="check-out.html">Check Out</a></li>
											</ul>
										</li>-->
										<!--<li>
											<a href="#">Resgister</a>
											<ul>
												<li><a href="student_registration.php">Student Registration</a></li>
												<li><a href="teacher_registration.php">Teacher Registration</a></li>
											</ul>
										</li>-->
									</ul>
								</nav>

							</div>
						</div>
					</div>
				</div>
			</div>
		</header>


		<!-- <div  class="slider-area slider-bg-1 relative-position"> -->

	@yield('content')

	<!-- Start of contact area
		============================================= -->
		<!-- <section id="contact-area" class="contact-area-section backgroud-style " >
			<div class="container ">
				<div class="contact-area-content">
					<div class="row">
						<div class="col-md-6">
							<div class="contact-left-content " >
								<div class="section-title area-contact-content  mb45 headline text-center" style="margin: 20px;">
									<span class="subtitle ml42  text-uppercase">CONTACT US</span>
									<h2><span>Get in Touch</span></h2>
									<p>
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet  ipsum dolor sit amet, consectetuer adipiscing elit.
									</p>
								</div>

								<div class="contact-address area-contact-content" style="margin: 20px;">
									<div class="contact-address-details">
										<div class="address-icon relative-position text-center float-left">
											<i class="fas fa-map-marker-alt"></i>
										</div>
										<div class="address-details ul-li-block">
											<ul>
												<li><span>Primary: </span>Last Vegas, 120 Graphic Street, US</li>
												<li><span>Second: </span>Califorinia, 88 Design Street, US</li>
											</ul>
										</div>
									</div>

									<div class="contact-address-details ">
										<div class="address-icon relative-position text-center float-left">
											<i class="fas fa-phone"></i>
										</div>
										<div class="address-details ul-li-block">
											<ul>
												<li><span>Primary: </span>(100) 3434 55666</li>
												<li><span>Second: </span>(20) 3434 9999</li>
											</ul>
										</div>
									</div>

									<div class="contact-address-details">
										<div class="address-icon relative-position text-center float-left">
											<i class="fas fa-envelope"></i>
										</div>
										<div class="address-details ul-li-block">
											<ul>
												<li><span>Primary: </span>info@geniuscourse.com</li>
												<li><span>Second: </span>mail@genius.info</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="genius-btn area-contact-content mt60 gradient-bg text-center text-uppercase ul-li-block bold-font " style="margin: 20px;">
								<a href="#">Contact Us <i class="fas fa-caret-right"></i></a>
							</div>
						</div>

						<div class="col-md-6">
							<div id="contact-map" class="contact-map-section">
								<div id="google-map">
									<div id="googleMaps" class="google-map-container"></div>
								</div>/#google-map
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
	<!-- End of contact area
		============================================= -->
	<!-- Start of footer section
		============================================= -->
		<footer>
			<section id="footer-area" class="footer-area-section">
				<div class="container">
					<div class="footer-content pb10">
						<div class="row">
							<div class="col-md-3">
								<div class="footer-widget "  >
									<div class="footer-logo area-footer-content  mb35">
										<img src="{{asset('front/img/logo/tutors2home.png')}}" alt="">
									</div>
									<div class="footer-about-text area-footer-content ">
										<p>We take our mission of increasing global access to quality education seriously. We connect learners to best Tutors from around the UK.</p>
										<p>Tutors2Home provide professional, In-home and online tuition in Maths, English, Science, 11plus, GCSE for students aged 5(year one) to year (Year 14,15). Tutors2home is the disclosed partner with over 200 fully qualified and experienced teachers, across the UK. We aim to provide highest quality of service to families and to teachers, providing high quality home tuition and the very best outcomes for learners. </p>
									</div>
								</div>
							</div>
							<div class="col-md-6 area-footer-content">
								<div class="footer-widget  "  >
									<div class="footer-menu ul-li-block">
										<h2 class="widget-title">Useful Links</h2>
										<ul>
											<li><a href="#footer-area"><i class="fas fa-caret-right"></i>About Us</a></li>
											<li><a href="{{ route('find-tutors') }}"><i class="fas fa-caret-right"></i>Find A Tutor</a></li>
											<li><a href="{{ route('become-tutors') }}"><i class="fas fa-caret-right"></i>Become A Tutor</a></li>
											<!-- <li><a href="#"><i class="fas fa-caret-right"></i>Responsive Website</a></li>
											<li><a href="#"><i class="fas fa-caret-right"></i>Graphic Design</a></li>
											<li><a href="#"><i class="fas fa-caret-right"></i>Mobile Apps</a></li> -->
										</ul>
									</div>
								</div>
								<div class="footer-menu ul-li-block "  >
									<h2 class="widget-title">Account Info</h2>
									<ul>
										<li><a href="#"><i class="fas fa-caret-right"></i>Setting Account</a></li>
										<li><a href="{{ route('login') }}"><i class="fas fa-caret-right"></i>Login</a></li>
										<li><a href="{{ route('signup') }}"><i class="fas fa-caret-right"></i>Register</a></li>
										<!-- <li><a href="#"><i class="fas fa-caret-right"></i>Contact Us</a></li> -->
										<!-- <li><a href="#"><i class="fas fa-caret-right"></i>Graphic Design</a></li>
										<li><a href="#"><i class="fas fa-caret-right"></i>Mobile Apps</a></li>
										<li><a href="#"><i class="fas fa-caret-right"></i>Responsive Website</a></li> -->
									</ul>
								</div>
							</div>
							<div class="col-md-3 area-footer-content">
								<div class="footer-widget "  >
									<h2 class="widget-title">Photo Gallery</h2>
									<div class="photo-list ul-li">
										<ul>
											<li>
												<img src="{{asset('front/img/gallery/g-1.jpg')}}" alt="">
												<div class="blakish-overlay"></div>
												<div class="pop-up-icon">
													<a href="{{asset('front/img/gallery/g-1.jpg')}}" data-lightbox="roadtrip">
														<i class="fas fa-search"></i>
													</a>
												</div>
											</li>
											<li>
												<img src="{{asset('front/img/gallery/g-2.jpg')}}" alt="">
												<div class="blakish-overlay"></div>
												<div class="pop-up-icon">
													<a href="{{asset('front/img/gallery/g-2.jpg')}}" data-lightbox="roadtrip">
														<i class="fas fa-search"></i>
													</a>
												</div>
											</li>
											<li>
												<img src="{{asset('front/img/gallery/g-3.jpg')}}" alt="">
												<div class="blakish-overlay"></div>
												<div class="pop-up-icon">
													<a href="{{asset('front/img/gallery/g-3.jpg')}}" data-lightbox="roadtrip">	<i class="fas fa-search"></i></a>
												</div>
											</li>
											<li>
												<img src="{{asset('front/img/gallery/g-4.jpg')}}" alt="">
												<div class="blakish-overlay"></div>
												<div class="pop-up-icon">
													<a href="{{asset('front/img/gallery/g-4.jpg')}}" data-lightbox="roadtrip">	<i class="fas fa-search"></i></a>
												</div>
											</li>
											<li>
												<img src="{{asset('front/img/gallery/g-5.jpg')}}" alt="">
												<div class="blakish-overlay"></div>
												<div class="pop-up-icon">
													<a href="{{asset('front/img/gallery/g-5.jpg')}}" data-lightbox="roadtrip">	<i class="fas fa-search"></i></a>
												</div>
											</li>
											<li>
												<img src="{{asset('front/img/gallery/g-6.jpg')}}" alt="">
												<div class="blakish-overlay"></div>
												<div class="pop-up-icon">
													<a href="{{asset('front/img/gallery/g-6.jpg')}}" data-lightbox="roadtrip">	<i class="fas fa-search"></i></a>
												</div>

											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div> 
					<!-- /footer-widget-content -->
					<div class="footer-social-subscribe mb65 area-footer-content">
						<div class="row">
							<div class="col-md-3">
								<div class="footer-social ul-li "  >
									<h2 class="widget-title">Social Network</h2>
									<ul>
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-9">
								<div class="subscribe-form "  >
									<h2 class="widget-title">Subscribe Newsletter</h2>

									<div class="subs-form relative-position">
										<form action="#" method="post">
											<input class="course" name="course" type="email" placeholder="Email Address.">
											<div class="nws-button text-center  gradient-bg text-uppercase">
												<button type="submit" value="Submit">Subscribe now</button> 
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="copy-right-menu">
						<div class="row">
							<div class="col-md-6">
								<div class="copy-right-text">
									<p>© 2020 - Designed & Developed by Desenador</a>. All rights reserved</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="copy-right-menu-item float-right ul-li">
									<ul>
										<li><a href="#">License</a></li>
										<li><a href="#">Privacy & Policy</a></li>
										<li><a href="#">Term Of Service</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</footer>
	<!-- End of footer section
		============================================= -->

	 





		        <!-- For Js Library -->

        <script src="{{asset('front/js/jquery-2.1.4.min.js')}}"></script>
		<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('front/js/popper.min.js')}}"></script>
		<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('front/js/jarallax.js')}}"></script>
		<script src="{{asset('front/js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('front/js/lightbox.js')}}"></script>
		<script src="{{asset('front/js/jquery.meanmenu.js')}}"></script>
		<script src="{{asset('front/js/scrollreveal.min.js')}}"></script>
		<script src="{{asset('front/js/jquery.counterup.min.js')}}"></script>
		<script src="{{asset('front/js/waypoints.min.js')}}"></script>
		<script src="{{asset('front/js/jquery-ui.js')}}"></script>
		<script src="{{asset('front/js/gmap3.min.js')}}"></script>
		<script src="{{asset('front/js/switch.js')}}"></script>
		<script src="http://maps.google.com/maps/api/js?key=AIzaSyC61_QVqt9LAhwFdlQmsNwi5aUJy9B2SyA"></script>
		<script src="{{asset('front/js/script.js')}}"></script>
		
		@yield('scripts')
		<script>
            $(document).ready(function(){
             
         $("#session_hours").change(function() {
          var hour    = parseFloat($(this).val());
	      var  year_count=$('#total_amount_hidden').val()
	      var price = hour *  year_count;
			
		$('#total_amount').html(price);
        // var pc_count   = parseInt($('#noofpc').val());
        // var year_count = parseInt($('#noofyear').val());

        // var price = product * pc_count * year_count;

        // if (pc_count > 1 || year_count > 1) {
        //     price = price * 0.8;
        // }

        // $('#total_amount').html(price);
    });
});
                </script>


	</body>
	
	<!-- Theme -->
	</html>					


