@extends('frontend.layouts.app')
@section('content')
	<!-- Start of slider section
		============================================= -->
		<section id="slide" class="slider-section">
			<div id="slider-item" class="slider-item-details">
				<div  class="slider-area slider-bg-1 relative-position">
					<div class="slider-text">
						<div class="section-title mb20 headline text-center ">
							<div class="layer-1-3">
								<h2><span>Find </span> Your  <br> Perfect  <span>Tutor</span></h2>
							</div>
						</div>
					</div>
				</div>
            </div>
            <div class="container mb-3">
                <div class="search_course_bg">
                    <div class="row">
                        <div class="form-group col-lg-4 col-md-4 col-sm-6 ">
                            <select name="country" id="country" class="custom-select ">
                                <option value="" data-select2-id="8">Country</option>
                            </select>
                        </div>
            
                        <div class="form-group col-lg-4 col-md-4 col-sm-6 ">
                            <select name="examination_board" id="examination_board" class="custom-select ">
                                <option value="" data-select2-id="8">Examination Board</option>
                            </select>
                        </div>
                    
                        <div class="form-group col-lg-4 col-md-4 col-sm-6 ">
                            <select name="subject" id="subject" class="custom-select ">
                                <option value="" data-select2-id="8">Subject</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-4 col-md-4 col-sm-6 ">
                            <select name="level" id="level" class="custom-select ">
                                <option value="" data-select2-id="8">Level</option>
                            </select>
                        </div>
            
                        <div class="form-group col-lg-4 col-md-4 col-sm-6 ">
                            <select name="price" id="price" class="custom-select ">
                                <option value="" data-select2-id="8">Price</option>
                            </select>
                        </div>
                    
                        <div class="form-group col-lg-4 col-md-4 col-sm-6 ">
                            <select name="availability" id="availability" class="custom-select ">
                                <option value="" data-select2-id="8">Availability</option>
                            </select>
                        </div>
                        <div class="form-group col-12 mb-0">
                            <div class="genius-btn float-right gradient-bg text-center text-uppercase ul-li-block bold-font">
                                <a href="#">Find Now <i class="fas fa-caret-right"></i></a>
                            </div>
                            <div class="about-btn">
                                <div class="genius-btn float-right gradient-bg text-center text-uppercase ul-li-block bold-font">
                                    <a href="#">Reset  <i class="fas fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class=" col-lg-3 col-md-4">
                        <div id="sidebar">
                            <div class="sidebar__inner">
                                <div class="bg">
                                    <h4>Related subjects</h4>
                                    <ul id="related_subjacts">
                                        <li>ESOL (English)</li>
                                        <li>Written Comprehension - English</li>
                                        <li>Written Expression - English</li>
                                        <li>Anatomy</li>
                                        <li>Biology</li>
                                        <li>ESOL (English)</li>
                                        <li>Written Comprehension - English</li>
                                        <li>Written Expression - English</li>
                                        <li>Anatomy</li>
                                        <li>Biology</li>
                                        <li>ESOL (English)</li>
                                        <li>Written Comprehension - English</li>
                                        <li>Written Expression - English</li>
                                        <li>Anatomy</li>
                                        <li>Biology</li>
                                        <li>ESOL (English)</li>
                                        <li>Written Comprehension - English</li>
                                        <li>Written Expression - English</li>
                                        <li>Anatomy</li>
                                        <li>Biology</li>
                                        <li>ESOL (English)</li>
                                        <li>Written Comprehension - English</li>
                                        <li>Written Expression - English</li>
                                        <li>Anatomy</li>
                                        <li>Biology</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-9 col-md-8">
                        <div id="dynamic-content">
                          @if(count($teachers))  
                           @foreach($teachers as $key => $teacher) 
                            <div class="item @if($key>0) mt-5 @endif">
                                <div class="row no-gutters">
                                    <div class="img col-lg-4">
                                        <img class="premium-badge-find-a-ninja-badge" src="{{asset('front/img/premium-badeg.png')}}">
                                        <img class="premium-badge-find-a-ninja" src="{{asset('front/img/icon_offre-pro1.png')}}">
    
                                        <img src="{{asset('front/img/teacher/mt-1.jpg')}}" alt="">
                                    </div>
                                    <div class="text col-lg-8">
                                        <div class="row h-100">
                                            <div class="left col-lg-7 col-md-6">
                                                <h4>{{ $teacher->name }}
                                                    <span class="subtitle d-block">Mental Health Social Work (Master) - Institute of Education, University of London</span>
                                                </h4>
                                                <p>I am a Afrocentric Dr. Of…</p>
                                                <h6>Subjects: <span class="subtitle">Social Work</span></h6>    
                                                <h6>Levels: <span class="subtitle">Professional</span></h6>    
                                            </div>
                                        <div class="right col-lg-5 col-md-6">
                                        <div class="bdr">
                                            <div class="text-center">
                                                <span class="hour">
                                                    <span class="price d-block">$37</span> /hour
                                                </span>
                                            </div>
                                            <div>
                                                <ul class="rating mb-0">
                                                    <li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li><li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li><li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li><li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li><li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                    <li><small style="font-size: small;">0 reviews</small></li>
                                                </ul>
                                                <div class="clearfix"></div>
                                                <p><span class="badge badge-success">0</span> completed lessons</p>
                                            </div>
                                            <p class="d-none">Complete Session <span class="icn">450</span></p>
                                            <p class=""><span class="icn"><img style="max-width: 20px;" src="{{asset('front/img/orange-1.png')}}" alt=""></span>
                                                        Orange Belt</p>
                                                        <p></p>
                                                            
                                            <div class="text-center">
                                                <a href="viewprofile_teacher.php" class="btn btn-primary">View Profile</a>
                                                <a href="booknow_teacher.php" class="btn btn-primary">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                           @else
                           <div class="item">
                               No Tutors Found
                           </div>
                           @endif 
{{-- 
                            <div class="item mt-5">
                                <div class="row no-gutters">
                                    <div class="img col-lg-4">
                                        <img class="premium-badge-find-a-ninja-badge" src="{{asset('front/img/premium-badeg.png')}}">
                                        <img class="premium-badge-find-a-ninja" src="{{asset('front/img/icon_offre-pro1.png')}}">
    
                                        <img src="{{asset('front/img/teacher/mt-2.jpg')}}" alt="">
                                    </div>
                                    <div class="text col-lg-8">
                                        <div class="row h-100">
                                            <div class="left col-lg-7 col-md-6">
                                                <h4>Dr Claire Felix-Baptiiste
                                                    <span class="subtitle d-block">Mental Health Social Work (Master) - Institute of Education, University of London</span>
                                                </h4>
                                                <p>I am a Afrocentric Dr. Of…</p>
                                                <h6>Subjects: <span class="subtitle">Social Work</span></h6>    
                                                <h6>Levels: <span class="subtitle">Professional</span></h6>    
                                            </div>
                                        <div class="right col-lg-5 col-md-6">
                                        <div class="bdr">
                                            <div class="text-center">
                                                <span class="hour">
                                                    <span class="price d-block">$37</span> /hour
                                                </span>
                                            </div>
                                            <div>
                                                <ul class="rating mb-0">
                                                    <li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li><li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li><li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li><li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li><li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                    <li><small style="font-size: small;">0 reviews</small></li>
                                                </ul>
                                                <div class="clearfix"></div>
                                                <p><span class="badge badge-success">0</span> completed lessons</p>
                                            </div>
                                            <p class="d-none">Complete Session <span class="icn">450</span></p>
                                            <p class=""><span class="icn"><img style="max-width: 20px;" src="{{asset('front/img/orange-1.png')}}" alt=""></span>
                                                        Orange Belt</p>
                                                        <p></p>
                                                            
                                            <div class="text-center">
                                                <a href="" class="btn btn-primary">View Profile</a>
                                                <a href="" class="btn btn-primary">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item mt-5">
                                <div class="row no-gutters">
                                    <div class="img col-lg-4">
                                        <img class="premium-badge-find-a-ninja-badge" src="{{asset('front/img/premium-badeg.png')}}">
                                        <img class="premium-badge-find-a-ninja" src="{{asset('front/img/icon_offre-pro1.png')}}">
    
                                        <img src="{{asset('front/img/teacher/mt-3.jpg')}}" alt="">
                                    </div>
                                    <div class="text col-lg-8">
                                        <div class="row h-100">
                                            <div class="left col-lg-7 col-md-6">
                                                <h4>Dr Claire Felix-Baptiiste
                                                    <span class="subtitle d-block">Mental Health Social Work (Master) - Institute of Education, University of London</span>
                                                </h4>
                                                <p>I am a Afrocentric Dr. Of…</p>
                                                <h6>Subjects: <span class="subtitle">Social Work</span></h6>    
                                                <h6>Levels: <span class="subtitle">Professional</span></h6>    
                                            </div>
                                        <div class="right col-lg-5 col-md-6">
                                        <div class="bdr">
                                            <div class="text-center">
                                                <span class="hour">
                                                    <span class="price d-block">$37</span> /hour
                                                </span>
                                            </div>
                                            <div>
                                                <ul class="rating mb-0">
                                                    <li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li><li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li><li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li><li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li><li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                    <li><small style="font-size: small;">0 reviews</small></li>
                                                </ul>
                                                <div class="clearfix"></div>
                                                <p><span class="badge badge-success">0</span> completed lessons</p>
                                            </div>
                                            <p class="d-none">Complete Session <span class="icn">450</span></p>
                                            <p class=""><span class="icn"><img style="max-width: 20px;" src="{{asset('front/img/orange-1.png')}}" alt=""></span>
                                                        Orange Belt</p>
                                                        <p></p>
                                                            
                                            <div class="text-center">
                                                <a href="" class="btn btn-primary">View Profile</a>
                                                <a href="" class="btn btn-primary">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            
                        </div>
                    </div>
                    
                </div>
            </div>

		</section>
	<!-- End of slider section
		============================================= -->
@endsection