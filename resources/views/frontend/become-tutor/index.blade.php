@extends('frontend.layouts.app')
@section('content')
	<section id="slide" class="slider-section">
			<div id="slider-item" class="slider-item-details">
				<div  class="slider-area slider-bg-1 relative-position">
					<div class="slider-text">
						<div class="section-title mb20 headline text-center ">
							<div class="layer-1-3 heading">
                                <span class="subtitle ">Become A Tutor Today</span>
								<h1>Online One-to-One Tuition for Students</h1>
                                <span class="subtitle ">Earn while Individuals learn!</span>
                                <div class="about-btn text-center">
                                    <div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
                                        <a href="{{ route('teacher-registration') }}">Sign Up</a>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
            </div>
            <div class="container mb-3" style="margin-top: -105px;">
                <div class="search_course_bg">
                    <div class="text-center">
                        <h2 class="text-white landing-h2-font">Become a tutor today with Tutors2Home</h2>
                        <div class="about-btn text-center">
                            <div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
                                <a href="{{route('teacher-registration')}}">Register Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Easy side -->
            <div class="Easyside  text-center pt-0" style="margin: 20px;">
                <div class="container">
                    <div class="row">
                        <div class="box col-sm-6 col-md-4 aos-init aos-animate" data-aos="fade-right">
                            <div class="bg">
                                <span class="number">1</span>
                                <h5>Talk Face-to-Face</h5>
                                <p>Connect with your students via video conference and use valuable aids like whiteboarding.</p>
                            </div>
                        </div>
                        <div class="box col-sm-6 col-md-4 aos-init aos-animate" data-aos="fade-right">
                            <div class="bg">
                                <span class="number">2</span>
                                <h5>Collaborate Effortlessly</h5>
                                <p>Students upload their study materials online for you to review and work on together.</p>
                            </div>
                        </div>
                        <div class="box col-sm-6 col-md-4 aos-init aos-animate" data-aos="fade-right">
                            <div class="bg">
                                <span class="number">3</span>
                                <h5>Rewatchable Lessons</h5>
                                <p>Lessons are recorded so you can refer to them as often as your student's revision requires.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Easy side -->

            <!-- Start Easy side -->
            <div class="Easyside text-center pt-0" style="margin: 20px;">
                <div class="container">
                    <div class="row">
                        <div class="box col-sm-6 col-md-4 aos-init aos-animate" data-aos="fade-right">
                            <div class="bg">
                                <span class="number">1</span>
                                <h5>Create an account and complete the application</h5>
                            </div>
                        </div>
                        <div class="box col-sm-6 col-md-4 aos-init aos-animate" data-aos="fade-right">
                            <div class="bg">
                                <span class="number">2</span>
                                <h5>Upload your certificates and other materials</h5>
                            </div>
                        </div>
                        <div class="box col-sm-6 col-md-4 aos-init aos-animate" data-aos="fade-right">
                            <div class="bg">
                                <span class="number">3</span>
                                <h5>Fill out your profile to begin tutoring and earning!</h5>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Easy side -->

            <!-- Start Join side -->
            <div class="Joinside text-center">
                <div class="overlay">
                    <div class="container">
                        <h2>Join us today!</h2>
                        <div class="row justify-content-center">
                            <div class="box col-sm-6 aos-init aos-animate" data-aos="fade-right">
                                <div class="bg white">
                                    <h6>BECOME A</h6>
                                    <img src="{{asset('front/img/logo/join-icn.png')}}" alt="">
                                    <h3>tutor</h3>
                                    <ul class="list text-left">
                                        <li><i class="fa fa-check" aria-hidden="true"></i>  Advertise for free to gain new students</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>  Freedom to set your own rate and timetable</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>  Get paid straight into your bank account</li>
                                    </ul>
                                    <a href="{{ route('teacher-registration') }}" class="btn btn-primary">Sign up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End Join side -->

            <!-- Start Custom side -->

            <div class="Customside  bg-white text-center pb-0" style="margin: 20px;">
                <div class="container">
                    <img src="{{asset('front/img/customised-img.png')}}"  class="customised-photo-size" alt="">
                </div>
            </div>

            <!-- End Custom side -->

            <!-- Start Budget side -->
            <div class="Budgetside inner text-center become-a-tutor">
                <!-- <div class="container">
                    <h2>How much can I make?</h2>
                    <p>TutorNinjas, we have 4 tiers of tutoring levels you can choose from. Just select your tier and confirm
                        it during the sign-up process or within your personal tutor account. Build up your ratings and
                        experience to reach new tiers, earn more and rank higher in search results.</p>
                    <div class="row equal-height">
                        <div class="box eq-h col-sm-6 col-md-4 col-lg aos-init aos-animate" data-aos="fade-right" style="min-height: 501px;">
                            <img src="{{asset('front/img/budget-img.png')}}" alt="">
                            <div class="bg">
                                <h4>White Belt</h4>
                                <span class="price">$17 -
                                    $27</span>
                                <p class="text-center">
                                    Our introductory tier for those with under 6 months of tutoring experience, still studying or postgraduate.                            </p>
                            </div>
                        </div>

                        <div class="box eq-h col-sm-6 col-md-4 col-lg aos-init aos-animate" data-aos="fade-right" style="min-height: 501px;">
                            <img src="{{asset('front/img/budget-img4.png')}}" alt="">
                            <div class="bg">
                                <h4>Yellow Belt</h4>
                                <span class="price">$28 -
                                    $33</span>
                                <p class="text-center">
                                    Our secondary tier for those with over 6 months of tutoring experience, still studying or postgraduate.                            </p>
                            </div>
                        </div>

                        <div class="box eq-h col-sm-6 col-md-4 col-lg aos-init aos-animate" data-aos="fade-right" style="min-height: 501px;">
                            <img src="{{asset('front/img/budget-img1.png')}}" alt="">
                            <div class="bg">
                                <h4>Orange Belt</h4>
                                <span class="price">$35 -
                                    $42</span>
                                <p class="text-center">
                                    Our third tier for those with 1-2 years of tutoring experience or those who are newly qualified professionals.                            </p>
                            </div>
                        </div>

                        <div class="box eq-h col-sm-6 col-md-4 col-lg aos-init aos-animate" data-aos="fade-right" style="min-height: 501px;">
                            <img src="{{asset('front/img/budget-img2.png')}}" alt="">
                            <div class="bg">
                                <h4>Purple Belt</h4>
                                <span class="price">$43 -
                                    $61</span>
                                <p class="text-center">
                                    Accomplished tutors with 3-4 years of tutoring experience or qualified professionals with 2-4 years of work experience.                            </p>
                            </div>
                        </div>

                        <div class="box eq-h col-sm-6 col-md-4 col-lg aos-init aos-animate" data-aos="fade-right" style="min-height: 501px;">
                            <img src="{{asset('front/img/budget-img3.png')}}" alt="">
                            <div class="bg">
                                <h4>Black Belt</h4>
                                <span class="price">$62 -
                                    $74</span>
                                <p class="text-center">
                                    Accomplished tutors with 5+ years of tutoring experience or qualified professionals with 4+ years of work experience.                            </p>
                            </div>
                        </div>

                    </div>
                </div> -->
            </div>
            <!-- End Budget side -->

            <div class="text-center mb-4 mb-md-5">
                <p class="font-weight-bold">Register today to become a tutor</p>
                <a href="{{ route('teacher-registration') }}" class=" text-center btn btn-primary font-weight-bold landing-btn">Sign up</a>
            </div>
            
            <!-- Video start -->
            <div class="text-center">
                <h2 style="color: #0b6096;">How we work</h2>
                <br>
                <video class="video-border" width="80%" height="400" controls="">
                    <source src="{{asset('front/videos/demo.mp4')}}" type="video/mp4">
                </video>
            </div>
            <!-- Video end -->

            <!-- Start Easy side -->
            <div class="Easyside  text-center" style="margin: 20px;">
                <div class="container">
                    <h2>Why tutor online? <small class="d-block">We help you find regular, flexible and reliable work by making
                            it easier than ever to secure online tutoring jobs.</small></h2>
                    <div class="row">
                        <div class="box col-sm-6 col-md-4 aos-init aos-animate" data-aos="fade-right">
                            <div class="bg">
                                <span class="number">1</span>
                                <h5>Great Pay</h5>
                                <p>Take home up to <b>$74</b> an hour without spending time or money on travel - sweet!
                                </p>
                            </div>
                        </div>
                        <div class="box col-sm-6 col-md-4 aos-init aos-animate" data-aos="fade-right">
                            <div class="bg">
                                <span class="number">2</span>
                                <h5>Flexible</h5>
                                <p>Choose your hours and where you tutor from - all you need is a computer!</p>
                            </div>
                        </div>
                        <div class="box col-sm-6 col-md-4 aos-init aos-animate" data-aos="fade-right">
                            <div class="bg">
                                <span class="number">3</span>
                                <h5>Rewarding</h5>
                                <p>Change the course of people's lives for real - and add experience to your CV!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <p class="font-weight-bold">Register today to become a tutor</p>
                <a href="{{ route('teacher-registration') }}" class="btn btn-primary font-weight-bold landing-btn" style="">Sign up</a>
            </div>
            <!-- End Easy side -->
            <br>

            <!-- Start Build side -->
            <!-- <div class="Buildside mb-0">
                <img src="{{asset('front/img/build-bg7.jpg')}}" alt="" class="w-100">
            </div> -->
            <!-- End Build side -->


            <!-- Start Build side -->
            <div class="Buildside inner build-6 space-inner opposite" style="margin: 20px;">
                <div class="container">
                    <div class="row text-left justify-content-end">
                        <div class="col-md-6 aos-init aos-animate" data-aos="fade-left">
                            <div class="bg"><br>
                                <h2>Make more cash and pay the bills</h2><br>
                                <p>Tutoring online is a popular profession plus an ideal way to make extra cash while studying.
                                    It pays better than most student jobs, sidesteps contractual complications and doesn't
                                    involve mopping up beer.</p>
                                <p>Plus, we pay directly to your bank account every two weeks. Cha-ching!</p>
                            </div>
                        </div>
                        <div class="col-md-6 build-side-photo-size d-block d-md-none">
                            <img src="{{asset('front/img/build-bg-30-05-2.jpg')}}" alt="" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Build side -->
            
            
            <!-- Start Build side -->
            <div class="Buildside build-3 inner" style="margin: 20px;">
                <div class="container">
                    <div class="row text-left">
                        <div class="col-md-6 build-side-photo-size-two d-block d-md-none">
                            <img src="{{asset('front/img/build-bg4.jpg')}}" alt="" class="w-100">
                        </div>
                        <div class="col-md-6 aos-init aos-animate" data-aos="fade-right">
                            <div class="bg">
                                <h2>It's flexible and saves you time</h2>
                                <p>Tutors2Home ensures your online tutoring suits your busy life. Your students can book
                                    sessions one at a time or in blocks for ultimate flexibility.</p>
                                <p>And with our comprehensive online platform, there's no need to travel! Whether on the sofa or
                                    the beach - we make it easy to connect and teach!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Build side -->
            
            
            <!-- Start Build side -->
            <div class="Buildside build-5 inner opposite" style="margin: 20px;">
                <div class="container">
                    <div class="row text-left justify-content-end">
                        <div class="col-md-6 aos-init" data-aos="fade-right">
                            <div class="bg">
                                <h2>We support you every step of the way</h2><br>
                                <p>We want you to be the most amazing tutor and do everything we can to ensure that. We
                                    find you the pupils so just sit back and do what you do best - teach!</p>
                                <p>Our learning space is designed to make your classes productive and impactful and we're here
                                    to help with any query you have.</p>
                            </div>
                        </div>
                        <div class="col-md-6 build-side-photo-size-three d-block d-md-none">
                            <img src="{{asset('front/img/build-bg-30-05-1.jpg')}}" alt="" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Build side -->
            
            
            <!-- Start Build side -->
            <div class="Buildside build-4 inner mb-4 mb-md-5" style="margin: 20px;">
                <div class="container">
                    <div class="row text-left">
                        <div class="col-md-6 build-side-photo-size-four d-block d-md-none">
                            <img src="{{asset('front/img/build-bg5.jpg')}}" alt="" class="w-100">
                        </div>
                        <div class="col-md-6 aos-init" data-aos="fade-left">
                            <div class="bg">
                                <br><br>
                                <h2>Awesome! How do I begin?</h2><br>
                                <p>It's super simple - just follow the three steps below to become our latest tutor!</p>
                                <br class="d-none d-md-block"><br> <br><br><br>
                                <br class="d-none d-md-block">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Build side -->

            <!-- Start Institute side -->
            <div class="Instituteside text-center">
                <div class="overlay">
                    <div class="container">
                        <h2 style="margin: 20px;">Only the best become tutor!</h2>
                        <p style="margin: 20px;">We've built a unique algorithm that reviews and scores every application by prospective tutors
                            - only those who score over 85% are accepted. That's 1 in every 8 applications! This is how we
                            ensure that tutors provides its students with only the very best online tutors. And because
                            many of our tutors are still students themselves, they are the best at communicating with our
                            students!</p>
                        <h4 style="margin: 20px;">Help change someone's prospects today and sign up to become a tutor. 
                            <!-- <span class="subtitle">(Tutor any of over 300 subjects that we offer)</span> -->
                        </h4>
                    </div>
                    <div class="subject">
                        <div class="container">
                            <ul>
                                <h4>Academics</h4>
                                <li class=""><a class="cursor-pointer bottom-subject-links" data-subject-id="330">English</a></li>
                                <li class=""><a class="cursor-pointer bottom-subject-links" data-subject-id="699">Maths</a></li>
                                <li class=""><a class="cursor-pointer bottom-subject-links" data-subject-id="551">Science</a></li>
                                <li class=""><a class="cursor-pointer bottom-subject-links" data-subject-id="517">GCSE</a></li>
                                <li class=""><a class="cursor-pointer bottom-subject-links" data-subject-id="597">SATS</a></li>
                                <!-- <li class=""><a class="cursor-pointer bottom-subject-links" data-subject-id="580">Chemistry</a></li>
                                <li class=""><a class="cursor-pointer bottom-subject-links" data-subject-id="642">History</a></li> -->
                            </ul>
                            <!-- <ul>
                                <h4 class="mt-3">Lifestyle</h4>
                                <li class=""><a class="cursor-pointer bottom-subject-links" data-subject-id="89">Cooking</a></li>
                                <li class=""><a class="cursor-pointer bottom-subject-links" data-subject-id="183">Coaching</a></li>
                                <li class=""><a class="cursor-pointer bottom-subject-links" data-subject-id="828">Song writing</a></li>
                            </ul> -->
                            <ul>
                                <h4 class="mt-3">Professional learning</h4>
                                <li class=""><a class="cursor-pointer bottom-subject-links" data-subject-id="230">Teacher Training</a></li>
                                <li class=""><a class="cursor-pointer bottom-subject-links" data-subject-id="620">Teacher Assistant</a></li>
                                <li class=""><a class="cursor-pointer bottom-subject-links" data-subject-id="265">Nursing</a></li>
                                <li class=""><a class="cursor-pointer bottom-subject-links" data-subject-id="549">Child Care</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Institute side -->

            <!-- Start Book side -->
            <div class="Easyside text-center" style="margin: 20px;">
                <div class="container">
                    <h2>Convenient earning and comfortable learning <br>
                    </h2>
                    <small >Online One-to-One tuition for students and tutors alike!</small>
                    <div class="text-center">
                        <p class="font-weight-bold">Register today to become a tutor</p>
                        <a href="{{ route('teacher-registration') }}" class="btn btn-primary font-weight-bold landing-btn" style="">Sign up</a>
                    </div>
                </div>
            </div>
            <!-- End Book side -->
            


        </section>

@endsection