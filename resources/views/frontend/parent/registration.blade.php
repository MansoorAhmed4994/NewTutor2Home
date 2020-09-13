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
								<h2><span>Become A Parent</span></h2><br>
							</div><br>
							
						</div>
					</div>
				</div>
			</div>

			
		</section>

    <!-- Registration form -->
        <br>
        <div class="Loginside">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-7">
						<div class="bg">
							<div class="title text-center">
								Parent SIGN uP
							</div>
							<div class="form">
								@include('frontend.frontalert')
							<form class="form" method="POST" action="{{ route('parent-insert') }}">
        @csrf
									<p class="text-primary mb-2">(*) Marked fields are mandatory</p>


									<div class="row">
										
										<div class="form-group col-sm-6">
											<label class="font-weight-bold">First name</label>
											<span class="text-danger pull-right">*</span>
											<input type="text" name="first_name" id="first_name" placeholder="First name" value="{{ old('first_name') }}" class="form-control">
										</div>
										<div class="form-group col-sm-6">
											<label class="font-weight-bold">Last name</label>
											<span class="text-danger pull-right">*</span>
											<input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" placeholder="Last name" class="form-control">
										</div>
										<div class="form-group col-12">
											<label class="font-weight-bold">Personal email address</label>
											<span class="text-danger pull-right">*</span>
											<input type="text" id="email" name="email" placeholder="Personal email address" autocomplete="username" value="{{ old('email') }}" class="form-control">
										</div>
										<div class="form-group col-12">
											<label class="font-weight-bold">Phone number</label>
											<!-- <span class="text-danger pull-right">*</span> -->
											<input type="text" id="phone" name="phone" placeholder="Phone number"  value="{{ old('phone') }}" class="form-control">
										</div>

										<div class="form-group col-12 mt-3">
											<label class="font-weight-bold">
												Create password
											</label>
											<span class="text-danger pull-right">*</span>
											<input type="password" id="password" name="password" placeholder="Create password" autocomplete="new-password" class="form-control">
										</div>
										<div class="form-group col-12">
											<label class="font-weight-bold">
												Confirm password
											</label>
											<span class="text-danger pull-right">*</span>
											<input type="password" id="c_password" name="password_confirmation" placeholder="Confirm password" autocomplete="new-password" class="form-control">
										</div>
										<div class="form-group col-sm-6 mt-5">
											<label>
												<input name="terms_agree" type="radio" value="1" id="terms_agree">
												<span class="font-weight-bold">I agree to the <a target="_blank" class="text-primary" href="{{ route('termsofservices') }}">Terms of Service</a>
													<span class="ml-1 text-danger">*</span>
												</span>
											</label>

										</div>

										<!-- Captcha......-->

										<!-- <div class="form-group col-sm-6">
											<span class="c-ml text-danger">*</span>
											<div class="g-recaptcha" data-sitekey="6LcmnrIZAAAAAIgR5DA1-YQlfh2A66kFnCeonVSD"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcmnrIZAAAAAIgR5DA1-YQlfh2A66kFnCeonVSD&amp;co=aHR0cHM6Ly93d3cudHV0b3JuaW5qYXMuY29tOjQ0Mw..&amp;hl=en&amp;v=r8WWNwsCvXtk22_oRSVCCZx9&amp;size=normal&amp;cb=icrmn1igrwde" width="304" height="78" role="presentation" name="a-y8xd29x46r0h" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
											<script src="https://www.google.com/recaptcha/api.js?hl=en" async="" defer=""></script>
										</div> -->

										<div class="form-group col-12">
											<button type="submit" class=" btn btn-primary w-100">
												Become A Parent
											</button>
										</div>
										
										<div class="form-group text-center mb-0 col-12">
											<p>Already have an account ? <a href="login.php">Login</a>
											</p>
										</div>
										<div class="form-group col-12 mt-2" style="line-height: 1.3;">
											<small><b>Disclaimer:</b> Your information will be used to send you this newsletter
												and subscribe you to all future updates. We will only send you relevant
												information. While we may user your email address to help target future
												TutorNinjas Ltd digital advertising. We will never sell your information to any
												3rd party. You can, of course, unsubscribe at any time. View out full privacy
												policy.</small>
										</div>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection		