@extends('frontend.layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Material Dashboard')])
@section('content')
<!-- Start of slider section
		============================================= -->
		<section id="slide" class="slider-section">
			<div id="slider-item" class="slider-item-details">
				<div  class="slider-area slider-bg-1 relative-position">
					<div class="slider-text">
						<div class="section-title mb20 headline text-center ">
							<div class="layer-1-1">
								<span class="subtitle text-uppercase">YOU WITH TUTORS</span>
							</div>
							<div class="layer-1-3">
								<h2><span>Connecting </span> Tutors  <br> and  <span>Students</span></h2>
							</div>
						</div>
						<div class="search-course mb30 relative-position">
							<form>
								<input class="course" name="course" type="text" placeholder="Type what do you want to learn today?">
								<div class="nws-button text-center  gradient-bg text-capitalize" >
									<a href="{{route('find-tutors')}}"><button type="button">Search Course</button> </a>
									</div>
								</form>
							</div>
							<div class="layer-1-4">
								<div class="slider-course-category ul-li text-center">
									<span class="float-left">BY CATEGORY:</span>
									<ul>
										<li>Graphics Design</li>
										<li>Web Design</li>
										<li>Mobile Application</li>
										<li>Enginering</li>
										<li>Science</li>
									</ul>
								</div>
							</div>
							
						</div>

					</div>
					<div class="slider-area slider-bg-2 relative-position">
						<div class="slider-text">
							<div class="section-title mb20 headline text-center ">
								<div class="layer-1-1">
									<span class="subtitle text-uppercase">EDUCATION & TRAINING ORGANIZATION</span>
								</div>
								<div class="layer-1-2">
									<h2 class="secoud-title"> Browse The <span>Best Courses.</span></h2>
								</div>
							</div>
							<div class="layer-1-3">
								<div class="search-course mb30 relative-position">
									<form action="#" method="post">
										<input class="course" name="course" type="text" placeholder="Type what do you want to learn today?">
										<div class="nws-button text-center  gradient-bg text-capitalize">
											<button type="submit" value="Submit">Search Course</button> 
										</div>
									</form>
								</div>
								<div class="layer-1-4">
									<div class="slider-course-category ul-li text-center">
										<span class="float-left">BY CATEGORY:</span>
										<ul>
											<li>Graphics Design</li>
											<li>Web Design</li>
											<li>Mobile Application</li>
											<li>Enginering</li>
											<li>Science</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="slider-area slider-bg-3 relative-position">
						<div class="slider-text">
							<div class="layer-1-2">
								<div class="coming-countdown ul-li">
									<ul>
										<li class="days">
											<span class="number"></span>
											<span class>Days</span>
										</li>

										<li class="hours">
											<span class="number"></span>
											<span class>Hours</span>
										</li>

										<li class="minutes">
											<span class="number"></span>
											<span class>Minutes</span>
										</li>

										<li class="seconds">
											<span class="number"></span>
											<span class>Seconds</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="section-title mb20 headline text-center ">
								<div class="layer-1-3">
									<h2 class="third-slide"> Mobile Application Experiences : <br> <span>Mobile App Design.</span></h2>
								</div>
							</div>
							<div class="layer-1-4">
								<div class="about-btn text-center">
									<div class="genius-btn text-center text-uppercase ul-li-block bold-font">
										<a href="#">About Us <i class="fas fa-caret-right"></i></a>
									</div>
									<div class="genius-btn text-center text-uppercase ul-li-block bold-font">
										<a href="#">contact us <i class="fas fa-caret-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="slider-area slider-bg-4 relative-position">
						<div class="slider-text">
							<div class="section-title mb20 headline text-center ">
								<span class="subtitle text-uppercase">EDUCATION & TRAINING ORGANIZATION</span>
								<h2 class=""  ><span>Inventive</span> Solution <br> for <span>Education</span></h2>
							</div>
						</div>
					</div>
				</div>
			</section>
	<!-- End of slider section
		============================================= -->



	<!-- Start of Search Courses
		============================================= -->
		<section id="search-course" class="search-course-section">
			<div class="container">
				<div class="section-title mb20 headline text-center "  >
					<span class="subtitle text-uppercase">LEARN NEW SKILLS</span>
					<h2><span>Search</span> For Tutors</h2>
				</div>
				<div class="search-course mb30 relative-position "  >
					<form >
						<input class="course" name="course" type="text" placeholder="Type what do you want to learn today?">
						<div class="nws-button text-center  gradient-bg text-capitalize">
							<a href="{{route('find-tutors')}}"><button type="button" >Search Tutors</button></a>
						</div>
					</form>
				</div>
				<div class="search-counter-up">
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<div class="counter-icon-number "  >
								<div class="counter-icon">
									<i class="text-gradiant flaticon-graduation-hat"></i>
								</div>
								<div class="counter-number">
									<span class="counter-count bold-font">5 </span><span>M+</span>
									<p>Students Enrolled</p>
								</div>
							</div>
						</div>
						<!-- /counter -->

						<div class="col-md-3 col-sm-6">
							<div class="counter-icon-number " >
								<div class="counter-icon">
									<i class="text-gradiant flaticon-book"></i>
								</div>
								<div class="counter-number">
									<span class="counter-count bold-font">122</span><span>.500+</span>
									<p>Online Available Courses</p>
								</div>
							</div>
						</div>
						<!-- /counter -->

						<div class="col-md-3 col-sm-6">
							<div class="counter-icon-number " >
								<div class="counter-icon">
									<i class="text-gradiant flaticon-favorites-button"></i>
								</div>
								<div class="counter-number">
									<span class="counter-count bold-font">15</span><span>.000+</span>
									<p>Premium Quality Products</p>
								</div>
							</div>
						</div>
						<!-- /counter -->

						<div class="col-md-3 col-sm-6">
							<div class="counter-icon-number " >
								<div class="counter-icon">
									<i class="text-gradiant flaticon-group"></i>
								</div>
								<div class="counter-number">
									<span class="counter-count bold-font">7</span><span>.500+</span>
									<p>Teachers Registered</p>
								</div>
							</div>
						</div>
						<!-- /counter -->
					</div>
				</div>
			</div>
		</section>
	<!-- End of Search Courses
		============================================= -->


	<!-- Start popular course
		============================================= -->
		<section id="popular-course" class="popular-course-section">
			<div class="container">
				<div class="section-title mb20 headline text-left "  >
					<span class="subtitle text-uppercase">LEARN NEW SKILLS</span>
					<h2><span>Popular</span> Courses.</h2>
				</div>
				<div id="course-slide-item" class="course-slide">
					<div class="course-item-pic-text " >
						<div class="course-pic relative-position mb25">
							<img src="{{asset('front/img/course/c-1.jpg')}}" alt="">
							<div class="course-price text-center gradient-bg">
								<span>$99.00</span>
							</div>
							<div class="course-details-btn">
								<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
						<div class="course-item-text">
							<div class="course-meta">
								<span class="course-category bold-font"><a href="#">Web Design</a></span>
								<span class="course-author bold-font"><a href="#">John Luis Fernandes</a></span>
								<div class="course-rate ul-li">
									<ul>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
									</ul>
								</div>
							</div>
							<div class="course-title mt10 headline pb45 relative-position">
								<h3><a href="#">Fully Responsive Web Design & Development.</a> <span class="trend-badge text-uppercase bold-font"><i class="fas fa-bolt"></i> TRENDING</span></h3>
							</div>
							<div class="course-viewer ul-li">
								<ul>
									<li><a href="#"><i class="fas fa-user"></i> 1.220</a></li>
									<li><a href="#"><i class="fas fa-comment-dots"></i> 1.015</a></li>
									<li><a href="#">125k Unrolled</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /item -->

					<div class="course-item-pic-text " >
						<div class="course-pic relative-position mb25">
							<img src="{{asset('front/img/course/c-2.jpg')}}" alt="">
							<div class="course-price text-center gradient-bg">
								<span>$99.00</span>
							</div>
							<div class="course-details-btn">
								<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
						<div class="course-item-text">
							<div class="course-meta">
								<span class="course-category bold-font"><a href="#">Mobile Apps</a></span>
								<span class="course-author bold-font"><a href="#">Fernando Torres</a></span>
								<div class="course-rate ul-li">
									<ul>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
									</ul>
								</div>
							</div>
							<div class="course-title mt10 headline pb45 relative-position">
								<h3><a href="#">Introduction to Mobile Application Development.</a></h3>
							</div>
							<div class="course-viewer ul-li">
								<ul>
									<li><a href="#"><i class="fas fa-user"></i> 1.220</a></li>
									<li><a href="#"><i class="fas fa-comment-dots"></i> 1.015</a></li>
									<li><a href="#">125k Unrolled</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /item -->

					<div class="course-item-pic-text " >
						<div class="course-pic relative-position mb25">
							<img src="{{asset('front/img/course/c-3.jpg')}}" alt="">
							<div class="course-price text-center gradient-bg">
								<span>$99.00</span>
							</div>
							<div class="course-details-btn">
								<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
						<div class="course-item-text">
							<div class="course-meta">
								<span class="course-category bold-font"><a href="#">Motion Graphic </a></span>
								<span class="course-author bold-font"><a href="#">enny Garcias</a></span>
								<div class="course-rate ul-li">
									<ul>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
									</ul>
								</div>
							</div>
							<div class="course-title mt10 headline pb45 relative-position">
								<h3><a href="#">Learning IOS Apps Programming & Development.</a></h3>
							</div>
							<div class="course-viewer ul-li">
								<ul>
									<li><a href="#"><i class="fas fa-user"></i> 1.220</a></li>
									<li><a href="#"><i class="fas fa-comment-dots"></i> 1.015</a></li>
									<li><a href="#">125k Unrolled</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /item -->

					<div class="course-item-pic-text">
						<div class="course-pic relative-position mb25">
							<img src="{{asset('front/img/course/c-2.jpg')}}" alt="">
							<div class="course-price text-center gradient-bg">
								<span>$99.00</span>
							</div>
							<div class="course-details-btn">
								<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
						<div class="course-item-text">
							<div class="course-meta">
								<span class="course-category bold-font"><a href="#">Web Design</a></span>
								<span class="course-author bold-font"><a href="#">John Luis Fernandes</a></span>
								<div class="course-rate ul-li">
									<ul>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
									</ul>
								</div>
							</div>
							<div class="course-title mt10 headline pb45 relative-position">
								<h3><a href="#">Fully Responsive Web Design & Development.</a> <span class="trend-badge text-uppercase bold-font"><i class="fas fa-bolt"></i> TRENDING</span></h3>
							</div>
							<div class="course-viewer ul-li">
								<ul>
									<li><a href="#"><i class="fas fa-user"></i> 1.220</a></li>
									<li><a href="#"><i class="fas fa-comment-dots"></i> 1.015</a></li>
									<li><a href="#">125k Unrolled</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /item -->

					<div class="course-item-pic-text">
						<div class="course-pic relative-position mb25">
							<img src="{{asset('front/img/course/c-3.jpg')}}" alt="">
							<div class="course-price text-center gradient-bg">
								<span>$99.00</span>
							</div>
							<div class="course-details-btn">
								<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
						<div class="course-item-text">
							<div class="course-meta">
								<span class="course-category bold-font"><a href="#">Web Design</a></span>
								<span class="course-author bold-font"><a href="#">John Luis Fernandes</a></span>
								<div class="course-rate ul-li">
									<ul>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
									</ul>
								</div>
							</div>
							<div class="course-title mt10 headline pb45 relative-position">
								<h3><a href="#">Fully Responsive Web Design & Development.</a> <span class="trend-badge text-uppercase bold-font"><i class="fas fa-bolt"></i> TRENDING</span></h3>
							</div>
							<div class="course-viewer ul-li">
								<ul>
									<li><a href="#"><i class="fas fa-user"></i> 1.220</a></li>
									<li><a href="#"><i class="fas fa-comment-dots"></i> 1.015</a></li>
									<li><a href="#">125k Unrolled</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /item -->

					<div class="course-item-pic-text">
						<div class="course-pic relative-position mb25">
							<img src="{{asset('front/img/course/c-1.jpg')}}" alt="">
							<div class="course-price text-center gradient-bg">
								<span>$99.00</span>
							</div>
							<div class="course-details-btn">
								<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
						<div class="course-item-text">
							<div class="course-meta">
								<span class="course-category bold-font"><a href="#">Web Design</a></span>
								<span class="course-author bold-font"><a href="#">John Luis Fernandes</a></span>
								<div class="course-rate ul-li">
									<ul>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
									</ul>
								</div>
							</div>
							<div class="course-title mt10 headline pb45 relative-position">
								<h3><a href="#">Fully Responsive Web Design & Development.</a> <span class="trend-badge text-uppercase bold-font"><i class="fas fa-bolt"></i> TRENDING</span></h3>
							</div>
							<div class="course-viewer ul-li">
								<ul>
									<li><a href="#"><i class="fas fa-user"></i> 1.220</a></li>
									<li><a href="#"><i class="fas fa-comment-dots"></i> 1.015</a></li>
									<li><a href="#">125k Unrolled</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /item -->
				</div>
			</div>
		</section>
	<!-- End popular course
		============================================= -->


	<!-- Start of about us section
		============================================= -->
		<section id="about-us" class="about-us-section">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="about-resigter-form backgroud-style relative-position">
							<div class="register-content">
								<div class="register-fomr-title text-center">
									<h3 class="bold-font"><span>Get a</span> Free Registration.</h3>
									<p>More Than 122K Online Available Courses</p>
								</div>
								<div class="register-form-area">
									<form class="contact_form" action="#" method="POST" enctype="multipart/form-data">
										<div class="contact-info">
											<input class="name" name="name" type="text" placeholder="Your Name.">
										</div>
										<div class="contact-info">
											<input class="nbm" name="nbm" type="number" placeholder="Your Number">
										</div>
										<div class="contact-info">
											<input class="email" name="email" type="email" placeholder="Email Address.">
										</div>
										<select>
											<option value="9" selected="">Select Course.</option>
											<option value="10">Web Design</option>
											<option value="11">Web Development</option>
											<option value="12">Php Core</option>
										</select>
										<div class="contact-info">
											<input type="text" id="datepicker" placeholder="Date.">
										</div>
										<textarea  placeholder="Message."></textarea>
										<div class="nws-button text-uppercase text-center white text-capitalize">
											<button type="submit" value="Submit">SUBMIT REQUEST </button> 
										</div> 
									</form>
								</div>
							</div>
						</div>
						<div class="bg-mockup">
							<img src="{{asset('front/img/about/phone.png')}}" alt="">
						</div>
					</div>
					<!-- /form -->

					<div class="col-md-7">
						<div class="about-us-text">
							<div class="section-title relative-position mb20 headline text-left "  >
								<span class="subtitle ml42 text-uppercase">SORT ABOUT US</span>
								<h2>We are <span>Tutors2home </span>
								work since 2010.</h2>
								<p>With the help of Tutors2home, you can find out the top class in-home and online tutors  for students and also work as tutor on part-time.</p>
							</div>
							<div class="section-title about-content-text">
								<h2><span>Quality and Assurance</span></h2>
								<p class=""  >We take 100% responsibility of the performance,qualification, commitment and behaviour of our tutors. And we are sure no one else can give such an assurance like this much audicityaudicity.We have have over thousands of parents and students as our happy and satisfied clients as we have been providing tutors in the UK for the past 10 years.</p>
								<div class="about-list mb65 ul-li-block "  >
									<ul>
										<li>Professional And Experienced Since 2010</li>
										<li>We Connect Students With The In-Home Tutors As Well As Online Tutors From Around The UK.</li>
										<li>Our Mission Increasing Global Access To Quality Education.</li>
										<li>Over 200 UK Qualified Tutors Available.</li>
									</ul>
								</div>
								<div class="about-btn "  >
									<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
										<a href="#">About Us <i class="fas fa-caret-right"></i></a>
									</div>
									<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
										<a href="#">contact us <i class="fas fa-caret-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of about us section
		============================================= -->


	<!-- Start of why choose us section
		============================================= -->
		<section id="why-choose-us" class="why-choose-us-section">
			<div class="jarallax  backgroud-style">
				<div class="container">
					<div class="section-title mb20 headline text-center "  >
						<span class="subtitle text-uppercase">Tutors2home Advantages</span>
						<h2>Reason <span>Why Choose Tutors2home.</span></h2>
					</div>
					<div id="service-slide-item" class="service-slide">
						<div class="service-text-icon "  >
							<div class="service-icon float-left">
								<i class="text-gradiant fas fa-shopping-bag"></i>
							</div>
							<div class="service-text">
								<h3 class="bold-font">Qualified Teachers</h3>
								<p>We are partner with more than 200 UK qualified teachers across the UK. Our teachers are also subject specialists, experienced, reliable and up-to-date with national curriculum, and the current requirements of exam boards.</p>
							</div>
						</div>
						<div class="service-text-icon "  >
							<div class="service-icon float-left">
								<i class="text-gradiant fas fa-home"></i>
							</div>
							<div class="service-text">
								<h3 class="bold-font">In-home or Online</h3>
								<p>All lessons are taught at home, or provided blended lessons on interactive whiteboard sessions,at your convenience. Our timings are Monday to Friday from 4 Pm to 8 Pm and on weekends from 10 Am to 4 Pm. You can sit it on lessons and have a clear sense of progress.</p>
							</div>
						</div>
						<div class="service-text-icon "  >
							<div class="service-icon float-left">
								<i class="text-gradiant fas fa-child"></i>
							</div>
							<div class="service-text">
								<h3 class="bold-font">Choose Your Tutor</h3>
								<p>It all begins with initial search browse your tutor in your area. First tell us what subjects you're interested in and if you want to learn online or in-home face-to-face.You can then select the tutor in your area and talk with the tutor, and interview before making any decision.Select your perfect tutor and book your first lesson.</p>
							</div>
						</div>
						<div class="service-text-icon "  >
							<div class="service-icon float-left">
								<i class="text-gradiant fas fa-clock"></i>
							</div>
							<div class="service-text">
								<h3 class="bold-font">Flexible Tuition</h3>
								<p>Our working hours are quite flexible. You can study at your convenience time in between 4 Pm to 8 Pm Monday to Friday and on weekends from 10 Am to 4 Pm.</p>
							</div>
						</div>
						<div class="service-text-icon">
							<div class="service-icon float-left">
								<i class="text-gradiant fas fa-newspaper"></i>
							</div>
							<div class="service-text">
								<h3 class="bold-font">Academic Benefits</h3>
								<p>In-home tuition should be a positive and enjoyable experience, for student and teacher. The aim is for each student to achieve their personal objectives, developing confidence, enthusiasm, skills and exam techniques.</p>
							</div>
						</div>
						<div class="service-text-icon">
							<div class="service-icon float-left">
								<i class="text-gradiant fas fa-mobile-alt"></i>
							</div>
							<div class="service-text">
								<h3 class="bold-font">Personal Services</h3>
								<p>You can talk to us in between 4Pm to 8Pm Monday to Friday we will answer your questions and give you good personal advice. Feel free to send us email to book appointment with the tutor and we will arrange the tutor in couple of days.</p>
							</div>
						</div>
					</div>
					<!-- /service-slide -->
					<div  class="testimonial-slide">
						<div class="section-title-2 mb65 headline text-left "  >
							<h2>Students <span>Testimonial.</span></h2>
						</div>

						<div id="testimonial-slide-item" class="testimonial-slide-area">
							<div class="student-qoute "  >
								<p>“This was our first time lorem ipsum and we <b> were very pleased with the whole experience</b>. Your price was lower than other companies. Our experience was good from start to finish, so we’ll be back in the future lorem ipsum diamet.”</p>
								<div class="student-name-designation">
									<span class="st-name bold-font">Robertho Garcia </span>
									<span class="st-designation">Graphic Designer</span>
								</div>
							</div>

							<div class="student-qoute "  >
								<p>“This was our first time lorem ipsum and we <b> were very pleased with the whole experience</b>. Your price was lower than other companies. Our experience was good from start to finish, so we’ll be back in the future lorem ipsum diamet.”</p>
								<div class="student-name-designation">
									<span class="st-name bold-font">Robertho Garcia </span>
									<span class="st-designation">Graphic Designer</span>
								</div>
							</div>

							<div class="student-qoute "  >
								<p>“This was our first time lorem ipsum and we <b> were very pleased with the whole experience</b>. Your price was lower than other companies. Our experience was good from start to finish, so we’ll be back in the future lorem ipsum diamet.”</p>
								<div class="student-name-designation">
									<span class="st-name bold-font">Robertho Garcia </span>
									<span class="st-designation">Graphic Designer</span>
								</div>
							</div>

							<div class="student-qoute">
								<p>“This was our first time lorem ipsum and we <b> were very pleased with the whole experience</b>. Your price was lower than other companies. Our experience was good from start to finish, so we’ll be back in the future lorem ipsum diamet.”</p>
								<div class="student-name-designation">
									<span class="st-name bold-font">Robertho Garcia </span>
									<span class="st-designation">Graphic Designer</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of why choose us section
		============================================= -->


	<!-- Start latest section
		============================================= -->
		<section id="latest-area" class="latest-area-section">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="latest-area-content  " >
							<div class="section-title-2 mb65 headline text-left">
								<h2>Latest <span>News.</span></h2>
							</div>
							<div class="latest-news-posts">
								<div class="latest-news-area">
									<div class="latest-news-thumbnile relative-position">
										<img src="{{asset('front/img/blog/lb-1.jpg')}}" alt="">
										<div class="hover-search">
											<i class="fas fa-search"></i>
										</div>
										<div class="blakish-overlay"></div>
									</div>
									<div class="date-meta">
										<i class="fas fa-calendar-alt"></i> 26 April 2018
									</div>
									<h3 class="latest-title bold-font"><a href="#">Affiliate Marketing A Beginner’s Guide.</a></h3>
									<div class="course-viewer ul-li">
										<ul>
											<li><a href="#"><i class="fas fa-user"></i> 1.220</a></li>
											<li><a href="#"><i class="fas fa-comment-dots"></i> 1.015</a></li>
										</ul>
									</div>
								</div>
								<!-- /post -->

								<div class="latest-news-posts">
									<div class="latest-news-area">
										<div class="latest-news-thumbnile relative-position">
											<img src="{{asset('front/img/blog/lb-2.jpg')}}" alt="">
											<div class="hover-search">
												<i class="fas fa-search"></i>
											</div>
											<div class="blakish-overlay"></div>
										</div>
										<div class="date-meta">
											<i class="fas fa-calendar-alt"></i> 26 April 2018
										</div>
										<h3 class="latest-title bold-font"><a href="#">No.1 The Best Online Course 2018.</a></h3>
										<div class="course-viewer ul-li">
											<ul>
												<li><a href="#"><i class="fas fa-user"></i> 1.220</a></li>
												<li><a href="#"><i class="fas fa-comment-dots"></i> 1.015</a></li>
											</ul>
										</div>
									</div>
									<!-- /post -->
								</div>

								<div class="view-all-btn bold-font">
									<a href="#">View All News <i class="fas fa-chevron-circle-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- /latest-news -->
					<div class="col-md-4">
						<div class="latest-area-content " >
							<div class="section-title-2 mb65 headline text-left">
								<h2>Upcoming <span>Events.</span></h2>
							</div>
							<div class="latest-events">
								<div class="latest-event-item">
									<div class="events-date  relative-position text-center">
										<div class="gradient-bdr"></div>
										<span class="event-date bold-font">22</span>
										April 2018
									</div>
									<div class="event-text">
										<h3 class="latest-title bold-font"><a href="#">Fully Responsive Web Design & Development.</a></h3>
										<div class="course-meta">
											<span class="course-category"><a href="#">Web Design</a></span>
											<span class="course-author"><a href="#">Koke</a></span>
										</div>
									</div>
								</div>
							</div>

							<div class="latest-events">
								<div class="latest-event-item">
									<div class="events-date  relative-position text-center">
										<div class="gradient-bdr"></div>
										<span class="event-date bold-font">07</span>
										August 2018
									</div>
									<div class="event-text">
										<h3 class="latest-title bold-font"><a href="#">Introduction to Mobile Application Development.</a></h3>
										<div class="course-meta">
											<span class="course-category"><a href="#">Web Design</a></span>
											<span class="course-author"><a href="#">Koke</a></span>
										</div>
									</div>
								</div>
							</div>

							<div class="latest-events">
								<div class="latest-event-item">
									<div class="events-date  relative-position text-center">
										<div class="gradient-bdr"></div>
										<span class="event-date bold-font">30</span>
										Sept 2018
									</div>
									<div class="event-text">
										<h3 class="latest-title bold-font"><a href="#">IOS Apps Programming & Development.</a></h3>
										<div class="course-meta">
											<span class="course-category"><a href="#">Web Design</a></span>
											<span class="course-author"><a href="#">Koke</a></span>
										</div>
									</div>
								</div>
							</div>

							<div class="view-all-btn bold-font">
								<a  href="#">Check Calendar   <i class="fas fa-calendar-alt"></i></a>
							</div>
						</div>
					</div>
					<!-- /events -->

					<div class="col-md-4">
						<div class="latest-area-content " >
							<div class="section-title-2 mb65 headline text-left">
								<h2>Latest <span>Video.</span></h2>
							</div>
							<div class="latest-video-poster relative-position mb20">
								<img src="{{asset('front/img/banner/v-1.jpg')}}" alt="">
								<div class="video-play-btn text-center gradient-bg">
									<a class="popup-with-zoom-anim" href="https://www.youtube.com/watch?v=-g4TnixUdSc"><i class="fas fa-play"></i></a>
								</div>
							</div>
							<div class="vidoe-text">
								<h3 class="latest-title bold-font"><a href="#">Learning IOS Apps in Amsterdam.</a></h3>
								<p class="mb25">Lorem ipsum dolor sit amet, consectetuer delacosta adipiscing elit, sed diam nonummy.</p>
							</div>
							<div class="view-all-btn bold-font">
								<a href="#">View All Videos <i class="fas fa-chevron-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /. -->
				</div>
			</div>
		</section>
	<!-- End latest section
		============================================= -->


	<!-- Start of sponsor section
		============================================= -->
		<section id="sponsor" class="sponsor-section">
			<div class="container">
				<div class="section-title-2 mb65 headline text-left "  >
					<h2>Genius <span>Sponsors.</span></h2>
				</div>
				<div class="sponsor-item sponsor-1 " >
					<div class="sponsor-pic text-center">
						<img src="{{asset('front/img/sponsor/s-1.jpg')}}" alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="{{asset('front/img/sponsor/s-2.jpg')}}" alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="{{asset('front/img/sponsor/s-3.jpg')}}" alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="{{asset('front/img/sponsor/s-4.jpg')}}" alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="{{asset('front/img/sponsor/s-5.jpg')}}" alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="{{asset('front/img/sponsor/s-6.jpg')}}" alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="{{asset('front/img/sponsor/s-6.jpg')}}" alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="{{asset('front/img/sponsor/s-6.jpg')}}" alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="{{asset('front/img/sponsor/s-6.jpg')}}" alt="">
					</div>
				</div>
			</div>
		</section>
	<!-- End of sponsor section
		============================================= -->


	<!-- Start of best course
		============================================= -->
		<section id="best-course" class="best-course-section">
			<div class="container">
				<div class="section-title mb45 headline text-center "  >
					<span class="subtitle text-uppercase">SEARCH OUR COURSES</span>
					<h2>Browse Our<span> Best Course.</span></h2>
				</div>
				<div class="best-course-area mb45">
					<div class="row">
						<div class="col-md-3">
							<div class="best-course-pic-text relative-position "  >
								<div class="best-course-pic relative-position">
									<img src="{{asset('front/img/course/bc-1.jpg')}}" alt="">
									<div class="trend-badge-2 text-center text-uppercase">
										<i class="fas fa-bolt"></i>
										<span>Trending</span>
									</div>
									<div class="course-price text-center gradient-bg">
										<span>$99.00</span>
									</div>
									<div class="course-rate ul-li">
										<ul>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
									<div class="course-details-btn">
										<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
									</div>
									<div class="blakish-overlay"></div>
								</div>
								<div class="best-course-text">
									<div class="course-title mb20 headline relative-position">
										<h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
									</div>
									<div class="course-meta">
										<span class="course-category"><a href="#">Web Design</a></span>
										<span class="course-author"><a href="#">250 Students</a></span>
									</div>
								</div>
							</div>
						</div>
						<!-- /course -->

						<div class="col-md-3">
							<div class="best-course-pic-text relative-position "  >
								<div class="best-course-pic relative-position">
									<img src="{{asset('front/img/course/bc-2.jpg')}}" alt="">
									<div class="course-price text-center gradient-bg">
										<span>$99.00</span>
									</div>
									<div class="course-rate ul-li">
										<ul>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
									<div class="course-details-btn">
										<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
									</div>
									<div class="blakish-overlay"></div>
								</div>
								<div class="best-course-text">
									<div class="course-title mb20 headline relative-position">
										<h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
									</div>
									<div class="course-meta">
										<span class="course-category"><a href="#">Web Design</a></span>
										<span class="course-author"><a href="#">250 Students</a></span>
									</div>
								</div>
							</div>
						</div>
						<!-- /course -->

						<div class="col-md-3">
							<div class="best-course-pic-text relative-position "  >
								<div class="best-course-pic relative-position">
									<img src="{{asset('front/img/course/bc-3.jpg')}}" alt="">
									<div class="course-price text-center gradient-bg">
										<span>$99.00</span>
									</div>
									<div class="course-rate ul-li">
										<ul>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
									<div class="course-details-btn">
										<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
									</div>
									<div class="blakish-overlay"></div>
								</div>
								<div class="best-course-text">
									<div class="course-title mb20 headline relative-position">
										<h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
									</div>
									<div class="course-meta">
										<span class="course-category"><a href="#">Web Design</a></span>
										<span class="course-author"><a href="#">250 Students</a></span>
									</div>
								</div>
							</div>
						</div>
						<!-- /course -->

						<div class="col-md-3">
							<div class="best-course-pic-text relative-position "  >
								<div class="best-course-pic relative-position">
									<img src="{{asset('front/img/course/bc-4.jpg')}}" alt="">
									<div class="course-price text-center gradient-bg">
										<span>$99.00</span>
									</div>
									<div class="course-rate ul-li">
										<ul>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
									<div class="course-details-btn">
										<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
									</div>
									<div class="blakish-overlay"></div>
								</div>
								<div class="best-course-text">
									<div class="course-title mb20 headline relative-position">
										<h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
									</div>
									<div class="course-meta">
										<span class="course-category"><a href="#">Web Design</a></span>
										<span class="course-author"><a href="#">250 Students</a></span>
									</div>
								</div>
							</div>
						</div>
						<!-- /course -->

						<div class="col-md-3">
							<div class="best-course-pic-text relative-position "  >
								<div class="best-course-pic relative-position">
									<img src="{{asset('front/img/course/bc-5.jpg')}}" alt="">
									<div class="course-price text-center gradient-bg">
										<span>$99.00</span>
									</div>
									<div class="course-rate ul-li">
										<ul>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
									<div class="course-details-btn">
										<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
									</div>
									<div class="blakish-overlay"></div>
								</div>
								<div class="best-course-text">
									<div class="course-title mb20 headline relative-position">
										<h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
									</div>
									<div class="course-meta">
										<span class="course-category"><a href="#">Web Design</a></span>
										<span class="course-author"><a href="#">250 Students</a></span>
									</div>
								</div>
							</div>
						</div>
						<!-- /course -->

						<div class="col-md-3">
							<div class="best-course-pic-text relative-position "  >
								<div class="best-course-pic relative-position">
									<img src="{{asset('front/img/course/bc-6.jpg')}}" alt="">
									<div class="trend-badge-2 text-center text-uppercase">
										<i class="fas fa-bolt"></i>
										<span>Trending</span>
									</div>
									<div class="course-price text-center gradient-bg">
										<span>$99.00</span>
									</div>
									<div class="course-rate ul-li">
										<ul>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
									<div class="course-details-btn">
										<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
									</div>
									<div class="blakish-overlay"></div>
								</div>
								<div class="best-course-text">
									<div class="course-title mb20 headline relative-position">
										<h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
									</div>
									<div class="course-meta">
										<span class="course-category"><a href="#">Web Design</a></span>
										<span class="course-author"><a href="#">250 Students</a></span>
									</div>
								</div>
							</div>
						</div>
						<!-- /course -->

						<div class="col-md-3">
							<div class="best-course-pic-text relative-position "  >
								<div class="best-course-pic relative-position">
									<img src="{{asset('front/img/course/bc-7.jpg')}}" alt="">
									<div class="course-price text-center gradient-bg">
										<span>$99.00</span>
									</div>
									<div class="course-rate ul-li">
										<ul>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
									<div class="course-details-btn">
										<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
									</div>
									<div class="blakish-overlay"></div>
								</div>
								<div class="best-course-text">
									<div class="course-title mb20 headline relative-position">
										<h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
									</div>
									<div class="course-meta">
										<span class="course-category"><a href="#">Web Design</a></span>
										<span class="course-author"><a href="#">250 Students</a></span>
									</div>
								</div>
							</div>
						</div>
						<!-- /course -->

						<div class="col-md-3">
							<div class="best-course-pic-text relative-position "  >
								<div class="best-course-pic relative-position">
									<img src="{{asset('front/img/course/bc-8.jpg')}}" alt="">
									<div class="course-price text-center gradient-bg">
										<span>$99.00</span>
									</div>
									<div class="course-rate ul-li">
										<ul>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
									<div class="course-details-btn">
										<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
									</div>
									<div class="blakish-overlay"></div>
								</div>
								<div class="best-course-text">
									<div class="course-title mb20 headline relative-position">
										<h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
									</div>
									<div class="course-meta">
										<span class="course-category"><a href="#">Web Design</a></span>
										<span class="course-author"><a href="#">250 Students</a></span>
									</div>
								</div>
							</div>
						</div>
						<!-- /course -->
					</div>
				</div>

				
			</div>
		</section>
	<!-- End of best course
		============================================= -->

	<!-- Start of course teacher
		============================================= -->
		<section id="course-teacher" class="course-teacher-section">
			<div class="jarallax">
				<div class="container">
					<div class="section-title mb20 headline text-center "  >
						<span class="subtitle text-uppercase">OUR PROFESSIONAL</span>
						<h2>Genius Courses <span>Teachers.</span></h2>
					</div>

					<div class="teacher-list">
						<div class="row justify-content-center">
							<div class="col-md-3">
								<div class="teacher-img-content "  >
									<div class="teacher-cntent">
										<div class="teacher-social-name ul-li-block">
											<ul>
												<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
											</ul>
											<div class="teacher-name">
												<span>Daniel
												Alvares</span>
											</div>
										</div>
										<div class="teacher-img-category">
											<div class="teacher-img">
												<img src="{{asset('front/img/teacher/t-1.jpg')}}" alt="">
												<div class="course-price text-uppercase text-center gradient-bg">
													<span>Featured</span>
												</div>
											</div>
											<div class="teacher-category float-right">
												<span class="st-name">Mobile Apps </span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /teacher -->
							<div class="col-md-3">
								<div class="teacher-img-content "  >
									<div class="teacher-cntent">
										<div class="teacher-social-name ul-li-block">
											<ul>
												<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
											</ul>
											<div class="teacher-name">
												<span>Juliana Hernandes</span>
											</div>
										</div>
										<div class="teacher-img-category">
											<div class="teacher-img">
												<img src="{{asset('front/img/teacher/t-2.jpg')}}" alt="">
												<div class="course-price text-uppercase text-center gradient-bg">
													<span>Featured</span>
												</div>
											</div>
											<div class="teacher-category float-right">
												<span class="st-name">Mobile Apps </span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /teacher -->
							<div class="col-md-3">
								<div class="teacher-img-content "  >
									<div class="teacher-cntent">
										<div class="teacher-social-name ul-li-block">
											<ul>
												<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
											</ul>
											<div class="teacher-name">
												<span>Berliana
												Luis</span>
											</div>
										</div>
										<div class="teacher-img-category">
											<div class="teacher-img">
												<img src="{{asset('front/img/teacher/t-3.jpg')}}" alt="">
												<div class="course-price text-uppercase text-center gradient-bg">
													<span>Featured</span>
												</div>
											</div>
											<div class="teacher-category float-right">
												<span class="st-name">IOS Apps </span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /teacher -->
							<div class="col-md-3">
								<div class="teacher-img-content "  >
									<div class="teacher-cntent">
										<div class="teacher-social-name ul-li-block">
											<ul>
												<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
											</ul>
											<div class="teacher-name">
												<span>Johansen
												Doe</span>
											</div>
										</div>
										<div class="teacher-img-category">
											<div class="teacher-img">
												<img src="{{asset('front/img/teacher/t-4.jpg')}}" alt="">
												<div class="course-price text-uppercase text-center gradient-bg">
													<span>Featured</span>
												</div>
											</div>
											<div class="teacher-category float-right">
												<span class="st-name">Graphic </span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /teacher -->
							<div class="col-md-3">
								<div class="teacher-img-content "  >
									<div class="teacher-cntent">
										<div class="teacher-social-name ul-li-block">
											<ul>
												<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
											</ul>
											<div class="teacher-name">
												<span>Lisha
												Chambelt</span>
											</div>
										</div>
										<div class="teacher-img-category">
											<div class="teacher-img">
												<img src="{{asset('front/img/teacher/t-6.jpg')}}" alt="">
												<div class="course-price text-uppercase text-center gradient-bg">
													<span>Featured</span>
												</div>
											</div>
											<div class="teacher-category float-right">
												<span class="st-name">Mobile Apps </span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /teacher -->
							<div class="col-md-3">
								<div class="teacher-img-content "  >
									<div class="teacher-cntent">
										<div class="teacher-social-name ul-li-block">
											<ul>
												<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
											</ul>
											<div class="teacher-name">
												<span>Checilia
												Yeoung</span>
											</div>
										</div>
										<div class="teacher-img-category">
											<div class="teacher-img">
												<img src="{{asset('front/img/teacher/t-5.jpg')}}" alt="">
												<div class="course-price text-uppercase text-center gradient-bg">
													<span>Featured</span>
												</div>
											</div>
											<div class="teacher-category float-right">
												<span class="st-name">Mobile Apps </span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /teacher -->
							<div class="col-md-3">
								<div class="teacher-img-content "  >
									<div class="teacher-cntent">
										<div class="teacher-social-name ul-li-block">
											<ul>
												<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
											</ul>
											<div class="teacher-name">
												<span>Sean
												Fernandes</span>
											</div>
										</div>
										<div class="teacher-img-category">
											<div class="teacher-img">
												<img src="{{asset('front/img/teacher/t-7.jpg')}}" alt="">
												<div class="course-price text-uppercase text-center gradient-bg">
													<span>Featured</span>
												</div>
											</div>
											<div class="teacher-category float-right">
												<span class="st-name">Mobile Apps </span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /teacher -->
						</div>

						<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font "  >
							<a href="#">All teacher <i class="fas fa-caret-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of course teacher
		============================================= -->



	<!-- Start of best product section
		============================================= -->
		<section id="best-product" class="best-product-section">
			<div class="container">
				<div class="section-title-2 mb65 headline text-left "  >
					<h2>Genius <span>Best Products.</span></h2>
				</div>
				<div id="best-product-slide-item" class="best-product-slide">
					<div class="product-img-text "  >
						<div class="product-img text-center mb20">
							<img src="{{asset('front/img/product/bp-1.png')}}" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>

					<div class="product-img-text "  >
						<div class="product-img text-center mb20">
							<img src="{{asset('front/img/product/bp-2.png')}}" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>
					<div class="product-img-text "  >
						<div class="product-img text-center mb20">
							<img src="{{asset('front/img/product/bp-3.png')}}" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>
					<div class="product-img-text "  >
						<div class="product-img text-center mb20">
							<img src="{{asset('front/img/product/bp-4.png')}}" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>
					<div class="product-img-text "  >
						<div class="product-img text-center mb20">
							<img src="{{asset('front/img/product/bp-1.png')}}" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>
					<div class="product-img-text">
						<div class="product-img text-center mb20">
							<img src="{{asset('front/img/product/bp-2.png')}}" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>
					<div class="product-img-text">
						<div class="product-img text-center mb20">
							<img src="{{asset('front/img/product/bp-3.png')}}" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End  of best product section
		============================================= -->
		

	<!-- Start FAQ section
		============================================= -->
		<section id="faq" class="faq-section">
			<div class="container">
				<div class="section-title mb45 headline text-center "  >
					<span class="subtitle text-uppercase">Tutors2home FAQ</span>
					<h2>Frequently<span> Ask & Questions</span></h2>
				</div>
				<div class="faq-tab">
					<div class="faq-tab-ques ul-li">
						<div class="tab-button text-center mb65 "  >
							<ul class="product-tab">
								<li class="active" rel="tab1">GENERAL </li>
								<li rel="tab2"> COURSES </li>
								<li rel="tab3"> TEACHERS </li>
								<li rel="tab4">  EVENTS  </li>
								<li rel="tab5">  OTHERS  </li>
							</ul>
						</div>
						<!-- /tab-head -->

						<!-- tab content -->
						<div class="tab-container">

							<!-- 1st tab -->
							<div id="tab1" class="tab-content-1 pt35">
								<div class="row">
									<div class="col-md-6">
										<div class="ques-ans mb45 headline "  >
											<h3> What is Genius Courses?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>

										<div class="ques-ans mb45 headline "  >
											<h3> What Lorem Ipsum Dolor Sit Amet Consectuerer?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>
									</div>

									<div class="col-md-6">
										<div class="ques-ans mb45 headline "  >
											<h3> How to Register or Make An Account in Genius?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>

										<div class="ques-ans mb45 headline "  >
											<h3> Adipiscing Diamet Nonnumy Nibh Euismod?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>
									</div>
								</div>
							</div>
							<!-- #tab1 -->

							<div id="tab2" class="tab-content-1 pt35">
								<div class="row">
									<div class="col-md-6">
										<div class="ques-ans mb45 headline "  >
											<h3> What is Genius Courses?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>

										<div class="ques-ans mb45 headline "  >
											<h3> What Lorem Ipsum Dolor Sit Amet Consectuerer?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>
									</div>

									<div class="col-md-6">
										<div class="ques-ans mb45 headline "  >
											<h3> How to Register or Make An Account in Genius?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>

										<div class="ques-ans mb45 headline "  >
											<h3> Adipiscing Diamet Nonnumy Nibh Euismod?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>
									</div>
								</div>
							</div>
							<!-- #tab2 -->

							<div id="tab3" class="tab-content-1 pt35">
								<div class="row">
									<div class="col-md-6">
										<div class="ques-ans mb45 headline">
											<h3> What is Genius Courses?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>

										<div class="ques-ans mb45 headline">
											<h3> What Lorem Ipsum Dolor Sit Amet Consectuerer?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>
									</div>

									<div class="col-md-6">
										<div class="ques-ans mb45 headline">
											<h3> How to Register or Make An Account in Genius?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>

										<div class="ques-ans mb45 headline">
											<h3> Adipiscing Diamet Nonnumy Nibh Euismod?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>
									</div>
								</div>
							</div>
							<!-- #tab3 -->

							<div id="tab4" class="tab-content-1 pt35">
								<div class="row">
									<div class="col-md-6">
										<div class="ques-ans mb45 headline">
											<h3> What is Genius Courses?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>

										<div class="ques-ans mb45 headline">
											<h3> What Lorem Ipsum Dolor Sit Amet Consectuerer?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>
									</div>

									<div class="col-md-6">
										<div class="ques-ans mb45 headline">
											<h3> How to Register or Make An Account in Genius?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>

										<div class="ques-ans mb45 headline">
											<h3> Adipiscing Diamet Nonnumy Nibh Euismod?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>
									</div>
								</div>
							</div>
							<!-- #tab3 -->

							<div id="tab5" class="tab-content-1 pt35">
								<div class="row">
									<div class="col-md-6">
										<div class="ques-ans mb45 headline">
											<h3> What is Genius Courses?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>

										<div class="ques-ans mb45 headline">
											<h3> What Lorem Ipsum Dolor Sit Amet Consectuerer?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>
									</div>

									<div class="col-md-6">
										<div class="ques-ans mb45 headline">
											<h3> How to Register or Make An Account in Genius?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>

										<div class="ques-ans mb45 headline">
											<h3> Adipiscing Diamet Nonnumy Nibh Euismod?</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
										</div>
									</div>
								</div>
							</div>
							<!-- #tab3 -->
						</div>
						<div class="view-all-btn bold-font "  >
							<a href="#">Make a Question <i class="fas fa-chevron-circle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End FAQ section
		============================================= -->


	<!-- Start Course category
		============================================= -->
		<section id="course-category" class="course-category-section">
			<div class="container">
				<div class="section-title mb45 headline text-center "  >
					<span class="subtitle text-uppercase">COURSES CATEGORIES</span>
					<h2>Browse Courses<span> By Category.</span></h2>
				</div>
				<div class="category-item">
					<div class="row">
						<div class="col-md-3">
							<div class="category-icon-title text-center "  >
								<div class="category-icon">
									<i class="text-gradiant flaticon-technology"></i>
								</div>
								<div class="category-title">
									<h4>Responsive Website</h4>
								</div>
							</div>
						</div>
						<!-- /category -->

						<div class="col-md-3">
							<div class="category-icon-title text-center "  >
								<div class="category-icon">
									<i class="text-gradiant flaticon-app-store"></i>
								</div>
								<div class="category-title">
									<h4>IOS Applications</h4>
								</div>
							</div>
						</div>
						<!-- /category -->

						<div class="col-md-3">
							<div class="category-icon-title text-center "  >
								<div class="category-icon">
									<i class="text-gradiant flaticon-artist-tools"></i>
								</div>
								<div class="category-title">
									<h4>Graphic Design</h4>
								</div>
							</div>
						</div>
						<!-- /category -->

						<div class="col-md-3">
							<div class="category-icon-title text-center "  >
								<div class="category-icon">
									<i class="text-gradiant flaticon-business"></i>
								</div>
								<div class="category-title">
									<h4>Marketing</h4>
								</div>
							</div>
						</div>
						<!-- /category -->

						<div class="col-md-3">
							<div class="category-icon-title text-center "  >
								<div class="category-icon">
									<i class="text-gradiant flaticon-dna"></i>
								</div>
								<div class="category-title">
									<h4>Science</h4>
								</div>
							</div>
						</div>
						<!-- /category -->

						<div class="col-md-3">
							<div class="category-icon-title text-center "  >
								<div class="category-icon">
									<i class="text-gradiant flaticon-cogwheel"></i>
								</div>
								<div class="category-title">
									<h4>Enginering</h4>
								</div>
							</div>
						</div>
						<!-- /category -->

						<div class="col-md-3">
							<div class="category-icon-title text-center "  >
								<div class="category-icon">
									<i class="text-gradiant flaticon-technology-1"></i>
								</div>
								<div class="category-title">
									<h4>Photography</h4>
								</div>
							</div>
						</div>
						<!-- /category -->

						<div class="col-md-3">
							<div class="category-icon-title text-center "  >
								<div class="category-icon">
									<i class="text-gradiant flaticon-technology-2"></i>
								</div>
								<div class="category-title">
									<h4>Mobile Application</h4>
								</div>
							</div>
						</div>
						<!-- /category -->
					</div>
				</div>
			</div>
		</section>
	<!-- End Course category
		============================================= -->



@endsection