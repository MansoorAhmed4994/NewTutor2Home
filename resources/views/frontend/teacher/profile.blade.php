
@extends('frontend.layouts.app')
@section('content')

<!-- Start of slider section
	============================================= -->
	<section id="slide" class="slider-section">
		<div id="slider-item" class="slider-item-details">
			<div  class="slider-area slider-bg-1 relative-position">
				<div class="slider-text">
					<div class="section-title mb20 headline text-center ">
						<div class="layer-1-3 heading">
							<h2><span>PROFILE</span></h2><br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<div class="Dashboardside pt-5">
		<div class="container">
			<div class="clearfix"></div>
			<div class="row"> 
				@include('frontend.teacher.commons.sidebar')
				<div class="right col-sm-8 col-lg-9">
					<div class="">
						<div class="Profile bg-light position-relative">
							<a href="{{ route('teacher-view-profile') }}" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>

							<div class="row no-gutters">
								<div class="img col-lg-4">
                                    @if(Auth::user()->image!="")
									
									<img src="{{ url('images') }}/{{ Auth::user()->image }}" alt="">
									@else
									<img src="{{ asset('front/img/teacher/mt-3.jpg') }}" alt="">
									@endif
									

									
								</div>
								<div class="text col-lg-8">
									<div class="name">
										<h4>{{ Auth::user()->name }}</h4>
										<!-- <p>Fully Qualified &amp; Experienced GCSE Maths Teacher</p> -->
										<div class="row">

											<div class="box col-lg-7">
												<ul class="rating">
													<li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li><li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li><li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li><li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li><li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li>                                                       <li><i>0                                                               reviews</i></li>
												</ul>

												<div class="row mt-5">
													<div class="col-12">
														<p class=""><span class="mr-2">Last
														Active:</span>Now                                                           </p>
														<p><span class="badge badge-success">0</span>
														Completed lessons</p>
														<p>Email: {{ Auth::user()->email }}</p>
													</div>
													<div class="col-6">
														<p><span class="icn icn-small"><img src="{{ asset('front/img/white-1.png') }}" alt=""></span>
														White Belt                                                           </p>
													</div>

													<div class="col-6">

														<p class="">
														</p>
													</div>

												</div>

											</div>

											<div class="box col-lg-5 mt-lg-5">
												<div class="row">
													<div class="col-6">
														<div class="earn">
															<span class="number">$0</span>
															Earned
														</div>
													</div>
													<div class="col-6">
														<div class="earn">
															<span class="number">£0</span>
															Earned
														</div>
													</div>
                                                       <!-- <div class="col-6 mt-2">
                                                           <div class="earn">
                                                               <span
                                                                   class="number"></span>
                                                               Completed sessions
                                                           </div>
                                                       </div> -->
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <div data-aos="fade-up" class="Bio bg-light position-relative aos-init aos-animate">
                           	<a href="{{ route('teacher-view-profile') }}" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                           	<h4>My Bio</h4>
                           	<p>{{ Auth::user()->description }}</p>
                           </div>
                           
                           <div data-aos="fade-up" class="Subject bg-light position-relative aos-init aos-animate">
                           	<a href="{{ route('teacher-update-Subject') }}" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                           	<h4>My subjects</h4>
                           	<p>I teach the following subjects:</p>
                           	<h6 class="">
							   @for($i=0;$i<=count($subjectall)-1;$i++)
                              @if($Subject->subject==$i) {{ $subjectall[$i] }} @endif
                             @endfor
                           	</h6>
                           </div>
                           <div data-aos="fade-up" class="Qualifications bg-light position-relative aos-init aos-animate">
                           	<a href="{{ route('teacher-update-Qualification') }}" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                           	<h4>My qualifications</h4>

                           	<div class="uni-list">
                           	</div>
                           	<div>
                           		<h6>School Details</h6>
                           		<p>
                           			<span class="font-weight-bold">Name:</span>
                           			@for($i=0;$i<=count($qualificationall)-1;$i++)
                              @if($Qualification->class_type==$i) {{ $qualificationall[$i] }} @endif
                             @endfor
                           		</p>
                           		<div class="row mt-3">
                           			<div class="col-sm-3">
                           				<span class="font-weight-bold">
                           					Subject
                           				</span>
                           			</div>
                                       <!-- <div class="col-sm-3">
                                           <span class="font-weight-bold">
                                               Exam Board
                                           </span>
                                       </div> -->
                                       <div class="col-sm-3">
                                       	<span class="font-weight-bold">
                                       		Teaching level
                                       	</span>
                                       </div>
                                       <!-- <div class="col-sm-3">
                                       	<span class="font-weight-bold">
                                       		Result
                                       	</span>
                                       </div> -->
                                   </div>
                                   <div class="row mt-3">
                                   	<div class="col-sm-3">
									   @for($i=0;$i<=count($qualification_type)-1;$i++)
                              @if($Qualification->qualification_type==$i) {{ $qualification_type[$i] }} @endif
                             @endfor
                                   	</div>
                                       <!-- <div class="col-sm-3">
                                       ACT                                       </div> -->
                                       <div class="col-sm-3">
                                       @for($i=0;$i<=count($classtype)-1;$i++)
                              @if($Qualification->level==$i) {{ $classtype[$i] }} @endif
                             @endfor
                                       </div>
                                       <!-- <div class="col-sm-3">
                                       	Pass
                                       </div> -->
                                   </div>
                               </div>
                           </div>
                           <div data-aos="fade-up" class="position-relative text-right aos-init">
                           	<a href="javascript:;" data-id="7166" id="delete-account" class="btn btn-danger">Delete my account</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>

       @endsection                    	