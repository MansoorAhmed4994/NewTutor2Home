
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
					<!--<h6>Please update your availability each week.</h6>-->
					<div class="">
						<div class="Profile bg-light position-relative">

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
														<!-- <p><span class="badge badge-success">0</span>
														Completed lessons</p> -->
														<p>Email: {{ Auth::user()->email }}</p>
													</div>
													<!-- <div class="col-6">
														<p><span class="icn icn-small"><img src="{{ asset('front/img/white-1.png') }}" alt=""></span>
														White Belt                                                           </p>
													</div> -->

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
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection                    	