
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
									<img src="{{asset('front/img/teacher/mt-3')}}.jpg" alt="">
								</div>
								<div class="text col-lg-8">
									<div class="name">
										<h4>Daniyal Munaf
											<sapn class="social_share_model_button social_share_dahsboard pull-right">
												<img width="70%" src="{{asset('front/img/logo/share-social-icon')}}.png" ></sapn>
											</h4>

											<div class="row">

												<div class="box col-lg-6">
													<ul class="rating">
														<li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li><li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li><li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li><li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li><li class="pr-1"><i class="fa fa-star-o" aria-hidden="true"></i></li><li><i>0 reviews</i></li>
													</ul>
													<div class="clearfix"></div>
													<p><span class="badge badge-success">0</span>
													Completed lessons</p>
													<p><span class="badge badge-danger">0</span>
													Pending lessons</p>

													<p class=""><span class="mr-2">Last Active:</span>Now</p>
												</div>


												<div class="box col-lg-6">
													<div class="row">
														<div class="col-6">
															<div class="earn">
																<span class="number">$17</span>
																/hour
															</div>
														</div>
														<div class="col-6">
															<div class="earn">
																<span class="number">$0</span>
																Earned
															</div>
														</div>
														<div class="col-6 mt-2">
															<div class="earn">
																<span class="number">£0</span>
																Earned
															</div>
														</div>
														<!-- <div class="clearfix"></div> -->
														<div class="col-6">
															<p class="mt-2"><span class="icn icn-small"><img src="{{asset('front/img/white-1.png')}}" alt=""></span>
															White Belt                                                        </p>
														</div>
														<div class="col-6">
														</div>

													</div>
													
												</div>

												<div class="box col-12">

													<div class="row">
														
														<div class="box col-lg-6 mt-4">
															<button type="button" class="btn btn-info">
																Connect To Stripe
															</button>
														</div>
														<div class="box col-lg-6 mt-4">
															<button type="button" class="btn btn-info paypal-email-modal mb-2" data-email="">
																Enter Your Paypal Email
															</button>
														</div>
													</div>
												</div>

											</div>
                                            <!-- <div class="row">
                                                <div class="col-md-12">
                                                    <sapn class="social_share_model_button"><i class="fa fa-share">Share</i></sapn>
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

        @endsection                    	